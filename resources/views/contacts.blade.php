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


            <yandex-map></yandex-map>

        </div>
    </section>



@endsection
