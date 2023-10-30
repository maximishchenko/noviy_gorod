<?php

use yii\helpers\Html;

$this->title = $model->layout->count_rooms . '-комнатная квартира ' . $model->layout->total_area . ' м<sup>2</sup>';
$this->params['breadcrumbs'][] = ['label' => 'Выбрать квартиру', 'url' => ['/filter']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="room">
  <div class="container">
    <h1><?= $this->title; ?> </h1>
    <div class="room__wrap">
      <div class="room__left">
        <div class="room__top">

          <div class="room__top-item room__top-item--active" data-id="1">
            <a class="room__image" href="<?= $model->thumb; ?>" data-fancybox="room">
              <img src="<?= $model->thumb; ?>">
              <div class="room__image-zoom">
                <?= Html::img('/static/sprite.svg#zoom-icon'); ?>
              </div>
            </a>
          </div>

          <?php if ($model->layout->image): ?>
          <div class="room__top-item" data-id="2">
            <a class="room__image" href="<?= $model->layout->thumb; ?>" data-fancybox="entrance">
              <img src="<?= $model->layout->thumb; ?>">
              <svg width="662" height="747" viewBox="0 0 662 747" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="is-active" opacity="0.8" d="M257.623 547.64V416.182L305.538 415.772V404.305H334.205V407.581L413.244 408.4L412.425 555.012H341.986V547.64H257.623Z" fill="white"></path>
              </svg>
              <div class="room__image-zoom">
                <?= Html::img('/static/sprite.svg#zoom-icon'); ?>
              </div>
            </a>
          </div>
          <?php endif; ?>

        </div>
        <?php if ($model->layout->image): ?>
        <div class="room__tabs">
          <div class="room__tab room__tab--active page-btn" data-id="1">Квартира</div>
          <div class="room__tab page-btn" data-id="2">Расположение</div>
        </div>
        <?php endif; ?>
      </div>
      <div class="room__info">
        <div class="room__info-items">
          <div class="room__info-item">
            <div class="room__info-item-title">Литер</div>
            <div class="room__info-item-text">
              <?= $model->layout->entrance->house->name; ?>
            </div>
          </div>
          <div class="room__info-item">
            <div class="room__info-item-title">Подъезд</div>
            <div class="room__info-item-text">
              <?= $model->entrance->number; ?>
            </div>
          </div>
          <div class="room__info-item">
            <div class="room__info-item-title">Комнат</div>
            <div class="room__info-item-text">
              <?= $model->layout->count_rooms; ?>
            </div>
          </div>
          <div class="room__info-item">
            <div class="room__info-item-title">Площадь</div>
            <div class="room__info-item-text">
              <?= $model->layout->total_area; ?> м<sup>2</sup>
            </div>
          </div>
        </div>
        <div class="room__btn js-open-feedback">Оставить заявку</div>
      </div>
    </div>
  </div>
</section>


<section class="apartments-list">
  <div class="apartments-list__floor__label">
    <div class="apartments-list__floor__label__text">
      2 этаж
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>2
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>3
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>4
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>5
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>6
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>7
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>8
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>9
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>10
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  
  <div class="apartments-list__floor__label">
    <div class="apartments-list__floor__label__text">
      3 этаж
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>11
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>12
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>13
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>14
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>15
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>16
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>17
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>18
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>19
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>20
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  
  <div class="apartments-list__floor__label">
    <div class="apartments-list__floor__label__text">
      4 этаж
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  
  <div class="apartments-list__floor__label">
    <div class="apartments-list__floor__label__text">
      5 этаж
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  
  <div class="apartments-list__floor__label">
    <div class="apartments-list__floor__label__text">
      6 этаж
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  
  <div class="apartments-list__floor__label">
    <div class="apartments-list__floor__label__text">
      7 этаж
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  
  <div class="apartments-list__floor__label">
    <div class="apartments-list__floor__label__text">
      8 этаж
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
  <div class="apartments-list__floor__item">
    <div class="apartments-list__floor__item__title">
      <span class="apartment-name">Квартира </span>1
    </div>
    <div class="apartments-list__floor__item__content">
      <div class="apartment-rooms">
        Однокомнатная
      </div>
      <div class="apartment-area">
        42.30
      </div>
    </div>
  </div>
</section>
  