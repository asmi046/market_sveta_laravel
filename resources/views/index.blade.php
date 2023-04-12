@extends('layout.all')
@section('title', "Главная страница")

@section('content')
<section id="info-sl" class="info-sl">
    <div class="_container">
        <div class="info-sl__row d-flex">

            <div class="info-sl__slider main_banner slider swiper">
                <div class="swiper-wrapper">
                    @foreach ($banners["main_banner"] as $item)
                        <div class="slider__item main_slider__item swiper-slide">
                            <img loading="lazy" src="{{$item["img_name"]}}" alt="{{$item["title"]}}">
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="info-sl__images d-flex ">

                <a href="#projectMsg" class="info-sl__img-item img-item-l">

                    <img loading="lazy" src="{{$banners["info_slider_top"][0]["img_name"]}}" alt="">

                </a>

                <a target="_blank" href="https://lightsnab.ru/" class="info-sl__img-item img-item-r">
                    <img loading="lazy" src="{{$banners["info_slider_bottom"][0]["img_name"]}}" alt="">
                </a>

            </div>

        </div>
    </div>
</section>





<x-popular></x-popular>

<section id="newstovar" class="newstovar">
    <div class="_container">
        <h2 class="selection__title title">НОВИНКИ</h2>

        <div class="sale_tovar_wraper sale_tovar_wraper_bottom">
            @for ($i=0; $i<6; $i++)
                <x-tovar-card :minfo="$new_tovar[$i]"></x-tovar-card>
            @endfor
        </div>
    </div>
</section>

<section id="pop_bnr" class="pop_bnr">
    <div class="_container">

        <div class="popular__baner swiper">
            <div class="swiper-wrapper">
                @foreach ($banners["action_banner"] as $item)
                    <div  class="swiper-slide">
                        <img loading="lazy" src="{{$item["img_name"]}}" alt="{{$item["title"]}}">
                    </div>
                @endforeach
            </div>

            <div class="slider_nav_btn slider_nav_btn_next"></div>
            <div class="slider_nav_btn slider_nav_btn_prev"></div>
        </div>

    </div>
</section>


<section id="selection" class="selection">
    <div class="_container">
        <h2 class="selection__title title">ПОДБЕРИТЕ СВЕТИЛЬНИКИ ПО ТИПУ ПОМЕЩЕНИЯ</h2>

        <div class="selection__row d-flex">

            <div class="selection__column">
                <a href="{{route('place', 'spalnia')}}" class="cardType cardType_img-01">
                    <div class="cardType__color-block animated_bg">
                        <p class="cardType__color-block-text">Спальня</p>
                    </div>
                </a>
            </div>

            <div class="selection__column ">
                <a href="{{route('place', 'kuxnia')}}" class="cardType cardType_img-02">
                    <div class="cardType__color-block animated_bg">
                        <p class="cardType__color-block-text">КУХНЯ</p>
                    </div>
                </a>
            </div>

            <div class="selection__column">
                <a href="{{route('place', 'gostinaia')}}" class="cardType cardType_img-03">
                    <div class="cardType__color-block animated_bg">
                        <p class="cardType__color-block-text">ГОСТИНАЯ</p>
                    </div>
                </a>
            </div>

            <div class="selection__column">
                <a href="{{route('place', 'detskaia')}}" class="cardType cardType_img-04">
                    <div class="cardType__color-block animated_bg">
                        <p class="cardType__color-block-text">ДЕТСКАЯ</p>
                    </div>
                </a>
            </div>

            <div class="selection__column">
                <a href="{{route('place', 'vannaia')}}" class="cardType cardType_img-05">
                    <div class="cardType__color-block animated_bg">
                        <p class="cardType__color-block-text">ВАННАЯ</p>
                    </div>
                </a>
            </div>

        </div>

    </div>
</section>

<section id="new-items" class="new-items">
    <div class="_container">
        <h2 class="new-items__title title">Распродажа</h2>

        <div class="prod-card main_sales d-flex">

            <div class="sale-baner">
                <img src="{{$banners["sale_banner"][0]["img_name"]}}" alt="{{$banners["sale_banner"][0]["title"]}}">
            </div>

            <div class="sale_tovar_wraper">
                @for ($i=0; $i<4; $i++)
                    <x-tovar-card :minfo="$sale_elements[$i]"></x-tovar-card>
                @endfor
            </div>
        </div>


        <div class="sale_tovar_wraper sale_tovar_wraper_bottom">
            @for ($i=4; $i<10; $i++)
                <x-tovar-card :minfo="$sale_elements[$i]"></x-tovar-card>
            @endfor
        </div>

    </div>
</section>
{{--
<section id="about" class="about">
    <div class="_container">
        <h2 class="about__title title">ИНТЕРНЕТ-МАГАЗИН СВЕТИЛЬНИКОВ И ЛЮСТР «МАРКЕТСВЕТА»</h2>

        <div class="about__inner">
            <div class="about__column">
                <p class="about__column-text">
                    Наш ассортимент осветительных приборов — это более 120 брендов, среди которых: потолочные, встраиваемые,
                    подвесные и трековые светильники. Есть роскошные хрустальные, лаконичные металлические, натуральные
                    деревянные, воздушные стеклянные — любые модели, которые только можно представить.
                </p>
                <p class="about__column-text">
                    Наш каталог постоянно пополняется новинками — как только у представленного бренда выходит новая
                    коллекция,
                    она сразу появляется в продаже у нас. Среди представленных марок — самые популярные бренды Италии,
                    Германии, Испании, Австрии, Бельгии, Чехии, Польши, Дании, Швеции, Франции, Турции, США, Китая и,
                    конечно,
                    России.
                </p>
                <p class="about__column-text">
                    Кроме регулярного обновления и пополнения ассортимента осветительных приборов, мы постоянно проводим
                    акции
                    — распродажи светильников и люстр со значительными скидками — порой они достигают 90%!
                </p>
            </div>

            <div class="about__column">
                <p class="about__column-text">
                    Это отличная возможность дополнить свой интерьер настольной лампой или торшером, купить люстру, выбрать
                    подарок или полностью обновить свет во всем доме.
                </p>
                <p class="about__column-text">
                    «МаркетСвета» — это простые лаконичные модели и эксклюзивные дизайнерские люстры из хрусталя, достойные
                    самых роскошных интерьеров.
                </p>
                <p class="about__column-text">
                    Наша служба доставки быстро и аккуратно привезет заказанные товары, а установкой осветительной техники
                    займутся специалисты службы монтажа. Кстати, если воспользоваться услугами наших специалистов,
                    гарантийный
                    срок на оборудование увеличивается до 2 лет! Так что лучше доверить работу профессионалам, которые
                    сделают
                    всё быстро и качественно — в квартире, доме или офисе.
                </p>
                <p class="about__column-text">
                    Если у вас остались вопросы, свяжитесь с менеджерами интернет-магазина люстр и светильников «ВамСвет» по
                    телефону 8 (495) 154-10-63 или закажите обратный звонок, оставив контактные данные.
                </p>
            </div>
        </div>

    </div>
</section> --}}

@endsection
