<div class="page__main-catCard swiper subCatInCat">
    <div class="swiper-wrapper">
        @foreach ($subcat as $item)
            <div data-slug="{{$item->slug}}" data-catid="{{$item->baseid}}" class="page__main-catCard-column swiper-slide">
                <a href="{{route('category', ['slug' => $item->slug])}}" class="circleCard">
                    <div class="circleCard__img">
                        <div class="circleCard__img-nuar_blk nuar_blk"></div>
                        <img src="{{get_cat_img_url($item->slug)}}" alt="{{$item->name}}">
                    </div>
                    <div class="circleCard__name">
                        {{$item->name}}
                    </div>
                </a>
            </div>    
        @endforeach
    </div>
</div>

<style>
    .subCatInCat .swiper-wrapper{
        display: flex;
    }

    .swiper.subCatInCat {
        width: 100%;
        height: auto;
        overflow: hidden;
    }

    .subCatInCat .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }
</style>

<script>
    document.addEventListener("DOMContentLoaded", () => { 
    var swiper1 = new Swiper(".subCatInCat", {
      slidesPerView: 1,
      breakpoints: {
        640: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 6,
        },
        1024: {
          slidesPerView: 5,
        },
      },
    });
})
  </script>