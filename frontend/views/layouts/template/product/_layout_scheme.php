<h2 style="text-align: center; margin-bottom: 1rem;">
  <?= $entrance->numberWithPrefix; ?>
</h2>
<section class="apartments-list" style="grid-template-columns: 60px repeat(<?= count($entrance->layouts) ; ?>, 1fr); ">
  

  <?php for($floor = 1; $floor <= $entrance->count_floors; $floor++): ?>
    <div class="apartments-list__floor__label">
      <div class="apartments-list__floor__label__text">
        <?= $floor; ?> этаж
      </div>
    </div>

    <?php foreach($entrance->layouts as $layout): ?>

      <?php  $apartment = $apartmentModel->getApartmentsByFloorAndLayout($floor, $layout->id); ?>

      <?php if ($apartment->number): ?>
      <div class="apartments-list__floor__item">
        <div class="apartments-list__floor__item__title">
          <span class="apartment-name">Квартира </span><?= $apartment->number; ?>
        </div>
        <div class="apartments-list__floor__item__content">
          <div class="apartment-rooms">
            <?= $layout->count_rooms; ?>-комнатная
          </div>
          <div class="apartment-area">
            <?= $layout->total_area; ?>
          </div>
        </div>
      </div>
      <?php else: ?>

      <div class="apartments-list__floor__item">
      </div>

      <?php endif; ?>

    <?php endforeach; ?>

  <?php endfor; ?>

  </section>