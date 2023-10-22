<?php

$this->title = Yii::t('app', 'Update Entrance: {number}', [
    'number' => $model->getNumberWithPrefix(),
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'CATALOG_MODULE'), 'url' => ['/catalog']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Entrances'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entrance-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    
</div>
