<?php

$this->title = 'Ход строительства';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="construction" id="pdopage">
  <div class="container">
    <h1>
      <?= $this->title; ?>
    </h1>
    <div class="construction__wrap rows">
      <div class="construction-progress__item" data-fancybox-trigger="gallery_210">
        <div class="construction-progress__item-date">Сентябрь 2023 — видеоотчет</div>
        <div class="construction-progress__item-image">
          <img src="frontend\web\images\gallery\oblozhka-sentyabr_590x350_95c.webp" />
          <div class="send-btn">
            <div class="send-btn__icon video"></div>
          </div>
        </div>
        <div class="construction-progress__item-images">
          <a href="https://dzen.ru/embed/v1Scwq5OMXAg?from_block=partner&amp;from=zen&amp;mute=1&amp;autoplay=1&amp;tv=0" data-type="iframe" data-fancybox="gallery_210"></a>
        </div>
      </div>

      <div class="construction-progress__item" data-fancybox-trigger="gallery_204">
        <div class="construction-progress__item-date">Сентябрь 2023 — Литер 3/1</div>
        <div class="construction-progress__item-image">
          <img src="frontend\web\images\gallery\dji-0026_590x350_95c.webp" />
          <div class="send-btn">
            <div class="send-btn__icon"></div>
            <div class="send-btn__text">3 фото</div>
          </div>
        </div>
        <div class="construction-progress__item-images">
          <a href="frontend/web/images/gallery/b0d44f964760fc3e2be6c59eaf40df2d33091ea7.jpg" data-fancybox="gallery_204"></a>
          <a href="frontend/web/images/gallery/49cff4ece1b10a780f67548b4c8cb6a9a090db1a.jpg" data-fancybox="gallery_204"></a>
          <a href="frontend/web/images/gallery/14971ad3d51a02f1185c87825062f774b3effd99.jpg" data-fancybox="gallery_204"></a>
        </div>
      </div>

      <div class="construction-progress__item" data-fancybox-trigger="gallery_205">
        <div class="construction-progress__item-date">Сентябрь 2023 — Литер 3/2</div>
        <div class="construction-progress__item-image">
          <img src="frontend\web\images\gallery\dji-0024_590x350_95c.webp" />
          <div class="send-btn">
            <div class="send-btn__icon"></div>
            <div class="send-btn__text">3 фото</div>
          </div>
        </div>
        <div class="construction-progress__item-images">
          <a href="frontend/web/images/gallery/3b7bd8dfb79a13dc2353ffa24ab4f3ac958be80d.jpg" data-fancybox="gallery_205"></a>
          <a href="frontend/web/images/gallery/dd96f27ac67160f856fd2a86b431cd4dea79b442.jpg" data-fancybox="gallery_205"></a>
          <a href="frontend/web/images/gallery/635fefe9175a917a4e30b49f00f15abb3d629901.jpg" data-fancybox="gallery_205"></a>
        </div>
      </div>

      <div class="construction-progress__item" data-fancybox-trigger="gallery_206">
        <div class="construction-progress__item-date">Сентябрь 2023 — Литер 3/3</div>
        <div class="construction-progress__item-image">
          <img src="frontend\web\images\gallery\dji-0025_590x350_95c.webp" />
          <div class="send-btn">
            <div class="send-btn__icon"></div>
            <div class="send-btn__text">2 фото</div>
          </div>
        </div>
        <div class="construction-progress__item-images">
          <a href="frontend/web/images/gallery/e2b278f9f241d224a40e5bcd0c7c62b228b681ad.jpg" data-fancybox="gallery_206"></a>
          <a href="frontend/web/images/gallery/166c879ca75f322e35213197c0db89ae11da9d24.jpg" data-fancybox="gallery_206"></a>
        </div>
      </div>
    </div>

      <div class="pagination">
        <div class="pagination__item pagination__item--arrow pagination__item--disable">
          <img src="/static/sprite.svg#arrow_p" />
        </div>
        <span class="pagination__item pagination__item--active">1</span>
        <a rel="nofollow" class="pagination__item" href="gallery/?page=2">2</a>
        <a rel="nofollow" class="pagination__item" href="gallery/?page=3">3</a>
        <a rel="nofollow" class="pagination__item" href="gallery/?page=4">4</a>
        <a class="pagination__item pagination__item--arrow" href="gallery/?page=2">
          <img src="/static/sprite.svg#arrow_n" />
        </a>
      </div>
      <? //$this->render('//layouts/template/product/_pager', ['dataProvider' => $dataProvider]); ?>
  </div>
</section>
