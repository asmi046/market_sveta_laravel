<section id="popular" class="popular">
    <div class="_container">
        <h2 class="popular__title title">Популярные товары</h2>



            <div class="swiper popular_in_main_slider">
                <div class="swiper-wrapper">

                    @foreach ($menu as $item)
                        <div class="swiper-slide popular_blk">
                            <a href="{{$item->link}}">
                                <div class="img_wrap">
                                    <img loading="lazy" src="{{$item->img}}" alt="">
                                </div>
                                <div class="circleCard__name">
                                    {{$item->title}}
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
                <div class="slider_nav_btn slider_nav_btn_next"></div>
                <div class="slider_nav_btn slider_nav_btn_prev"></div>
            </div>





    </div>
</section>
