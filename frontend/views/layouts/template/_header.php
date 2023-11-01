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
                <?= Html::a('Ипотека', ['/mortgage'], ['class' => 'header__nav-link']); ?>
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
            <?= Html::a('Ход строительства', ['#'], ['class' => 'header__menu-link']); ?>
            <?= Html::a('Паркинг', ['#'], ['class' => 'header__menu-link']); ?>
            <?= Html::a('Кладовые помещения', ['#'], ['class' => 'header__menu-link']); ?>
            <?= Html::a('Коммерческие помещения', ['#'], ['class' => 'header__menu-link']); ?>
            <?= Html::a('Документы', ['#'], ['class' => 'header__menu-link']); ?>
            <?= Html::a('Способы оплаты', ['#'], ['class' => 'header__menu-link']); ?>
        </div>
        <div class="mobile-menu">
            <?= Html::a('Выбрать квартиру', ['/filter'], ['class' => 'mobile-menu__link']); ?>
            <?= Html::a('Ипотека', ['/mortgage'], ['class' => 'mobile-menu__link']); ?>
            <?= Html::a('Акции', ['/offer'], ['class' => 'mobile-menu__link']); ?>
            <?= Html::a('Ход строительства', ['#'], ['class' => 'mobile-menu__link']); ?>
            <?= Html::a('Паркинг', ['#'], ['class' => 'mobile-menu__link']); ?>
            <?= Html::a('Кладовые помещения', ['#'], ['class' => 'mobile-menu__link']); ?>
            <?= Html::a('Коммерческие помещения', ['#'], ['class' => 'mobile-menu__link']); ?>
            <?= Html::a('Документы', ['#'], ['class' => 'mobile-menu__link']); ?>
            <?= Html::a('Способы оплаты', ['#'], ['class' => 'mobile-menu__link']); ?>
            <?= Html::a('Другие наши проекты', Yii::$app->configManager->getItemValue('anotherProjectsUrl'), ['class' => 'mobile-menu__link', 'target' => 'blank']); ?>
            <?= Html::a('Контакты', ['/contact'], ['class' => 'mobile-menu__link']); ?>
        </div>
    </div>
</div>