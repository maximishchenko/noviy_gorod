<?php

use yii\helpers\Html;
?>

<div class="construction-progress__item" data-fancybox-trigger="gallery_<?= $model->id; ?>">
    <div class="construction-progress__item-date">
        <?= $model->name; ?>
    </div>
    <div class="construction-progress__item-image">
      <?= Html::img($model->uploads[0]->image); ?>
      <div class="send-btn">
        <div class="send-btn__icon"></div>
        <div class="send-btn__text"><?= $model->getUploads()->count(); ?> фото</div>
      </div>
    </div>
    <div class="construction-progress__item-images">
        <?php foreach($model->uploads as $upload): ?>
            <?= Html::a('', $upload->image, ['data-fancybox' => 'gallery_'.$model->id, 'loading' => 'lazy', 'alt' => $model->name]); ?>
        <?php endforeach; ?>
    </div>
</div>