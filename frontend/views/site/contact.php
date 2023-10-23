<?php

use yii\helpers\Html;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="contacts">
  <div class="container">
    <h1>
      <?= Html::encode($this->title); ?>
    </h1>
    <div class="contacts__wrap">
      <div class="contacts__info">
        <div class="contacts__item">
          <div class="contacts__item-title">Адрес ЖК</div>
          <div class="contacts__item-text">
            <?= Yii::$app->configManager->getItemValue('contactAddress'); ?>
          </div>
        </div>
        <div class="contacts__item">
          <div class="contacts__item-title">Телефон</div>
          <a class="contacts__item-text" href="tel:+78792261420">+7 (879) 226-14-20</a>
        </div>
        <div class="contacts__item">
          <div class="contacts__item-title">E-mail</div>
          <a class="contacts__item-text" href="mailto:Dom-Kliuch@yandex.ru">Dom-Kliuch@yandex.ru</a>
        </div>
      </div>
      <div id="map" style="background-color: grey;">
        
      </div>
    </div>
  </div>
</section>
 
  
