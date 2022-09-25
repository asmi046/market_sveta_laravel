<section id="popular" class="popular">
    <div class="_container">
        <h2 class="popular__title title">Популярные товары</h2>

        <div class="popular__row">

            <div class="popular__column">
                <a href="{{route('category', "potolocnye-liustry-2868")}}" class="circleCard">
                    <div class="circleCard__img">
                        <div class="circleCard__img-nuar_blk nuar_blk"></div>
                        <img src="{{asset('img/popular/01.png')}}" alt="">
                    </div>
                    <div class="circleCard__name">
                        Люстры
                    </div>
                </a>
            </div>

            <div class="popular__column">
                <a href="{{route('category', "potolocnye-svetilniki-2872")}}" class="circleCard">
                    <div class="circleCard__img">
                        <div class="circleCard__img-nuar_blk nuar_blk"></div>
                        <img src="{{asset('img/popular/02.png')}}" alt="">
                    </div>
                    <div class="circleCard__name">
                        Светильники
                    </div>
                </a>
            </div>

            <div class="popular__column">
                <a href="{{route('category', "nastennye-bra-2864")}}" class="circleCard">
                    <div class="circleCard__img">
                        <div class="circleCard__img-nuar_blk nuar_blk"></div>
                        <img src="{{asset('img/popular/03.png')}}" alt="">
                    </div>
                    <div class="circleCard__name">
                        Бра
                    </div>
                </a>
            </div>

            <div class="popular__column">
                <a href="{{route('category', "nastolnye-lampy-2865")}}" class="circleCard">
                    <div class="circleCard__img">
                        <div class="circleCard__img-nuar_blk nuar_blk"></div>
                        <img src="{{asset('img/popular/04.png')}}" alt="">
                    </div>
                    <div class="circleCard__name">
                        Настольные лампы
                    </div>
                </a>
            </div>

            <div class="popular__column">
                <a href="{{route('category', "spoty-2893")}}" class="circleCard">
                    <div class="circleCard__img">
                        <div class="circleCard__img-nuar_blk nuar_blk"></div>
                        <img src="{{asset('img/popular/05.png')}}" alt="">
                    </div>
                    <div class="circleCard__name">
                        Споты
                    </div>
                </a>
            </div>

            <div class="popular__column">
                <a href="{{route('category', "torsery-i-napolnye-svetilniki-2894")}}" class="circleCard">
                    <div class="circleCard__img">
                        <div class="circleCard__img-nuar_blk nuar_blk"></div>
                        <img src="{{asset('img/popular/06.png')}}" alt="">
                    </div>
                    <div class="circleCard__name">
                        Торшеры
                    </div>
                </a>
            </div>

            <div class="popular__column">
                <a href="{{route('category', "svet-dlia-ulicy-2915")}}" class="circleCard">
                    <div class="circleCard__img">
                        <div class="circleCard__img-nuar_blk nuar_blk"></div>
                        <img src="{{asset('img/popular/07.png')}}" alt="">
                    </div>
                    <div class="circleCard__name">
                        Уличное освещение
                    </div>
                </a>
            </div>

        </div>

        <div class="popular__baner" style = "background-image: url(img/banners/{{$banners["action_banner"][0]["img_name"]}})"></div>

    </div>
</section>