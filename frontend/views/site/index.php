<?php


$this->title = 'Новострой';
?>

<?php if(isset($stage) && !empty($stage)): ?>
<section class="banner banner-new">
  <div class="banner__slider">
    <div class="banner-new__wrapper" style="background-image: url(<?= $stage->background; ?>);">
      <div class="container container--big">
        <div class="banner__item">
          
          <div class="banner-new__wrap">
            <div class="banner-new__title">
              <?= $stage->text; ?>
            </div>
          </div>

          <div class="banner-new__advantages">
            <?php if(isset($stage->stageItems) && !empty($stage->stageItems)): ?>
              <?php foreach($stage->stageItems as $stageItem): ?>
                <div class="circle-btn circle-btn--active">
                  <?= $stageItem->name; ?>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>



      <section class="main-rooms" id="flats">
        <div class="container">
          <div class="page-title">Выберите свою квартиру</div>
          <div class="page__subtitle"></div>
          <div class="main-rooms__content">
            <div class="information__tabs">
              <div class="information__tab information__tab--active" data-id="0">1-комнатные</div>
              <div class="information__tab" data-id="1">2-комнатные</div>
              <div class="information__tab" data-id="2">3-комнатные</div>
            </div>
            <div class="main-rooms__wrap">
              <div class="main-rooms__slider main-rooms__slider--active" data-id="0">
                <div class="swiper-container main-rooms-slider">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-4-2/podezd-7/kvartira-28-50/">1-комнатная квартира 28.50 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-4-2/podezd-7/kvartira-28-50/"><img src="images/liter-4.2-p7-etazh-3-6-228,50_0x0_a4a.webp" /></a>

                        <div class="flats__item-chars">
                          <p>Литер 4/2, п. 7</p>
                          <p>28.50 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-3-2/podezd-1/kvartira-28-70/">1-комнатная квартира 28.70 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-3-2/podezd-1/kvartira-28-70/"><img src="images/podezd-1-etazh-2-12-1-28,70_0x0_a4a.webp" /></a>

                        <div class="flats__item-chars">
                          <p>Литер 3/2, п. 1</p>
                          <p>28.70 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-4-2/podezd-7/kvartira-28-80/">1-комнатная квартира 28.80 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-4-2/podezd-7/kvartira-28-80/">
                          <img src="images/liter-4.2-p7-etazh-3-6-28,80_0x0_a4a.webp" />
                        </a>

                        <div class="flats__item-chars">
                          <p>Литер 4/2, п. 7</p>
                          <p>28.80 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-3-2/podezd-1/kvartira-29-20/">1-комнатная квартира 29.20 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-3-2/podezd-1/kvartira-29-20/"><img src="images/podezd-1-etazh-2-12-1-29,20_0x0_a4a.webp" /></a>

                        <div class="flats__item-chars">
                          <p>Литер 3/2, п. 1</p>
                          <p>29.20 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-4-2/podezd-2/kvartira-31-80/">1-комнатная квартира 31.80 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-4-2/podezd-2/kvartira-31-80/">
                          <img src="images/liter-4.2-p2-etazh-4-9-31,80_0x0_a4a.webp" />
                        </a>

                        <div class="flats__item-chars">
                          <p>Литер 4/2, п. 2</p>
                          <p>31.80 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-3-2/podezd-3/kvartira-31-90/">1-комнатная квартира 31.90 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-3-2/podezd-3/kvartira-31-90/"><img src="images/podezd-3-etazh-2-9-1-31,90_0x0_a4a.webp" /></a>

                        <div class="flats__item-chars">
                          <p>Литер 3/2, п. 3</p>
                          <p>31.90 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-4-2/podezd-3/kvartira-31-90/">1-комнатная квартира 31.90 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-4-2/podezd-3/kvartira-31-90/">
                          <img src="images/liter-4.2-p3-etazh-5-6-31,90_0x0_a4a.webp" />
                        </a>

                        <div class="flats__item-chars">
                          <p>Литер 4/2, п. 3</p>
                          <p>31.90 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-3-2/podezd-2/kvartira-32-10/">1-комнатная квартира 32.10 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-3-2/podezd-2/kvartira-32-10/"><img src="images/podezd-2-etazh-2-12-1-32,10_0x0_a4a.webp" /></a>

                        <div class="flats__item-chars">
                          <p>Литер 3/2, п. 2</p>
                          <p>32.10 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-3-2/podezd-7/kvartira-32-10/">1-комнатная квартира 32.10 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-3-2/podezd-7/kvartira-32-10/"><img src="images/podezd-7-etazh-3-8-1-32,10_0x0_a4a.webp" /></a>

                        <div class="flats__item-chars">
                          <p>Литер 3/2, п. 7</p>
                          <p>32.10 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-4-2/podezd-4/kvartira-32-10/">1-комнатная квартира 32.10 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-4-2/podezd-4/kvartira-32-10/">
                          <img src="images/liter-4.2-p4-etazh-2-9-32,10_0x0_a4a.webp" />
                        </a>

                        <div class="flats__item-chars">
                          <p>Литер 4/2, п. 4</p>
                          <p>32.10 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="information__navigation">
                  <div class="information__navigation-btn main-rooms--prev">
                    <img src="images/information-btn-icon-prev.svg" />
                  </div>
                  <div class="information__navigation-btn main-rooms--next">
                    <img src="images/information-btn-icon-next.svg" />
                  </div>
                </div>
              </div>
              <div class="main-rooms__slider" data-id="1">
                <div class="swiper-container main-rooms-slider">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-3-2/podezd-4/kvartira-49-60/">2-комнатная квартира 49.60 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-3-2/podezd-4/kvartira-49-60/">
                          <img src="images/podezd-4-etazh-2-9-2-49,60_0x0_a4a.webp" />
                        </a>

                        <div class="flats__item-chars">
                          <p>Литер 3/2, п. 4</p>
                          <p>49.60 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-3-2/podezd-5/kvartira-50-30/">2-комнатная квартира 50.30 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-3-2/podezd-5/kvartira-50-30/">
                          <img src="images/podezd-5-etazh-3-6-2-50,30_0x0_a4a.webp" />
                        </a>

                        <div class="flats__item-chars">
                          <p>Литер 3/2, п. 5</p>
                          <p>50.30 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-4-2/podezd-1/kvartira-56-50/">2-комнатная квартира 56.50 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-4-2/podezd-1/kvartira-56-50/">
                          <img src="images/liter-4.2-p1-etazh-3-9-56,50_0x0_a4a.webp" />
                        </a>

                        <div class="flats__item-chars">
                          <p>Литер 4/2, п. 1</p>
                          <p>56.50 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-4-1/podezd-1/kvartira-57-40/">2-комнатная квартира 57.40 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-4-1/podezd-1/kvartira-57-40/">
                          <img src="images/liter-4.1-etazh-12-18-57,40_0x0_a4a.webp" />
                        </a>

                        <div class="flats__item-chars">
                          <p>Литер 4/1, п. 1</p>
                          <p>57.40 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-3-1/podezd-1/kvartira-57-90/">2-комнатная квартира 57.90 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-3-1/podezd-1/kvartira-57-90/"><img src="images/l3-korpus-1-etazh-3-11-2-57,90_0x0_a4a.webp" /></a>

                        <div class="flats__item-chars">
                          <p>Литер 3/1, п. 1</p>
                          <p>57.90 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-4-1/podezd-1/kvartira-57-90/">2-комнатная квартира 57.90 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-4-1/podezd-1/kvartira-57-90/">
                          <img src="images/liter-4.1-etazh-3-11-57,90_0x0_a4a.webp" />
                        </a>

                        <div class="flats__item-chars">
                          <p>Литер 4/1, п. 1</p>
                          <p>57.90 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-4-2/podezd-1/kvartira-58-30/">2-комнатная квартира 58.30 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-4-2/podezd-1/kvartira-58-30/">
                          <img src="images/liter-4.2-p1-etazh-3-9-58,30_0x0_a4a.webp" />
                        </a>

                        <div class="flats__item-chars">
                          <p>Литер 4/2, п. 1</p>
                          <p>58.30 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-3-2/podezd-6/kvartira-58-40/">2-комнатная квартира 58.40 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-3-2/podezd-6/kvartira-58-40/"><img src="images/podezd-6-etazh-3-6-2-58,40_0x0_a4a.webp" /></a>

                        <div class="flats__item-chars">
                          <p>Литер 3/2, п. 6</p>
                          <p>58.40 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-4-2/podezd-2/kvartira-58-60/">2-комнатная квартира 58.60 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-4-2/podezd-2/kvartira-58-60/">
                          <img src="images/liter-4.2-p2-etazh-4-9-58,60_0x0_a4a.webp" />
                        </a>

                        <div class="flats__item-chars">
                          <p>Литер 4/2, п. 2</p>
                          <p>58.60 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-4-2/podezd-3/kvartira-58-60/">2-комнатная квартира 58.60 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-4-2/podezd-3/kvartira-58-60/">
                          <img src="images/liter-4.2-p3-etazh-5-6-58,60_0x0_a4a.webp" />
                        </a>

                        <div class="flats__item-chars">
                          <p>Литер 4/2, п. 3</p>
                          <p>58.60 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="information__navigation">
                  <div class="information__navigation-btn main-rooms--prev">
                    <img src="images/information-btn-icon-prev.svg" />
                  </div>
                  <div class="information__navigation-btn main-rooms--next">
                    <img src="images/information-btn-icon-next.svg" />
                  </div>
                </div>
              </div>
              <div class="main-rooms__slider" data-id="2">
                <div class="swiper-container main-rooms-slider">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-3-2/podezd-6/kvartira-68-10/">3-комнатная квартира 68.10 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-3-2/podezd-6/kvartira-68-10/"><img src="images/podezd-6-etazh-3-6-3-68,10_0x0_a4a.webp" /></a>

                        <div class="flats__item-chars">
                          <p>Литер 3/2, п. 6</p>
                          <p>68.10 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-3-2/podezd-1/kvartira-71-30/">3-комнатная квартира 71.30 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-3-2/podezd-1/kvartira-71-30/"><img src="images/podezd-1-etazh-2-12-3-71,30_0x0_a4a.webp" /></a>

                        <div class="flats__item-chars">
                          <p>Литер 3/2, п. 1</p>
                          <p>71.30 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-4-2/podezd-7/kvartira-71-50/">3-комнатная квартира 71.50 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-4-2/podezd-7/kvartira-71-50/">
                          <img src="images/liter-4.2-p7-etazh-3-6-71,50_0x0_a4a.webp" />
                        </a>

                        <div class="flats__item-chars">
                          <p>Литер 4/2, п. 7</p>
                          <p>71.50 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-3-2/podezd-7/kvartira-77-20/">3-комнатная квартира 77.20 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-3-2/podezd-7/kvartira-77-20/"><img src="images/podezd-7-etazh-3-8-3-77,20-(1)_0x0_a4a.webp" /></a>

                        <div class="flats__item-chars">
                          <p>Литер 3/2, п. 7</p>
                          <p>77.20 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-4-2/podezd-3/kvartira-77-60/">3-комнатная квартира 77.60 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-4-2/podezd-3/kvartira-77-60/">
                          <img src="images/liter-4.2-p3-etazh-5-6-77,60_0x0_a4a.webp" />
                        </a>

                        <div class="flats__item-chars">
                          <p>Литер 4/2, п. 3</p>
                          <p>77.60 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-4-2/podezd-6/kvartira-77-60/">3-комнатная квартира 77.60 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-4-2/podezd-6/kvartira-77-60/">
                          <img src="images/liter-4.2-p6-etazh-3-6-77,60_0x0_a4a.webp" />
                        </a>

                        <div class="flats__item-chars">
                          <p>Литер 4/2, п. 6</p>
                          <p>77.60 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-4-2/podezd-2/kvartira-77-70/">3-комнатная квартира 77.70 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-4-2/podezd-2/kvartira-77-70/">
                          <img src="images/liter-4.2-p2-etazh-4-9-77,70_0x0_a4a.webp" />
                        </a>

                        <div class="flats__item-chars">
                          <p>Литер 4/2, п. 2</p>
                          <p>77.70 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-3-2/podezd-6/kvartira-78-30/">3-комнатная квартира 78.30 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-3-2/podezd-6/kvartira-78-30/"><img src="images/podezd-6-etazh-3-6-3-78,30_0x0_a4a.webp" /></a>

                        <div class="flats__item-chars">
                          <p>Литер 3/2, п. 6</p>
                          <p>78.30 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-4-1/podezd-1/kvartira-80-80/">3-комнатная квартира 80.80 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-4-1/podezd-1/kvartira-80-80/">
                          <img src="images/liter-4.1-etazh-12-18-80,80_0x0_a4a.webp" />
                        </a>

                        <div class="flats__item-chars">
                          <p>Литер 4/1, п. 1</p>
                          <p>80.80 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="flats__item">
                        <a class="flats__item-title" href="/genplan/liter-3-1/podezd-1/kvartira-80-90/">3-комнатная квартира 80.90 м<sup>2</sup></a>
                        <a class="flats__item-image" href="/genplan/liter-3-1/podezd-1/kvartira-80-90/"><img src="images/l3-korpus-1-etazh-3-11-3-80,90_0x0_a4a.webp" /></a>

                        <div class="flats__item-chars">
                          <p>Литер 3/1, п. 1</p>
                          <p>80.90 м<sup>2</sup></p>
                        </div>
                        <div class="flats__item-link js-open-feedback">Оставить заявку</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="information__navigation">
                  <div class="information__navigation-btn main-rooms--prev"><img src="images/information-btn-icon-prev.svg" /></div>
                  <div class="information__navigation-btn main-rooms--next"><img src="images/information-btn-icon-next.svg" /></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



      <section class="apartments-list">
        <div class="apartments-list__floor__label">
          <div class="apartments-list__floor__label__text">
            2 этаж
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>2
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>3
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>4
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>5
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>6
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>7
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>8
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>9
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>10
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        
        <div class="apartments-list__floor__label">
          <div class="apartments-list__floor__label__text">
            3 этаж
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>11
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>12
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>13
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>14
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>15
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>16
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>17
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>18
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>19
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>20
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        
        <div class="apartments-list__floor__label">
          <div class="apartments-list__floor__label__text">
            4 этаж
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        
        <div class="apartments-list__floor__label">
          <div class="apartments-list__floor__label__text">
            5 этаж
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        
        <div class="apartments-list__floor__label">
          <div class="apartments-list__floor__label__text">
            6 этаж
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        
        <div class="apartments-list__floor__label">
          <div class="apartments-list__floor__label__text">
            7 этаж
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        
        <div class="apartments-list__floor__label">
          <div class="apartments-list__floor__label__text">
            8 этаж
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
        <div class="apartments-list__floor__item">
          <div class="apartments-list__floor__item__title">
            <span class="apartment-name">Квартира </span>1
          </div>
          <div class="apartments-list__floor__item__content">
            <div class="apartment-rooms">
              Однокомнатная
            </div>
            <div class="apartment-area">
              42.30
            </div>
          </div>
        </div>
      </section>
      
<?= $this->render('//layouts/template/form/_inline'); ?>