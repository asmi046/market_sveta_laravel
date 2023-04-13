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

<section id="about" class="about">
    <div class="_container">
        <h1 class="about__title title">Интернет-магазин дизайнерских светильников и люстр «Карта Света»</h1>

        <div class="about__inner">
            <div class="about__column text_blk">
                <p>В нашем ассортименте представлена продукция более 100 мировых брендов. В их числе осветительные приборы из Европы, Азии, США, а также российские торговые марки.</p>
                <p>Это потолочные, встраиваемые, подвесные, трековые и настенные светильники с изысканным дизайном. В качестве материалов для их изготовления используются дерево, стекло, текстиль, акрил, хрусталь, металл.</p>
                <p>Регулярно пополняем ассортимент каталога актуальными новинками. Новые коллекции поступают в продажу практически сразу после презентации производителя. </p>
                <p>Акции и спецпредложения, вплоть до 90%, на предыдущие линейки, порадуют вас и позволят купить светильник, люстру или обновить все световые приборы в доме сэкономив свой бюджет.</p>

            </div>

            <div class="about__column text_blk">
                <p>В каталоге интернет-магазина «Карта света» представлены как минималистичные модели современного стиля, так и эксклюзивные дизайнерские для украшения роскошных интерьеров.</p>
                <p>Оперативно доставляем ваши заказы в любой регион России. На всю нашу продукцию действует гарантия.</p>
                <p>Наши специалисты готовы помочь вам с выбором люстр, светильников, бра для загородного дом, городской квартиры, офиса, отеля, ресторана, бутика или производства.</p>
            </div>

        </div>

    </div>
</section>

@endsection
