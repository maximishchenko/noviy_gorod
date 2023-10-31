<?php

use yii\helpers\Html;
?>
<section class="page-error"> 
  <div class="container"> 
    <div class="page-error__title">
        <span>404</span>
    </div>
    <div class="page-error__subtitle">
        Страница не найдена
    </div>
    <div class="page-error__text">
        Ошибка 404. Такой страницы не существует
    </div>
    <?= Html::a('На главную', Yii::$app->homeUrl, ['class' => 'page-btn'])?>
  </div>
</section>

<?= $this->render('//layouts/template/form/_inline'); ?>