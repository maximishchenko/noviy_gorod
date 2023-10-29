<?php
$this->title = 'Выбрать квартиру';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="room-search">
  <div class="container">
    <h1>
      <?= $this->title; ?>
    </h1>
          
    <?= $this->render('//layouts/template/product/_search', ['searchModel' => $searchModel]); ?>

    <div class="room-search__items rows">
      <?= $this->render('//layouts/template/product/_list', ['dataProvider' => $dataProvider]); ?>
    </div>

    <?= $this->render('//layouts/template/product/_pager', ['dataProvider' => $dataProvider]); ?>

  </div>
</section>
      