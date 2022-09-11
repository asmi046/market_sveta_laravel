@extends('layout.all')

@php
$page_title = "Корзина";
@endphp

@section('title', $page_title)

@section('content')

    <section id="select-prod" class="select-prod">
        <div class="_container">
            
            <x-breadcrumbs :pagename="$page_title" :simple="true"></x-breadcrumbs>

            <h1>{{$page_title}}</h1>
            
            <div class="bascet">
                <div class="bascet_tovar">
                    <div class="control">
                        <a class="clear_bascet_btn" href="#"><span>Очистить корзину</span></a>
                    </div>

                    <div class="tovar_list">
                        <div class="tovar">
                            <div class="tovar_all_blk picture_blk">
                                <img src="{{asset('img/slider-product/PL-59936_0.jpg')}}" alt="">
                            </div>
                            <div class="tovar_all_blk name_blk">
                                <h2>Люстра на штанге Covali PL-59936</h2>
                                <p>Covali (Россия) Артикул: PL-59936</p>
                            </div>
                            <div class="tovar_all_blk price_blk">
                                <span class="rub price_formator">7516</span>
                            </div>
                            <div class="tovar_all_blk couint_blk">
                                <input type="number" value="1">
                            </div>
                            <div class="tovar_all_blk summ_blk">
                                <span class="rub price_formator">207516</span>
                            </div>
                        </div>
                    </div>

                    <div class="itogo">
                        <div class="itogo_price_count">
                            <div class="itogo_row">
                                <span class="text">Товары (<span>5</span>)</span>
                                <span class="razd"></span>
                                <span class="p_price rub price_formator">1325</span>
                            </div>

                            <div class="itogo_row itogo_row_final">
                                <span class="text">Итого</span>
                                <span class="razd"></span>
                                <span class="p_price rub price_formator">1325</span>
                            </div>
                        </div>
                    </div>

                </div>
                
                <div class="bascet_form">
                    <h2>Контактные данные</h2>
                    <form action="GET">
                        <input name="fio" type="text" placeholder="Фамилия, Имя*">
                        <input name="email" type="email" placeholder="e-mail">
                        <input name="phone" type="text" placeholder="Телефон*">
                        <textarea name="adress" placeholder="Адрес"></textarea>
                        <textarea name="comment" placeholder="Комментарий"></textarea>
                        <button class="btn" type="submit">Отправить</button>
                        <p class="policy">Заполняя данную форму и отправляя заказ вы соглашаетесь с <a href="#">политикой конфиденциальности</a></p>
                    </form>
                </div>
            </div>

        </div>
    </section>

   
@endsection