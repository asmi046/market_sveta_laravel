<div data-prodid="{{$minfo->sku}}" class="main-prod-card__column">
    <div class="prod-card__body d-flex">
        <div class="bascet_count">
            В корзине <span>1</span> шт
        </div>
        <a href="#quick_{{$minfo->id}}" class="quick_show"><span>Быстрый просмотр</span></a>
        <to-favorites-btn sku="{{$minfo->sku}}"></to-favorites-btn>
        <a href="{{route('product', $minfo->slug)}}" class="prod-card__img">
            @if(Storage::disk('public')->exists($minfo->img))
                <img loading="lazy" src="{{Storage::url($minfo->img)}}" alt="Купить {{$minfo->name}}">
            @else
                <img loading="lazy" src="{{asset('img/no_photo.jpg')}}" alt="Купить {{$minfo->name}}">
            @endif
        </a>
        <div class="prod-card__price_blk">
            <p class="prod-card__price price_formator rub">{{$minfo->price}}</p>
            <x-tovar-card.action :price="$minfo->price" :oldprice="$minfo->price_old"></x-tovar-card.action>
        </div>
        <div class="prod-card__text">
            {{-- <div class="prod-card__text-sale">Акция</div> --}}

            <h4 class="prod-card__text-title">
                {{$minfo->name}}
            </h4>
            <div class="prod-card__inner d-flex">
                <p class="prod-card__manuf">{{$minfo->brand}} ({{$minfo->state}})</p>
                <x-tovar-card.nal :insklad="$minfo->insklad" ></x-tovar-card.nal>
            </div>

        </div>
        <div class="prod-card__price-item d-flex">
            <to-bascet-btn bascet="{{route('bascet')}}"  sku="{{$minfo->sku}}"></to-bascet-btn>
            {{-- <a href="#" data-prodid="{{$minfo->sku}}" class="card_to_bascet_btn btn to_bascet"><span class="nadp">В корзину</span><span class="btnLoader"></span> </a>
            <a href="{{route('bascet')}}" class="card_bascet_btn btn">Оформить</a> --}}
        </div>
    </div>
</div>
