<?php

use hail812\adminlte\widgets\SmallBox;
use yii\helpers\Url;

?>

<div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <?= SmallBox::widget([
                'title' => Yii::t('app', 'Lead'),
                'text' => Yii::t('app', 'Lead Edit'),
                'icon' => 'fas fa-inbox',
                'theme' => 'warning',
                'linkText' => Yii::t('app', 'GO_LINK'),
                'linkUrl' => Url::to(['/content/lead'])
            ]) ?>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <?= SmallBox::widget([
                'title' => Yii::t('app', 'Stage'),
                'text' => Yii::t('app', 'Stage Edit'),
                'icon' => 'fas fa-camera',
                'theme' => 'warning',
                'linkText' => Yii::t('app', 'GO_LINK'),
                'linkUrl' => Url::to(['/content/stage'])
            ]) ?>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <?= SmallBox::widget([
                'title' => Yii::t('app', 'Offer'),
                'text' => Yii::t('app', 'Offer Edit'),
                'icon' => 'fas fa-shopping-cart',
                'theme' => 'warning',
                'linkText' => Yii::t('app', 'GO_LINK'),
                'linkUrl' => Url::to(['/content/offer'])
            ]) ?>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <?= SmallBox::widget([
                'title' => Yii::t('app', 'Gallery'),
                'text' => Yii::t('app', 'Gallery Edit'),
                'icon' => 'fa fa-file-image',
                'theme' => 'warning',
                'linkText' => Yii::t('app', 'GO_LINK'),
                'linkUrl' => Url::to(['/content/gallery'])
            ]) ?>
        </div>
</div>