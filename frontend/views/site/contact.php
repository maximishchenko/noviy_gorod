<?php

use yii\helpers\Html;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>

<script src="https://api-maps.yandex.ru/2.1/?apikey=<?= Yii::$app->configManager->getItemValue('mapApiKey'); ?>&lang=ru_RU" type="text/javascript"></script>

<script type="text/javascript">
    ymaps.ready(init);
    function init(){
        // var locations = <?php // json_encode(Yii::$app->configManager->getItemValue('location')); ?>;
        let locations = "44.196889,43.131081";
        // var map_root = document.getElementById("root-map");
        
        // var map_title = map_root.getAttribute("data-map-title");
        // var map_body = map_root.getAttribute("data-map-body");
        // var map_footer = map_root.getAttribute("data-map-footer");
        var officeMap = new ymaps.Map("map", {
            center: locations,
            zoom: 1,
            // controls: [],
        });
        
        var officePlaceMark = new ymaps.Placemark(locations, {
                // balloonContentHeader: map_title,
                // balloonContentBody: map_body,
                // balloonContentFooter: map_footer,
                // hintContent: map_title
            }, {
                overlayFactory: 'default#interactiveGraphics',
                iconLayout: 'default#image',
                iconImageHref: '/images/sprite.svg?v=30#pointmap',
                iconImageSize: [60, 60],
                iconImageOffset: [-30, -70],
                iconCaption: map_title
            }
        );			 	
            
        officeMap.geoObjects.add( officePlaceMark );
        officeMap.behaviors.disable('scrollZoom');
        officeMap.behaviors.disable('drag');
    }		
</script>


<section class="contacts">
  <div class="container">
    <h1>
      <?= Html::encode($this->title); ?>
    </h1>
    <div class="contacts__wrap">
      <div class="contacts__info">
        <div class="contacts__item">
          <div class="contacts__item-title">Адрес</div>
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
      <div id="map" class="map" style="background-color: grey;">
        
      </div>
    </div>
  </div>
</section>
 
  
