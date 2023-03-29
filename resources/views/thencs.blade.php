@extends('layout.all')

@php
$page_title = "Благодарим за заказ!";
@endphp

@section('title', $page_title)

@section('content')

    <section id="select-prod" class="select-prod">
        <div class="_container">

            <x-breadcrumbs :pagename="$page_title" :simple="true"></x-breadcrumbs>

            <h1>{{$page_title}}</h1>


            <div class="text_style">
                <p>Мы свяжемся с Вами в ближайшее время, уточним детали заказа и спланируем доставку</p>
            </div>

        </div>
    </section>


@endsection
