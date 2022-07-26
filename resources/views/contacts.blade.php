@extends('layout.all')
@section('title', "")

@section('content')

    <section id="select-prod" class="select-prod">
        <div class="_container">
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{route('home')}}">Главная</a></li>
                    <li>Контакты</li>
                </ul>
            </div>
            <h1>Контакты</h1>
            
            <div class="contacts_data contacts_phone">
                <a href="tel:+{{preg_replace('/[^0-9]/', '',Config::get('contact.phone'))}}">{{Config::get('contact.phone')}}</a>
                <br>
                <span class="phone_subtitle">По вопросам покупки и сотрудничества</span>
            </div>

            <div class="contacts_data contacts_email">
                <a href="mailto:{{Config::get('contact.mail')}}">{{Config::get('contact.mail')}}</a>
            </div>

            <div class="contacts_data contacts_adress">
                {{Config::get('contact.adress')}}
            </div>

            <div class="text_style">
                <p>Мы всегда на связи с нашими покупателями. Связаться с нашим менеджером можно по телефону +7 (994) 444 48 44. По вопросам оформления заказа, оплаты и доставки звоните нам в рабочее время с 9:00 до 18:00.</p>
                <p>Если вам нужна помощь в выборе светильника или вы хотите обсудить нюансы оптового сотрудничества, звоните или пишите нам на email. На ваше электронное письмо мы ответим в ближайшее рабочее время.</p>
                <p>Наш магазин «Маркет Света» находится по адресу г. Москва, Дмитровское шоссе., 100, стр. 2. По этому адресу работает наш пункт самовывоза. Если вы хотите самостоятельно забрать свою покупку, обязательно укажите это при оформлении заказа.</p>
            </div>

            <div class="block__map" id="map"></div>

            
        </div>
    </section>

     

@endsection