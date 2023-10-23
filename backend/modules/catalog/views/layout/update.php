<?php

$this->title = Yii::t('app', 'Update Layout: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'CATALOG_MODULE'), 'url' => ['/catalog']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Layouts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="layout-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
