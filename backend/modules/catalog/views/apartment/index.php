<?php

use backend\modules\catalog\models\Entrance;
use backend\modules\catalog\models\House;
use backend\modules\catalog\models\Layout;
use backend\widgets\LinkColumn;
use backend\widgets\ListButtonsWidget;
use backend\widgets\SetColumn;
use common\models\ApartmentStatus;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

$this->title = Yii::t('app', 'Apartments');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'CATALOG_MODULE'), 'url' => ['/catalog']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apartment-index">

    <p class="text-right">
        <?= ListButtonsWidget::widget() ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'id',
                'contentOptions' => ['style' => 'width:100px;'],
            ],
            [
                'class' => LinkColumn::className(),
                'attribute' => 'apartmentName',
                'contentOptions' => ['class' => 'text-wrap'],
                'headerOptions' => [
                    'class' => 'sort-numerical',
                ],
            ],
            [
                'attribute' => 'house',
                'format' => 'raw',
                'filter' => ArrayHelper::map(House::find()->all(), 'id', 'nameWithPrefix'),
                'value' => function ($data) {
                    return $data->entrance->house->nameWithPrefix ;
                }
            ],
            [
                'attribute' => 'entrance',
                'format' => 'raw',
                'filter' => ArrayHelper::map(Entrance::find()->all(), 'id', 'numberWithPrefix'),
                'value' => function ($data) {
                    return $data->entrance->numberWithPrefix ;
                }
            ],
            [
                'attribute' => 'layout_id',
                'format' => 'raw',
                'filter' => ArrayHelper::map(Layout::find()->all(), 'id', 'nameWithHouseAndSection'),
                'value' => function ($data) {
                    return $data->layout->nameWithHouseAndSection;
                }
            ],
            'apartment_floor',
            [
                'attribute' => 'sort',
                'contentOptions' => ['style' => 'width:100px;'],
            ],
            [
                'class' => SetColumn::className(),
                'filter' => ApartmentStatus::getStatusesArray(),
                'attribute' => 'status',
                'name' => function($data) {
                    return ArrayHelper::getValue(ApartmentStatus::getStatusesArray(), $data->status);
                },
                'contentOptions' => ['style' => 'width:100px;'],
                'cssCLasses' => [
                    ApartmentStatus::STATUS_ACTIVE => 'success',
                    ApartmentStatus::STATUS_RESERVED => 'info',
                    ApartmentStatus::STATUS_BLOCKED => 'danger',
                ],
            ],
            [
                'class' => ActionColumn::className(),
                'contentOptions' => ['style' => 'width:80px;'],
                'template' => '{delete}',
            ],
        ],
    ]); ?>


</div>
