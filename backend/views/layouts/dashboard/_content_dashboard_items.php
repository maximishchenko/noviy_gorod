<?php

use hail812\adminlte\widgets\SmallBox;
use yii\helpers\Url;

?>

<div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <?= SmallBox::widget([
                'title' => Yii::t('app', 'Lead'),
                'text' => Yii::t('app', 'Lead Edit'),
                'icon' => 'fas fa-cog',
                'theme' => 'warning',
                'linkText' => Yii::t('app', 'GO_LINK'),
                'linkUrl' => Url::to(['/content/lead'])
            ]) ?>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <?= SmallBox::widget([
                'title' => Yii::t('app', 'Stage'),
                'text' => Yii::t('app', 'Stage Edit'),
                'icon' => 'fas fa-cog',
                'theme' => 'warning',
                'linkText' => Yii::t('app', 'GO_LINK'),
                'linkUrl' => Url::to(['/content/stage'])
            ]) ?>
        </div>
</div>