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
    
                        <div class="pg_img">
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
                    </div>


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

                    <div class="select-prod__price">

                    </div>
                </div>
            </div>
        </section>

        

@endsection