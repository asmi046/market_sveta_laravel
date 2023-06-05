@extends('layout.all')
@section('title', $product->title_seo)

@section('content')

  <section id="select-prod" class="select-prod">
    <div class="_container">

      <x-breadcrumbs :pagename="$product->name" :simple="false" :catnames="$catnames"></x-breadcrumbs>

      <h1>{{$product->name}}</h1>

      <div class="select-prod-block d-flex">

        <div class="select-prod-sl">

          <div class="select-prod-sl__small">
            <div class="swiper-button swiper-button-next select-prod-sl__small-prev"></div>
						<div class="swiper-button swiper-button-prev select-prod-sl__small-next"></div>
            <div class="select-prod-sl__small-slider slider _swiper prodSlSmall">
              @foreach ($images as $item)
                <div class="select-prod-sl__small-slide slider__slide">
                  @if(Storage::disk('public')->exists($item->img_name))
                      <img  src="{{Storage::url($item->img_name)}}" alt="Купить {{$item->alt}}">
                  @else
                      <img src="{{asset('img/no_photo.jpg')}}" alt="Купить {{$item->alt}}">
                  @endif
                </div>
              @endforeach
            </div>
          </div>

          <div class="select-prod-sl__big slider _swiper prodSlBig">
            @foreach ($images as $item)
              <div class="select-prod-sl__big-slide slider__slide">
                @if(Storage::disk('public')->exists($item->img_name))
                    <a data-fslightbox="prod_g1" href="{{Storage::url($item->img_name)}}">
                        <img data-fslightbox="prod_g1" src="{{Storage::url($item->img_name)}}" alt="Купить {{$item->alt}}">
                    </a>
                @else
                    <a data-fslightbox="prod_g1" href="{{asset('img/no_photo.jpg')}}">
                        <img  src="{{asset('img/no_photo.jpg')}}" alt="Купить {{$item->alt}}">
                    </a>
                @endif
              </div>
            @endforeach
          </div>

        </div>

      <div class="select-prod-info">

        <div class="vender_sku">
          <p class="prod-page__manuf">{{$product->brand}} ({{$product->state}})</p>
          <p class="prod-page__manuf">Артикул: {{$product->sku}}</p>
        </div>

        <div class="select-prod-info__price-block select-prod-info__column">
          <div class="select-prod-info__price-block-inner d-flex">
            <div class="price_and_sale">
              <x-tovar-card.action :price="$product->price" :oldprice="$product->price_old"></x-tovar-card.action>
              <div class="select-prod-info__price-block-price price_formator rub">{{$product->price}}</div>
            </div>

            <div class="select-prod-info__price-block-avail">
              <x-tovar-card.nal :insklad="$product->insklad" ></x-tovar-card.nal>
            </div>
          </div>
          <div class="select-prod-info__price-block-buttons">
            <div class="select-prod-info__price-block-buttons-inner d-flex">
                <add-to-bascet-btn sku="{{$product->sku}}">Добавить в корзину</add-to-bascet-btn>
                <a href="#ocbuy_{{$product->id}}" class="select-prod-info__price-block-buttons-btn btn btn_grey">Купить в 1 клик</a>
            </div>

            <a href="" data-prodid="{{$product->sku}}" class="select-prod-info__price-block-buttons-faw icon icon-ec_icon_lice to_favorites"></a>
          </div>
        </div>

        <div class="select-prod-info__notification select-prod-info__column d-flex">
          <a href="#product_cerecter" class="select-prod-info__notification-item tovar_page_all_icon icon icon-ec_icon_shesterny">Тех. характеристики</a>
          <a href="{{route("vozvrat")}}" class="select-prod-info__notification-item tovar_page_all_icon icon icon-ec_icon_arrow_gor">7 дней на возврат</a>
        </div>

        <div class="select-prod-info__delivery select-prod-info__column">
          <h3 class="select-prod-info__delivery-title">Информация о доставке</h3>
          <div class="select-prod-info__delivery-wrap" >


            <city-select page-mode="page"></city-select>


            <p class="select-prod-info__delivery-item-clasific">Точный срок доставки уточним при оформлении заказа</p>
          </div>
        </div>

        <div class="select-prod-info__guarantee select-prod-info__column">
          <div class="wrap_zt">
            <div class="ndp">
              <h3 class="select-prod-info__guarantee-title">
                Есть проект на расчет?
              </h3>
              <p class="select-prod-info__guarantee-subtitle">
                Отправьте проект и мы постараемся сделать цену ниже.
              </p>

              <a href="#projectMsg" class="btn"> Отправить проект</a>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div id="product_cerecter" class="select-prod__specifications">
      <h2 class="select-prod__specifications-title">Технические характеристики</h2>

      <div class="select-prod__specifications-inner">
          @foreach ($propertys as $key => $value)
            <x-property-part :name="$key" :prop="$value"></x-property-part>
          @endforeach
      </div>

    </div>

              <div class="select-prod__description">
                <h2 class="select-prod__description-title">Описание</h2>
                <p class="select-prod__description-text">
                  {{$product->description}}
                </p>
              </div>


          </div>
        </section>

        <section id="similar-products" class="similar-products">
          <div class="_container">

        @if (!empty($upsale))


          <h2 class="similar-products__title">Похожие товары</h2>

            <div class="main-prod-card d-flex">
              @foreach ($upsale as $item)
                <x-tovar-card :minfo="$item"></x-tovar-card>
              @endforeach
            </div>
        @endif

          </div>
        </section>

@endsection
