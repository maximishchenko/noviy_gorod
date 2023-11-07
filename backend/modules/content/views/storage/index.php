<?php

use backend\widgets\LinkColumn;
use backend\widgets\ListButtonsWidget;
use backend\widgets\SetColumn;
use common\models\Status;
use yii\helpers\Html;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

$this->title = Yii::t('app', 'Storages');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'CONTENT_MODULE'), 'url' => ['/content']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="storage-index">
    
    
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
                'attribute' => 'name',
                'contentOptions' => ['class' => 'text-wrap'],
                'headerOptions' => array(
                    'class' => 'sort-numerical',
                ),
            ],
            [
                'attribute' => 'sort',
                'contentOptions' => ['style' => 'width:100px;'],
            ],
            [
                'class' => SetColumn::className(),
                'filter' => Status::getStatusesArray(),
                'attribute' => 'status',
                'name' => function($data) {
                    return ArrayHelper::getValue(Status::getStatusesArray(), $data->status);
                },
                'contentOptions' => ['style' => 'width:100px;'],
                'cssCLasses' => [
                    Status::STATUS_ACTIVE => 'success',
                    Status::STATUS_BLOCKED => 'danger',
                ],
            ],
            [
                'class' => SetColumn::className(),
                'filter' => false,
                'value' => function($data) {
                    return ($data->id == Yii::$app->configManager->getItemValue('contentStorageStage')) ? Yii::t('app', 'Used') : Yii::t('app', 'Not Used');
                },
                'contentOptions' => ['style' => 'width:100px;'],
                'cssCLasses' => [
                    Yii::t('app', 'Used') => 'warning',
                    Yii::t('app', 'Not Used') => 'primary',
                ],
            ],
            [
                'class' => ActionColumn::className(),
                'header' => Html::a(Yii::t('app', 'Disable stage'), ['clear-stage'], []),
                'contentOptions' => ['style' => 'width:80px;'],
                'template' => '{set-item} &nbsp; {delete}',
                'buttons' => [
                    'set-item' => function ($url, $model) {
                        return Html::a('<i class="fa fa-check"></i>', ['set-default-item', 'id' => $model->id], [
                            'title' => Yii::t('app', 'Set Default Item'),
                            'data' => [
                                'method' => 'post',
                                'confirm' => Yii::t('app', 'Do set storage item answer'),
                            ]
                        ]);
                    },
                ],
            ],
        ],
    ]); ?>


</div>
