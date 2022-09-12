<div class="main-prod-card__column">
    <div class="prod-card__body d-flex">
        <x-favorit :isactive="false"></x-favorit>
        <a href="{{route('product', $minfo->slug)}}" class="prod-card__img">
            @if(Storage::disk('local')->exists('public/products_galery/'.$minfo->img))
                <img src="{{Storage::url('public/products_galery/'.$minfo->img)}}" alt="Купить {{$minfo->name}}">
            @else
                <img src="{{asset('img/no_photo.jpg')}}" alt="Купить {{$minfo->name}}">
            @endif
        </a>
        <div class="prod-card__text">
            {{-- <div class="prod-card__text-sale">Акция</div> --}}

            <h4 class="prod-card__text-title">
                {{$minfo->name}}
            </h4>
            <div class="prod-card__inner d-flex">
                <p class="prod-card__manuf">{{$minfo->brand}} ({{$minfo->state}})</p>
                <x-tovar-card.nal :insklad="$minfo->insklad" ></x-tovar-card.nal>
            </div>
            <x-tovar-card.action :price="$minfo->price" :oldprice="$minfo->price_old"></x-tovar-card.action>
        </div>
        <div class="prod-card__price-item d-flex">
            <p class="prod-card__price rub">{{$minfo->price}}</p>
            <a href="#" data-prodid="{{$minfo->sku}}" data-tiken="{{ csrf_token() }}" class="btn to_bascet">В корзину</a>
        </div>
    </div>
</div>