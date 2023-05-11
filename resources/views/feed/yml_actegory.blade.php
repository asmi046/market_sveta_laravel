@php
    echo '<?xml version="1.0" encoding="UTF-8"?>';
@endphp

<yml_catalog date="{{ date("Y-m-d\TH:i:sP") }}">
<shop>
    <name>KartaSveta</name>
    <company>ООО "Карта Света"</company>
    <url>https://kartasveta.ru/</url>
    <currencies>
        <currency id="RUR" rate="1"/>
    </currencies>

    <categories>
        @foreach ($all_cat as $item)
            <category id="{{$item->id}}" parentId="{{$item->parentid}}">{{$item->name}}</category>
        @endforeach
    </categories>

    <offers>
        @foreach ($cat_product as $item)
            <offer id="{{$item->sku}}" available="{{($item->insklad > 0)?"true":"false"}}">
                <name>{{$item->name}}</name>
                <url>{{route('product', $item->slug)}}</url>

                @if(Storage::disk('local')->exists('public/products_galery/'.$item->img))
                    <picture>{{((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') ."://". $_SERVER['HTTP_HOST']}}{{Storage::url('public/products_galery/'.$item->img)}}</picture>
                @endif

                <price>{{$item->price}}</price>

                @if (!empty($item->price_old))
                    <oldprice>{{$item->price_old}}</oldprice>
                @endif

                <description>{{$item->description}}</description>
                <currencyId>RUR</currencyId>
                <categoryId>{{$category->id}}</categoryId>
                <delivery>truee</delivery>
                <store>false</store>
                <pickup>false</pickup>
                <vendor>{{$item->brand}}</vendor>
            </offer>
        @endforeach
    </offers>
    <gifts>
        <!-- подарки не из прайс‑листа -->
    </gifts>
    <promos>
        <!-- промоакции -->
    </promos>
</shop>

</yml_catalog>
