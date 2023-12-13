<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\modules\content\models\Mortgage $model */

$this->title = Yii::t('app', 'Create Mortgage');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mortgages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mortgage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
