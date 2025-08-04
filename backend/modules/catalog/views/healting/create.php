<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\modules\catalog\models\Healting $model */

$this->title = Yii::t('app', 'Add new Record');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'CATALOG_MODULE'), 'url' => ['/catalog']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Healtings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="healting-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
