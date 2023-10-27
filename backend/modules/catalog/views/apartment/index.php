<?php

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
                'attribute' => 'layout_id',
                'format' => 'raw',
                'filter' => ArrayHelper::map(Layout::find()->all(), 'id', 'nameWithCountRoomsAndTotalArea'),
                'value' => function ($data) {
                    return $data->layout->nameWithCountRoomsAndTotalArea;
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
