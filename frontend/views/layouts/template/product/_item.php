<?php

use yii\helpers\Html;
?>
<a class="flats__item" href="/filter/<?= $model->slug; ?>">
    <div class="flats__item-title">
        <?= $model->layout->count_rooms; ?>-комнатная квартира <?= $model->layout->total_area; ?> м<sup>2</sup>
    </div>
    <div class="flats__item-image">
        <?= Html::img($model->apartmentPreview, []); ?> <!-- $model->thumb -->
    </div>

    <div class="flats__item-chars">
        <p>Литер <?= $model->layout->entrance->house->name; ?></p>
        <p><?= $model->layout->total_area; ?> м<sup>2</sup></p>
    </div>

    <?php if(isset($showCallbackButton) && !empty(($showCallbackButton))): ?>
    <div class="flats__item-link js-open-feedback">Оставить заявку</div>
    <?php endif; ?>
</a>