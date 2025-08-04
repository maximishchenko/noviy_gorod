<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\modules\catalog\models\Healting $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'CATALOG_MODULE'), 'url' => ['/catalog']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Healtings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="healting-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
