<?php
use yii\helpers\Html;
?>

<!-- TODO Заполнить актуальные ссылки, добавить адрес в настройки, уточнить состав ссылок -->
<footer class="footer">
  <div class="container">
    <div class="footer__top">
      <div class="footer__title">Контакты</div>
      <div class="footer__wrap">
        <div class="footer__contacts">
          <div class="footer__contacts-item">
            <div class="footer__contacts-title">Адрес</div>
            <div class="footer__contacts-text">
              <?= Yii::$app->configManager->getItemValue('contactAddress'); ?>
            </div>
          </div>
          <div class="footer__contacts-item">
            <div class="footer__contacts-title">Телефон</div>
            <?= Html::a(Yii::$app->configManager->getItemValue('contactPhone'), 'tel:' . Yii::$app->configManager->getItemValue('contactPhone'), ['class' => 'footer__contacts-text']); ?>
          </div>
          <div class="footer__contacts-item">
            <div class="footer__contacts-title">E-mail</div>
            <?= Html::mailto(Yii::$app->configManager->getItemValue('contactEmail'), Yii::$app->configManager->getItemValue('contactEmail'), ['class' => 'footer__contacts-text']); ?>
          </div>
        </div>
        <div class="footer__menu">
          <div class="footer__links">
            <div class="footer__links-col">
              <div class="footer__links-title">ЖК Новый Город</div>
              <div class="footer__links-items">
                <?= Html::a('Выбрать квартиру', ['/filter'], ['class' => 'footer__links-item']); ?>
                <?= Html::a('Кладовые помещения', ['#'], ['class' => 'footer__links-item']); ?>
                <?= Html::a('Ход строительства', ['#'], ['class' => 'footer__links-item']); ?>
                <?= Html::a('Акции', ['#'], ['class' => 'footer__links-item']); ?>
                <?= Html::a('Паркинг', ['#'], ['class' => 'footer__links-item']); ?>
                <?= Html::a('Документы', ['#'], ['class' => 'footer__links-item']); ?>
                <?= Html::a('Контакты', ['/contact'], ['class' => 'footer__links-item']); ?>
              </div>
            </div>
            <div class="footer__links-col">
              <div class="footer__links-title">Способы оплаты</div>
              <div class="footer__links-items">
                <?= Html::a('Ипотека', ['/mortgage'], ['class' => 'footer__links-item']); ?>
                <?= Html::a('Рассрочка', ['#'], ['class' => 'footer__links-item']); ?>
                <?= Html::a('Материнский капитал', ['#'], ['class' => 'footer__links-item']); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="footer__copyright">&copy; <?= date('Y'); ?> «ЖК Новый Город»</div>
            <?= Html::a('Политика конфиденциальности', ['/policy'], ['class' => 'footer__bottom-link']); ?>
        </div>
    </div>
</footer>