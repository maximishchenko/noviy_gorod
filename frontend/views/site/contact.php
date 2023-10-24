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
          <?= Html::a(Yii::$app->configManager->getItemValue('contactPhone'), 'tel:' . Yii::$app->configManager->getItemValue('contactPhone'), ['class' => 'contacts__item-text']); ?>
        </div>
        <div class="contacts__item">
          <div class="contacts__item-title">E-mail</div>
          <?= Html::mailto(Yii::$app->configManager->getItemValue('contactEmail'), Yii::$app->configManager->getItemValue('contactEmail'), ['class' => 'contacts__item-text']); ?>
        </div>
      </div>
      <div id="map" style="background-color: grey;">
        
      </div>
    </div>
  </div>
</section>
 
  
