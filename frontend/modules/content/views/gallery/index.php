<?php

$this->title = 'Ход строительства';
$this->params['breadcrumbs'][] = $this->title;
?>`

<section class="construction" id="pdopage">
  <div class="container">
    <h1>
      <?= $this->title; ?>
    </h1>

    <?php foreach ($houses as $k => $house): ?>
      <h2 class="h2title">
        <?= $house->nameWithPrefix; ?>
      </h2>
      <div class="construction__wrap rows">
        <?php foreach ($house->galleries as $gallery): ?>
            <?= $this->render('_item', ['model' => $gallery]); ?>
        <?php endforeach; ?>
      </div>
    <?php endforeach; ?>
  </div>
</section>
