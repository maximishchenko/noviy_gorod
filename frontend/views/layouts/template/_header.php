<?php
use yii\helpers\Html;
?>
<!-- TODO заполнить актуальные ссылки, уточнить состав пунктов меню -->
<div class="container">
    <div class="header__wrap">
        <div class="header__left">
            <div class="header__burger"></div>
            <nav class="header__nav">
                <?= Html::a('Выбрать квартиру', ['/filter'], ['class' => 'header__nav-link']); ?>
                <?= Html::a('Ипотека', ['/payment/mortgage'], ['class' => 'header__nav-link']); ?>
                <?= Html::a('Акции', ['/offer'], ['class' => 'header__nav-link']); ?>
            </nav>
        </div>
        <a href="<?= Yii::$app->homeUrl; ?>" class="header__logo">
            <?= Html::img('/static/sprite.svg#logo', ['class' => 'header__logo__img']); ?>
            <div class="header__logo__text">Новый Город</div>
        </a>
        <div class="header__right">
            <nav class="header__nav">
                <?= Html::a('Другие наши проекты', Yii::$app->configManager->getItemValue('anotherProjectsUrl'), ['class' => 'header__nav-link', 'target' => 'blank']); ?>
                <?= Html::a('Контакты', ['/contact'], ['class' => 'header__nav-link']); ?>
            </nav>
            <div class="header__blocks">
                <?= Html::a(Yii::$app->configManager->getItemValue('contactPhone'), 'tel:' . Yii::$app->configManager->getItemValue('contactPhone'), ['class' => 'header__phone']); ?>
                <?= Html::button('Заказать звонок', ['class' => 'js-open-feedback'])?>
            </div>
        </div>
        <div class="header__menu">
            <?= Html::a('Ход строительства', ['/gallery'], ['class' => 'header__menu-link']); ?>
            <?= Html::a('Паркинг', ['/parking'], ['class' => 'header__menu-link']); ?>
            <?= Html::a('Кладовые помещения', ['/storage'], ['class' => 'header__menu-link']); ?>
            <?= Html::a('Коммерческие помещения', ['/commercial'], ['class' => 'header__menu-link']); ?>
            <?= Html::a('Документы', ['/documents'], ['class' => 'header__menu-link']); ?>
            <?= Html::a('Способы оплаты', ['/payment'], ['class' => 'header__menu-link']); ?>
        </div>
        <div class="mobile-menu">
            <?= Html::a('Выбрать квартиру', ['/filter'], ['class' => 'mobile-menu__link']); ?>
            <?= Html::a('Ипотека', ['/payment/mortgage'], ['class' => 'mobile-menu__link']); ?>
            <?= Html::a('Акции', ['/offer'], ['class' => 'mobile-menu__link']); ?>
            <?= Html::a('Ход строительства', ['/gallery'], ['class' => 'mobile-menu__link']); ?>
            <?= Html::a('Паркинг', ['/parking'], ['class' => 'mobile-menu__link']); ?>
            <?= Html::a('Кладовые помещения', ['/storage'], ['class' => 'mobile-menu__link']); ?>
            <?= Html::a('Коммерческие помещения', ['/commercial'], ['class' => 'mobile-menu__link']); ?>
            <?= Html::a('Документы', ['/documents'], ['class' => 'mobile-menu__link']); ?>
            <?= Html::a('Способы оплаты', ['/payment'], ['class' => 'mobile-menu__link']); ?>
            <?= Html::a('Другие наши проекты', Yii::$app->configManager->getItemValue('anotherProjectsUrl'), ['class' => 'mobile-menu__link', 'target' => 'blank']); ?>
            <?= Html::a('Контакты', ['/contact'], ['class' => 'mobile-menu__link']); ?>
        </div>
    </div>
</div>