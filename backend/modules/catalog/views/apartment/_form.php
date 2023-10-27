<?php

use backend\modules\catalog\models\Apartment;
use backend\widgets\SingleImagePreviewWidget;
use common\models\ApartmentStatus;
use yii\bootstrap5\ActiveForm;

?>

<div class="apartment-form">


    <div class="alert alert-info">
        Внимание. Выпадающее меню выбора количества этажей генерируется на основании выбранной планировки.
        При создании записи обязательно выбрать планировку, после этого появятся элементы выпадающего списка для указания этажа. 
    </div>

    <?php $form = ActiveForm::begin([
        'id' => 'apartment-form'
    ]); ?>
    <?= $form->errorSummary($model, ['class' => 'alert alert-danger']); ?>
    
    <div class="accordion" id="backendAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headPrimary">
                <button class="accordion-button" type="button" data-toggle="collapse" data-target="#primary" aria-expanded="true" aria-controls="primary">
                    <strong>
                        <?= Yii::t('app', 'Primary block'); ?>
                    </strong>
                </button>
            </h2>
            <div id="primary" class="accordion-collapse collapse show" aria-labelledby="headPrimary" data-bs-parent="#backendAccordion">
                <div class="accordion-body">

                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'layout_id')->dropDownList($model->getLayoutItems(), [
                                    'prompt' => '',
                                    'onchange'=>'
                                        $.get( "'.Yii::$app->urlManager->createUrl('/catalog/apartment/floor-list?id=').'"+$(this).val(), function( data ) {
                                        $( "select#apartment_floor" ).html( data );
                                    })'                 
                            ]) ?>
                            <?= $form->field($model, 'apartment_floor', ['inputOptions' => ['id' => 'apartment_floor']])->dropDownList($model->getFloors(), ['prompt' => '']) ?>
                            <?= $form->field($model, 'sort')->textInput() ?>
                            <?= $form->field($model, 'status')->dropDownList(ApartmentStatus::getStatusesArray(), ['prompt' => '']) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>
                        </div>
                    </div>
                </div>
            </div>

            
            <div id="imagesBlock" class="accordion-collapse collapse show" aria-labelledby="headImages" data-bs-parent="#backendAccordion">
                <div class="accordion-body">

                    <div class="row">
                        <div class="col-md-12">
                            <?= $form->field($model, 'imageFile')->fileInput() ?>
                            <?php if(isset($model->image) && !empty($model->image)): ?>
                                <div class="row">
                                    <?= SingleImagePreviewWidget::widget([
                                        'id' => $model->id,
                                        'filePath' => $model->getUrl(Apartment::UPLOAD_PATH, $model->image),
                                        'url' => 'delete-image',
                                        'fancyboxGalleryName' => "SingleCategoryImage",
                                    ]); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>

<?= $this->render('//layouts/forms/_buttons', ['formId' => 'apartment-form']); ?>