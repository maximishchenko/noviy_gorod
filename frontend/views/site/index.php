<?php

use yii\helpers\Html;

$this->title = 'Новострой';
?>

<?php if(isset($stage) && !empty($stage)): ?>
<section class="banner banner-new">
  <div class="banner__slider">
    <div class="banner-new__wrapper" style="background-image: url(<?= $stage->background; ?>);">
      <div class="container container--big">
        <div class="banner__item">
          
          <div class="banner-new__wrap">
            <div class="banner-new__title">
              <?= $stage->text; ?>
            </div>
          </div>

          <div class="banner-new__advantages">
            <?php if(isset($stage->stageItems) && !empty($stage->stageItems)): ?>
              <?php foreach($stage->stageItems as $stageItem): ?>
                <div class="circle-btn circle-btn--active">
                  <?= $stageItem->name; ?>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>



<section class="main-rooms" id="flats">
  <div class="container">
    <div class="page-title">Выберите свою квартиру</div>
    <div class="page__subtitle"></div>
    <div class="main-rooms__content">
      <div class="information__tabs">
        <?php foreach($apartmentModel->getApartmentroomsCount() as $k => $room): ?>
          <div class="information__tab <?= ($k == 0) ? 'information__tab--active' : ''; ?>" data-id="<?= $k; ?>">
            <?= $room; ?>-комнатные
          </div>
        <?php endforeach; ?>
      </div>
      <div class="main-rooms__wrap">
        <?php foreach($apartmentModel->getApartmentroomsCount() as $k => $room): ?>
        <div class="main-rooms__slider <?= ($k == 0) ? 'main-rooms__slider--active' : ''; ?>" data-id="<?= $k; ?>">
          <div class="swiper-container main-rooms-slider">
            <div class="swiper-wrapper">
              <?php foreach ($apartmentModel->getApartmentsByCountRooms($room) as $apartment): ?>
              <div class="swiper-slide">
                <?= $this->render('//layouts/template/product/_item', ['model' => $apartment, 'showCallbackButton' => true]); ?>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="information__navigation">
            <div class="information__navigation-btn main-rooms--prev">
              <?= Html::img('/static/svg/arrow_p.svg'); ?>
            </div>
            <div class="information__navigation-btn main-rooms--next">
              <?= Html::img('/static/svg/arrow_n.svg'); ?>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
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
      
<?= $this->render('//layouts/template/form/_inline', ['title' => 'Поможем в выборе']); ?>