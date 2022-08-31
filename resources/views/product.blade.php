@extends('layout.all')
@section('title', $product[0]->title_seo)

@section('content')
        <section id="select-prod" class="select-prod">
          <div class="_container">
              <div class="breadcrumb">
                <ul>
                  <li><a href="#">Назад</a></li>
                  <li><a href="#">Маркет</a></li>
                  <li><a href="#">Света</a></li>
                  <li><a href="#">Каталог</a></li>
                  <li><a href="#">Светильники</a></li>
                  <li><a href="#">Подвесные</a></li>
                  <li>Подвесной светильник SLV Forchini 1001701</li>
                </ul>
              </div>

              <h1>{{$product[0]->name}}</h1>

              <div class="select-prod-block d-flex">
                    
                <div class="select-prod-sl">   
                    <script>
                        document.addEventListener('DOMContentLoaded', () => {
                            var swiper = new Swiper(".mySwiper", {
                                direction: "vertical",
                                spaceBetween: 10,
                                slidesPerView: 4,
                                freeMode: true,
                                watchSlidesProgress: true,
                                
                            });
                            // var swiper2 = new Swiper(".mySwiper2", {
                            // loop: true,
                            // spaceBetween: 10,
                            // navigation: {
                            //     nextEl: ".swiper-button-next",
                            //     prevEl: ".swiper-button-prev",
                            // },
                            // thumbs: {
                            //     swiper: swiper,
                            // },
                            // });
                        });
                    </script>
                        <div class="pg_thumb">
                            <div thumbsSlider="" class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                      <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                      </div>
                                      <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                      </div>
                                      <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                      </div>
                                      <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                                      </div>
                                      <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                                      </div>
                                      <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                                      </div>
                                      <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                                      </div>
                                      <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                                      </div>
                                      <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                                      </div>
                                      <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                                      </div>
                                </div>
                            </div>
                          </div>
                        </div>
    
                        <!-- <div class="pg_img">
                          {{-- <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                                <div class="swiper-wrapper">
                                  <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                  </div>
                                  <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                  </div>
                                  <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                  </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                          </div> --}}
                        </div> -->

                    <div class="select-prod-info">

                      <div class="select-prod-info__price-block">
                        <div class="select-prod-info__price-block-inner d-flex">
                          <div class="select-prod-info__price-block-price rub">10 100</div>
                          <div class="select-prod-info__price-block-avail">На складе 10 шт.</div>
                        </div>
                        <div class="select-prod-info__price-block-buttons">
                          <div class="select-prod-info__price-block-buttons-inner d-flex">
                            <button class="select-prod-info__price-block-buttons-btn btn">ДОБАВИТЬ В КОРЗИНУ</button>
                            <a href="" class="select-prod-info__price-block-buttons-faw"></a>
                          </div>
                          <button class="select-prod-info__price-block-buttons-btn btn btn_grey">Купить в 1 клик</button>
                        </div>
                      </div>

                      <div class="select-prod-info__notification d-flex">
                        <div class="select-prod-info__notification-item select-prod-info__notification-item_icon-01">Тех. характеристики</div>
                        <div class="select-prod-info__notification-item select-prod-info__notification-item_icon-02">7 дней на возврат</div>
                      </div>

                      <div class="select-prod-info__delivery">
                        <h3 class="select-prod-info__delivery-title">Информация о доставке</h3>
                        <div class="select-prod-info__delivery-wrap">
                        <div class="select-prod-info__delivery-item">
                          <p class="select-prod-info__delivery-item-text select-prod-info__delivery-item-icon-01">Курск</p>
                          <a href="#" class="select-prod-info__delivery-item-text-link">Изменить</a>
                        </div>
                        <div class="select-prod-info__delivery-item">
                          <p class="select-prod-info__delivery-item-text select-prod-info__delivery-item-icon-02">Доставка</p>
                          <p class="select-prod-info__delivery-item-text">3-7 дней, по тарифам ТК</p>
                          <a href="#" class="select-prod-info__delivery-item-text-link">Подробнее о доставке</a>
                        </div>
                        <p class="select-prod-info__delivery-item-clasific">Точный срок доставки уточним при оформлении заказа</p>
                        </div>
                      </div>

                      <div class="select-prod-info__guarantee">
                        <h3 class="select-prod-info__guarantee-title">
                          6 месяцев гарантии <br>
                          с момента покупки 
                        </h3>
                        <p class="select-prod-info__guarantee-subtitle">
                          18 месяцев <a href="#" class="select-prod-info__guarantee-subtitle-link">расширенной гарантии</a> на светильники при 
                          условии монтажа нашим специалистом.
                        </p>
                        <p class="select-prod-info__guarantee-subtitle">
                          <a href="#" class="select-prod-info__guarantee-subtitle-link">Стоимость услуг по установке светильников</a>
                        </p>
                      </div>

                    </div>
              </div>

              <div class="select-prod__specifications">
                <h2 class="select-prod__specifications-title">Технические характеристики</h2>

                <div class="select-prod__specifications-inner">

                  <div class="select-prod__specifications-column">
                    <h4 class="select-prod__specifications-column-title">Основные</h4>
                    <div class="select-prod__specifications-card">

                      <div class="select-prod__specifications-card-list d-flex">
                        <div class="select-prod__specifications-card-list-item">Артикул</div>
                        <div class="select-prod__specifications-card-list-item">2483-5P</div>
                      </div>

                      <div class="select-prod__specifications-card-list d-flex">
                        <div class="select-prod__specifications-card-list-item">Бренд</div>
                        <div class="select-prod__specifications-card-list-item">F-Promo</div>
                      </div>

                      <div class="select-prod__specifications-card-list d-flex">
                        <div class="select-prod__specifications-card-list-item">Страна бренда</div>
                        <div class="select-prod__specifications-card-list-item">Германия</div>
                      </div>

                      <div class="select-prod__specifications-card-list d-flex">
                        <div class="select-prod__specifications-card-list-item">Коллекция</div>
                        <div class="select-prod__specifications-card-list-item">Scintillans</div>
                      </div>

                      <div class="select-prod__specifications-card-list d-flex">
                        <div class="select-prod__specifications-card-list-item">Стиль</div>
                        <div class="select-prod__specifications-card-list-item">Модерн</div>
                      </div>

                    </div>
                  </div>

                  <div class="select-prod__specifications-column">
                    <h4 class="select-prod__specifications-column-title">Лампы</h4>
                    <div class="select-prod__specifications-card">

                      <div class="select-prod__specifications-card-list d-flex">
                        <div class="select-prod__specifications-card-list-item">Тип цоколя</div>
                        <div class="select-prod__specifications-card-list-item">E14</div>
                      </div>

                      <div class="select-prod__specifications-card-list d-flex">
                        <div class="select-prod__specifications-card-list-item">Тип лампочки <br>(основной)</div>
                        <div class="select-prod__specifications-card-list-item">Накаливания</div>
                      </div>

                      <div class="select-prod__specifications-card-list d-flex">
                        <div class="select-prod__specifications-card-list-item">Количество ламп</div>
                        <div class="select-prod__specifications-card-list-item">5</div>
                      </div>

                      <div class="select-prod__specifications-card-list d-flex">
                        <div class="select-prod__specifications-card-list-item">Мощность лампы, W</div>
                        <div class="select-prod__specifications-card-list-item">40</div>
                      </div>

                      <div class="select-prod__specifications-card-list d-flex">
                        <div class="select-prod__specifications-card-list-item">Общая мощность, W</div>
                        <div class="select-prod__specifications-card-list-item">200</div>
                      </div>

                      <div class="select-prod__specifications-card-list d-flex">
                        <div class="select-prod__specifications-card-list-item">Площадь освещения, м2</div>
                        <div class="select-prod__specifications-card-list-item">11.1</div>
                      </div>

                      <div class="select-prod__specifications-card-list d-flex">
                        <div class="select-prod__specifications-card-list-item">Напряжение, V</div>
                        <div class="select-prod__specifications-card-list-item">220-240</div>
                      </div>

                    </div>
                  </div>

                  <div class="select-prod__specifications-column">
                    <h4 class="select-prod__specifications-column-title">Лампы</h4>
                    <div class="select-prod__specifications-card">

                      <div class="select-prod__specifications-card-list d-flex">
                        <div class="select-prod__specifications-card-list-item">Тип цоколя</div>
                        <div class="select-prod__specifications-card-list-item">E14</div>
                      </div>

                      <div class="select-prod__specifications-card-list d-flex">
                        <div class="select-prod__specifications-card-list-item">Тип лампочки <br>(основной)</div>
                        <div class="select-prod__specifications-card-list-item">Накаливания</div>
                      </div>

                      <div class="select-prod__specifications-card-list d-flex">
                        <div class="select-prod__specifications-card-list-item">Количество ламп</div>
                        <div class="select-prod__specifications-card-list-item">5</div>
                      </div>

                      <div class="select-prod__specifications-card-list d-flex">
                        <div class="select-prod__specifications-card-list-item">Мощность лампы, W</div>
                        <div class="select-prod__specifications-card-list-item">40</div>
                      </div>

                      <div class="select-prod__specifications-card-list d-flex">
                        <div class="select-prod__specifications-card-list-item">Общая мощность, W</div>
                        <div class="select-prod__specifications-card-list-item">200</div>
                      </div>

                      <div class="select-prod__specifications-card-list d-flex">
                        <div class="select-prod__specifications-card-list-item">Площадь освещения, м2</div>
                        <div class="select-prod__specifications-card-list-item">11.1</div>
                      </div>

                      <div class="select-prod__specifications-card-list d-flex">
                        <div class="select-prod__specifications-card-list-item">Напряжение, V</div>
                        <div class="select-prod__specifications-card-list-item">220-240</div>
                      </div>

                    </div>
                  </div>

                  <div class="select-prod__specifications-column">
                    <h4 class="select-prod__specifications-column-title">Лампы</h4>
                    <div class="select-prod__specifications-card">

                      <div class="select-prod__specifications-card-list d-flex">
                        <div class="select-prod__specifications-card-list-item">Тип цоколя</div>
                        <div class="select-prod__specifications-card-list-item">E14</div>
                      </div>

                      <div class="select-prod__specifications-card-list d-flex">
                        <div class="select-prod__specifications-card-list-item">Тип лампочки <br>(основной)</div>
                        <div class="select-prod__specifications-card-list-item">Накаливания</div>
                      </div>

                      <div class="select-prod__specifications-card-list d-flex">
                        <div class="select-prod__specifications-card-list-item">Количество ламп</div>
                        <div class="select-prod__specifications-card-list-item">5</div>
                      </div>

                      <div class="select-prod__specifications-card-list d-flex">
                        <div class="select-prod__specifications-card-list-item">Мощность лампы, W</div>
                        <div class="select-prod__specifications-card-list-item">40</div>
                      </div>

                      <div class="select-prod__specifications-card-list d-flex">
                        <div class="select-prod__specifications-card-list-item">Общая мощность, W</div>
                        <div class="select-prod__specifications-card-list-item">200</div>
                      </div>

                      <div class="select-prod__specifications-card-list d-flex">
                        <div class="select-prod__specifications-card-list-item">Площадь освещения, м2</div>
                        <div class="select-prod__specifications-card-list-item">11.1</div>
                      </div>

                      <div class="select-prod__specifications-card-list d-flex">
                        <div class="select-prod__specifications-card-list-item">Напряжение, V</div>
                        <div class="select-prod__specifications-card-list-item">220-240</div>
                      </div>

                    </div>
                  </div>

                  <!-- <div class="select-prod__specifications-column">
                    <h4 class="select-prod__specifications-column-title">Размеры</h4>
                    <div class="select-prod__specifications-card">

                      <div class="select-prod__specifications-card-list d-flex">
                        <div class="select-prod__specifications-card-list-item">Высота, мм</div>
                        <div class="select-prod__specifications-card-list-item">400</div>
                      </div>

                      <div class="select-prod__specifications-card-list d-flex">
                        <div class="select-prod__specifications-card-list-item">Диаметр, мм</div>
                        <div class="select-prod__specifications-card-list-item">560</div>
                      </div>

                    </div>
                    </div>
                  </div> -->

                </div>

              </div>

              <div class="select-prod__description">
                <h2 class="select-prod__description-title">Описание</h2>
                <p class="select-prod__description-text">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus tempore consequatur facilis, expedita minima blanditiis in, 
                  maxime distinctio hic quasi exercitationem saepe eaque non. Repellendus amet quam dolor nemo? Alias!
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus tempore consequatur facilis, expedita minima blanditiis in, 
                  maxime distinctio hic quasi exercitationem saepe eaque non. Repellendus amet quam dolor nemo? Alias!
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus tempore consequatur facilis, expedita minima blanditiis in, 
                  maxime distinctio hic quasi exercitationem saepe eaque non. Repellendus amet quam dolor nemo? Alias!
                </p>
              </div>

          </div>
        </section>

        

@endsection