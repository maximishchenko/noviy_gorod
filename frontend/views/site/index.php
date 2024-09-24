<?php

use frontend\components\widgets\MinPriceWidget;
use yii\helpers\Html;

$this->title = 'Новострой';

/** @var $apartmentModel **/
/** @var $layoutModel **/
/** @var $stage **/
?>

<?php if(!empty($stage)): ?>
<section class="banner banner-new">
  <div class="banner__slider">
    <div class="banner-new__wrapper" style="background-image: url(<?= $stage->background; ?>);">
      <div class="container container--big">
        <div class="banner__item">
          
          <div class="banner-new__wrap">
            <div class="banner-new__title">
              <?= $stage->text; ?>
            </div>
            <?php if(!empty($stage->stageItemsList)): ?>
            <ul class="banner-new__list">
              <?php foreach($stage->stageItemsList as $stageListItem): ?>
              <li>
                <?= $stageListItem->name; ?>
              </li>
              <?php endforeach; ?>
            </ul>
            <?php endif; ?>
          </div>

          <div class="banner-new__advantages">
            <?php if(!empty($stage->stageItems)): ?>
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


<!-- Start Offers -->

<section class="main-offers" id="flats">
  <div class="container">
    <div class="page-title">Действующие акции</div>
    <div class="page__subtitle"></div>
    <div class="main-rooms__content">
      <div class="main-rooms__wrap">
          <div class="swiper-container main-offers-slider">
            <div class="swiper-wrapper">

              <?php foreach ($offers->getActiveOffer() as $offer): ?>
                  <div class="swiper-slide">

                  <a href="/offer/<?= $offer->slug; ?>">
                    <div class="news__item">
                        <?= Html::img($offer->previewThumb, ['class' => 'news__item-img', 'alt' => $offer->name]); ?>
                        <div class="news__item-title"><?= $offer->name; ?></div>
                      <div class="room__btn js-open-feedback">Оставить заявку</div>
                    </div>
                  </a>

                </div>
              <?php endforeach; ?>

            </div>
          </div>
          <div class="information__navigation">
            <div class="information__navigation-btn main-offers--prev">
              <?= Html::img('/static/svg/arrow_p.svg'); ?>
            </div>
            <div class="information__navigation-btn main-offers--next">
              <?= Html::img('/static/svg/arrow_n.svg'); ?>
            </div>
          </div>

      </div>
    </div>
  </div>
</section>

<!-- End Offers -->


<section class="main-rooms" id="flats">
  <div class="container">
    <div class="page-title">Выберите свою квартиру</div>
    <div class="page__subtitle"></div>
    <div class="main-rooms__content">
      <div class="information__tabs">
        <?php foreach($layoutModel->getApartmentRoomsCount() as $k => $room): ?>
          <div class="information__tab <?= ($k == 0) ? 'information__tab--active' : ''; ?>" data-id="<?= $k; ?>">
            <?= $room; ?>-комнатные
          </div>
        <?php endforeach; ?>
      </div>
      <div class="main-rooms__wrap">

        <?php foreach($layoutModel->getApartmentRoomsCount() as $k => $room): ?>
        <div class="main-rooms__slider <?= ($k == 0) ? 'main-rooms__slider--active' : ''; ?>" data-id="<?= $k; ?>">
          <div class="swiper-container main-rooms-slider">
            <div class="swiper-wrapper">

              <?php foreach ($layoutModel->getLayoutsByRoomsCount($room) as $layout): ?>
                <?php $apartment = $apartmentModel->getFirstApartmentInLayout($layout->id); ?>
                <?php if(!empty($apartment)): ?>
                  <div class="swiper-slide">
                    <?= $this->render('//layouts/template/product/_item', ['model' => $apartment, 'showCallbackButton' => true]); ?>
                  </div>
                <?php endif; ?>
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

<?php if($apartmentModel->getActiveHouses()): ?>
    <?php // foreach($apartmentModel->getActiveHouses()->entrances as $entrance): ?>
    <?php foreach($apartmentModel->getActiveHouses() as $house): ?>
      <?php foreach ($house->entrances as $entrance): ?>
        <?= $this->render('//layouts/template/product/_layout_scheme', ['entrance' => $entrance, 'apartmentModel' => $apartmentModel, 'current' => null, 'house' => $house->name]); ?>
        <?php endforeach; ?>
    <?php endforeach; ?>
<?php endif; ?>
      
<?php // echo $this->render('//layouts/template/form/_inline', ['title' => 'Поможем в выборе']); ?>