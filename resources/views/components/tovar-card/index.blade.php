<div class="main-prod-card__column">
    <div class="prod-card__body d-flex">
        <x-favorit :isactive="false"></x-favorit>
        <a href="#" class="prod-card__img">
            <img src="{{Storage::url('public/products_galery/'.$minfo->img)}}" alt="Купить {{$minfo->name}}">
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
            <a href="#" class="btn">В корзину</a>
        </div>
    </div>
</div>