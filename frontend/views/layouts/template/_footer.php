<?php
use frontend\modules\content\models\DocumentCategory;
use frontend\modules\content\models\Mortgage;
use frontend\modules\content\models\Offer;
use yii\helpers\Html;
?>

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
                <?= Html::a('Кладовые помещения', ['/storage'], ['class' => 'footer__links-item']); ?>
                <?= Html::a('Коммерческие помещения', ['/commercial'], ['class' => 'footer__links-item']); ?>
                <?= Html::a('Ход строительства', ['/gallery'], ['class' => 'footer__links-item']); ?>
                <?php if(Offer::getActiveOffer()): ?>
                  <?= Html::a('Акции', ['/offer'], ['class' => 'footer__links-item']); ?>
                <?php endif; ?>
                <?= Html::a('Паркинг', ['/parking'], ['class' => 'footer__links-item']); ?>
                <?php if(DocumentCategory::getActiveCategories()): ?>
                  <?= Html::a('Документы', ['/documents'], ['class' => 'footer__links-item']); ?>
                <?php endif; ?>
                <?= Html::a('Контакты', ['/contact'], ['class' => 'footer__links-item']); ?>
              </div>
            </div>
            <div class="footer__links-col">
              <?php if(Mortgage::getActiveMortgages()): ?>
              <div class="footer__links-title">Способы оплаты</div>
              <div class="footer__links-items">
                <?= Html::a('Ипотека', ['/payment/mortgage'], ['class' => 'footer__links-item']); ?>
              </div>
              <?php endif; ?>
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