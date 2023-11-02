<?php

use yii\helpers\Html;

$this->title = 'Паркинг';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="parking-banner">
    <?php if(isset($activeItem) && !empty($activeItem)): ?>
    <div class="container" style="background: url(<?= $activeItem->thumb; ?>) no-repeat;">
        <div class="parking-banner__title">
            <?= $activeItem->name; ?>
        </div>
        <div class="parking-banner__subtitle">
            <?= $activeItem->description; ?>
        </div>
        <?php if(isset($activeItem->callback_button_name) && !empty($activeItem->callback_button_name)): ?>
        <div class="parking-banner__btn js-open-feedback">
            <?= $activeItem->callback_button_name; ?>
        </div>
        <?php endif; ?>
    </div>
    <?php endif; ?>
</section>

<?php if(isset($activeItem->layoutThumb) && !empty($activeItem->layoutThumb)): ?>
<section>
    <div class="container center">
        <?= Html::img($activeItem->layoutThumb); ?>
    </div>
</section>
<?php endif; ?>


<section class="parking-advantages"> 
  <div class="container"> 
    <div class="parking-advantages__wrap">
        <div class="parking-advantages__item"> 
            <div class="parking-advantages__image">
                <img src="/static/sprite.svg#parking-advantages-2">
            </div>
            <div class="parking-advantages__title">Размер парковочного места</div>
            <div class="parking-advantages__text"><p>Высота 2,3 м</p>           <p>Ширина 2,7 м</p>           <p>Длина 5,3 м</p></div>
        </div>
        <div class="parking-advantages__item"> 
            <div class="parking-advantages__image">
                <img src="/static/sprite.svg#parking-advantages-3">
            </div>
            <div class="parking-advantages__title">Безопасность 24/7</div>
            <div class="parking-advantages__text"></div>
        </div>
    </div>
  </div>
</section>

<?= $this->render('//layouts/template/form/_inline', ['title' => 'Поможем в выборе']); ?>
