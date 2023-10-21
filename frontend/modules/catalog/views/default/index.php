<?php
$this->title = 'Выбрать квартиру';
$this->params['breadcrumbs'][] = $this->title;
?>


    <section class="room-search" id="pdopage">
        <div class="container">
          <h1>Выбрать квартиру</h1>
          <form class="room-search__filter" action="/filter/" method="GET">
            <div class="room-search__filter-wrap">
              <div class="room-search__select">
                <div class="room-search__select-top">
                  <span>Выбрать литер</span>
                  <img src="images/select-arrow.svg" />
                  <input type="hidden" name="liter" value="" />
                </div>
                <div class="room-search__select-inside">
                  <div class="room-search__select-inside-link" data-id="17">Литер 3/1</div>
                  <div class="room-search__select-inside-link" data-id="18">Литер 3/2</div>
                  <div class="room-search__select-inside-link" data-id="90">Литер 4/1</div>
                  <div class="room-search__select-inside-link" data-id="100">Литер 4/2</div>
                  <div class="room-search__select-inside-link" data-id="211">Литер 5/1</div>
                  <div class="room-search__select-inside-link" data-id="221">Литер 5/2</div>
                </div>
              </div>
              <div class="room-search__bedrooms">
                <div class="room-search__filter-title">Комнат</div>
                <div class="room-search__bedrooms-wrap">
                  <div class="room-search__bedrooms-item">
                    <input type="radio" name="room" id="bedrooms_count_1" value="1" />
                    <label for="bedrooms_count_1">1</label>
                  </div>
                  <div class="room-search__bedrooms-item">
                    <input type="radio" name="room" id="bedrooms_count_2" value="2" />
                    <label for="bedrooms_count_2">2</label>
                  </div>
                  <div class="room-search__bedrooms-item">
                    <input type="radio" name="room" id="bedrooms_count_3" value="3" />
                    <label for="bedrooms_count_3">3</label>
                  </div>
                </div>
              </div>
              <div class="room-search__range">
                <div class="room-search__title">Площадь</div>
                <div class="room-search__range-wrap">
                  <input class="js-range-slider" type="text" name="area" value="" tabindex="-1" readonly="" />
                </div>
              </div>
            </div>
      
            <button>Применить фильтр</button>
          </form>
          <div class="room-search__top">
            <div class="room-search__sort">
              <div class="room-search__sort-title">Сортировать по площади:</div>
              <div class="room-search__select">
                <div class="room-search__select-top">
                  <span>От меньшей к большей</span>
                  <img src="images/select-arrow.svg" />
                </div>
                <div class="room-search__select-inside">
                  <a href="/filter/?sort=asc" class="room-search__select-inside-link">От большей к меньшей</a>
                </div>
              </div>
            </div>
            <a class="room-search__reset" href="/filter/"> Сбросить фильтр</a>
          </div>
          <div class="room-search__items rows">
            <a class="flats__item" href="/genplan/liter-4-2/podezd-7/kvartira-28-50/">
              <div class="flats__item-title">
                1-комнатная квартира 28.50 м<sup>2</sup>
              </div>
              <div class="flats__item-image">
                <img src="images/liter-4.2-p7-etazh-3-6-228,50_0x0_a4a.webp" />
              </div>
      
              <div class="flats__item-chars">
                <p>Литер 4/2, п. 7</p>
                <p>28.50 м<sup>2</sup></p>
              </div>
            </a>
      
            <a class="flats__item" href="/genplan/liter-3-2/podezd-1/kvartira-28-70/">
              <div class="flats__item-title">
                1-комнатная квартира 28.70 м<sup>2</sup>
              </div>
              <div class="flats__item-image">
                <img src="images/podezd-1-etazh-2-12-1-28,70_0x0_a4a.webp" />
              </div>
      
              <div class="flats__item-chars">
                <p>Литер 3/2, п. 1</p>
                <p>28.70 м<sup>2</sup></p>
              </div>
            </a>
      
            <a class="flats__item" href="/genplan/liter-5-2/podezd-1/kvartira-28-70/">
              <div class="flats__item-title">
                1-комнатная квартира 28.70 м<sup>2</sup>
              </div>
              <div class="flats__item-image">
                <img src="images/podezd-1-etazh-2-12-1-28,70_0x0_a4a.webp" />
              </div>
      
              <div class="flats__item-chars">
                <p>Литер 5/2, п. 1</p>
                <p>28.70 м<sup>2</sup></p>
              </div>
            </a>
      
            <a class="flats__item" href="/genplan/liter-4-2/podezd-7/kvartira-28-80/">
              <div class="flats__item-title">
                1-комнатная квартира 28.80 м<sup>2</sup>
              </div>
              <div class="flats__item-image">
                <img src="images/liter-4.2-p7-etazh-3-6-28,80_0x0_a4a.webp" />
              </div>
      
              <div class="flats__item-chars">
                <p>Литер 4/2, п. 7</p>
                <p>28.80 м<sup>2</sup></p>
              </div>
            </a>
      
            <a class="flats__item" href="/genplan/liter-3-2/podezd-1/kvartira-29-20/">
              <div class="flats__item-title">
                1-комнатная квартира 29.20 м<sup>2</sup>
              </div>
              <div class="flats__item-image">
                <img src="images/podezd-1-etazh-2-12-1-29,20_0x0_a4a.webp" />
              </div>
      
              <div class="flats__item-chars">
                <p>Литер 3/2, п. 1</p>
                <p>29.20 м<sup>2</sup></p>
              </div>
            </a>
      
            <a class="flats__item" href="/genplan/liter-5-2/podezd-1/kvartira-29-20/">
              <div class="flats__item-title">
                1-комнатная квартира 29.20 м<sup>2</sup>
              </div>
              <div class="flats__item-image">
                <img src="images/podezd-1-etazh-2-12-1-29,20_0x0_a4a.webp" />
              </div>
      
              <div class="flats__item-chars">
                <p>Литер 5/2, п. 1</p>
                <p>29.20 м<sup>2</sup></p>
              </div>
            </a>
      
            <a class="flats__item" href="/genplan/liter-4-2/podezd-2/kvartira-31-80/">
              <div class="flats__item-title">
                1-комнатная квартира 31.80 м<sup>2</sup>
              </div>
              <div class="flats__item-image">
                <img src="images/liter-4.2-p2-etazh-4-9-31,80_0x0_a4a.webp" />
              </div>
      
              <div class="flats__item-chars">
                <p>Литер 4/2, п. 2</p>
                <p>31.80 м<sup>2</sup></p>
              </div>
            </a>
      
            <a class="flats__item" href="/genplan/liter-3-2/podezd-3/kvartira-31-90/">
              <div class="flats__item-title">
                1-комнатная квартира 31.90 м<sup>2</sup>
              </div>
              <div class="flats__item-image">
                <img src="images/podezd-3-etazh-2-9-1-31,90_0x0_a4a.webp" />
              </div>
      
              <div class="flats__item-chars">
                <p>Литер 3/2, п. 3</p>
                <p>31.90 м<sup>2</sup></p>
              </div>
            </a>
      
            <a class="flats__item" href="/genplan/liter-4-2/podezd-3/kvartira-31-90/">
              <div class="flats__item-title">
                1-комнатная квартира 31.90 м<sup>2</sup>
              </div>
              <div class="flats__item-image">
                <img src="images/liter-4.2-p3-etazh-5-6-31,90_0x0_a4a.webp" />
              </div>
      
              <div class="flats__item-chars">
                <p>Литер 4/2, п. 3</p>
                <p>31.90 м<sup>2</sup></p>
              </div>
            </a>
      
            <a class="flats__item" href="/genplan/liter-5-2/podezd-3/kvartira-31-90/">
              <div class="flats__item-title">
                1-комнатная квартира 31.90 м<sup>2</sup>
              </div>
              <div class="flats__item-image">
                <img src="images/podezd-3-etazh-2-9-1-31,90_0x0_a4a.webp" />
              </div>
      
              <div class="flats__item-chars">
                <p>Литер 5/2, п. 3</p>
                <p>31.90 м<sup>2</sup></p>
              </div>
            </a>
      
            <a class="flats__item" href="/genplan/liter-3-2/podezd-2/kvartira-32-10/">
              <div class="flats__item-title">
                1-комнатная квартира 32.10 м<sup>2</sup>
              </div>
              <div class="flats__item-image">
                <img src="images/podezd-2-etazh-2-12-1-32,10_0x0_a4a.webp" />
              </div>
      
              <div class="flats__item-chars">
                <p>Литер 3/2, п. 2</p>
                <p>32.10 м<sup>2</sup></p>
              </div>
            </a>
      
            <a class="flats__item" href="/genplan/liter-3-2/podezd-7/kvartira-32-10/">
              <div class="flats__item-title">
                1-комнатная квартира 32.10 м<sup>2</sup>
              </div>
              <div class="flats__item-image">
                <img src="images/podezd-7-etazh-3-8-1-32,10_0x0_a4a.webp" />
              </div>
      
              <div class="flats__item-chars">
                <p>Литер 3/2, п. 7</p>
                <p>32.10 м<sup>2</sup></p>
              </div>
            </a>
      
            <a class="flats__item" href="/genplan/liter-4-2/podezd-4/kvartira-32-10/">
              <div class="flats__item-title">
                1-комнатная квартира 32.10 м<sup>2</sup>
              </div>
              <div class="flats__item-image">
                <img src="images/liter-4.2-p4-etazh-2-9-32,10_0x0_a4a.webp" />
              </div>
      
              <div class="flats__item-chars">
                <p>Литер 4/2, п. 4</p>
                <p>32.10 м<sup>2</sup></p>
              </div>
            </a>
      
            <a class="flats__item" href="/genplan/liter-4-2/podezd-6/kvartira-32-10/">
              <div class="flats__item-title">
                1-комнатная квартира 32.10 м<sup>2</sup>
              </div>
              <div class="flats__item-image">
                <img src="images/liter-4.2-p6-etazh-3-6-32,10_0x0_a4a.webp" />
              </div>
      
              <div class="flats__item-chars">
                <p>Литер 4/2, п. 6</p>
                <p>32.10 м<sup>2</sup></p>
              </div>
            </a>
      
            <a class="flats__item" href="/genplan/liter-5-2/podezd-2/kvartira-32-10/">
              <div class="flats__item-title">
                1-комнатная квартира 32.10 м<sup>2</sup>
              </div>
              <div class="flats__item-image">
                <img src="images/podezd-2-etazh-2-12-1-32,10_0x0_a4a.webp" />
              </div>
      
              <div class="flats__item-chars">
                <p>Литер 5/2, п. 2</p>
                <p>32.10 м<sup>2</sup></p>
              </div>
            </a>
      
            <a class="flats__item" href="/genplan/liter-5-2/podezd-7/kvartira-32-10/">
              <div class="flats__item-title">
                1-комнатная квартира 32.10 м<sup>2</sup>
              </div>
              <div class="flats__item-image">
                <img src="images/podezd-7-etazh-3-8-1-32,10_0x0_a4a.webp" />
              </div>
      
              <div class="flats__item-chars">
                <p>Литер 5/2, п. 7</p>
                <p>32.10 м<sup>2</sup></p>
              </div>
            </a>
      
            <a class="flats__item" href="/genplan/liter-3-2/podezd-3/kvartira-32-40/">
              <div class="flats__item-title">
                1-комнатная квартира 32.40 м<sup>2</sup>
              </div>
              <div class="flats__item-image">
                <img src="images/podezd-3-etazh-2-9-1-32,40_0x0_a4a.webp" />
              </div>
      
              <div class="flats__item-chars">
                <p>Литер 3/2, п. 3</p>
                <p>32.40 м<sup>2</sup></p>
              </div>
            </a>
      
            <a class="flats__item" href="/genplan/liter-5-2/podezd-3/kvartira-32-40/">
              <div class="flats__item-title">
                1-комнатная квартира 32.40 м<sup>2</sup>
              </div>
              <div class="flats__item-image">
                <img src="images/podezd-3-etazh-2-9-1-32,40_0x0_a4a.webp" />
              </div>
      
              <div class="flats__item-chars">
                <p>Литер 5/2, п. 3</p>
                <p>32.40 м<sup>2</sup></p>
              </div>
            </a>
      
            <a class="flats__item" href="/genplan/liter-3-2/podezd-2/kvartira-32-50/">
              <div class="flats__item-title">
                1-комнатная квартира 32.50 м<sup>2</sup>
              </div>
              <div class="flats__item-image">
                <img src="images/podezd-2-etazh-2-12-1-32,50_0x0_a4a.webp" />
              </div>
      
              <div class="flats__item-chars">
                <p>Литер 3/2, п. 2</p>
                <p>32.50 м<sup>2</sup></p>
              </div>
            </a>
      
            <a class="flats__item" href="/genplan/liter-4-2/podezd-4/kvartira-32-50/">
              <div class="flats__item-title">
                1-комнатная квартира 32.50 м<sup>2</sup>
              </div>
              <div class="flats__item-image">
                <img src="images/liter-4.2-p4-etazh-2-9-32,50_0x0_a4a.webp" />
              </div>
      
              <div class="flats__item-chars">
                <p>Литер 4/2, п. 4</p>
                <p>32.50 м<sup>2</sup></p>
              </div>
            </a>
          </div>
          <div class="pagination">
            <div class="pagination__item pagination__item--arrow pagination__item--disable">
              <img src="images/information-btn-icon-prev.svg" />
            </div>
            <span class="pagination__item pagination__item--active">1</span>
            <a rel="nofollow" class="pagination__item" href="/filter/?page=2">2</a>
            <a rel="nofollow" class="pagination__item" href="/filter/?page=3">3</a>
            <a rel="nofollow" class="pagination__item" href="/filter/?page=4">4</a>
            <a rel="nofollow" class="pagination__item" href="/filter/?page=5">5</a>
            <a class="pagination__item pagination__item--arrow" href="/filter/?page=2">
              <img src="images/information-btn-icon-next.svg" />
            </a>
          </div>
        </div>
      </section>
      