<?php

use common\models\ApartmentStatus;

?>

<div class="apartments-list-wraper">
  <h2 style="text-align: center; margin-bottom: 1rem;">
    <?= $entrance->numberWithPrefix; ?>
  </h2>
  <section class="apartments-list" style="grid-template-columns: 60px repeat(<?= count($entrance->layouts) ; ?>, 1fr); ">
    

<?php

 for($floor = 1; $floor <= $entrance->count_floors; $floor++): ?>
      <div class="apartments-list__label">
        <div class="apartments-list__label__text">
          <?= $floor; ?> этаж
        </div>
      </div>

      <?php foreach($entrance->layouts as $layout): ?>

        <?php  $apartment = $apartmentModel->getApartmentsByFloorAndLayout($floor, $layout->id); ?>

        <?php if ($apartment->number): ?>
        <div class="apartments-list__item <?= ($apartment->id == $current) ? 'apartments-list__item--selected' : ApartmentStatus::getStatusesCssClassNames()[$apartment->sale_status]; ?>">
          <div class="apartments-list__item__title">
            <span class="apartment-name">Квартира </span><?= $apartment->number; ?>
          </div>
          <div class="apartments-list__item__content">
            <div class="apartment-rooms">
              <?= $layout->count_rooms; ?>-комнатная
            </div>
            <div class="apartment-area">
              <?= $layout->total_area; ?>
            </div>
          </div>
        </div>
        <?php else: ?>

        <div class="apartments-list__item">
        </div>

        <?php endif; ?>

      <?php endforeach; ?>

    <?php endfor; ?>

  </section>

  <div class="apartments-list-legend">
    <div class="apartments-list-legend__item">
      <span class="apartments-list-legend__item__color apartments-list-legend__item__color--free"></span> - свободна
    </div>
    <div class="apartments-list-legend__item">
      <span class="apartments-list-legend__item__color apartments-list-legend__item__color--sold"></span> - продана
    </div>
    <div class="apartments-list-legend__item">
      <span class="apartments-list-legend__item__color apartments-list-legend__item__color--reserved"></span> - бронь
    </div>
    <?php if($current != null): ?>
    <div class="apartments-list-legend__item">
      <span class="apartments-list-legend__item__color apartments-list-legend__item__color--selected"></span> - выбрано вами
    </div>
    <?php endif; ?>
  </div>
</div>