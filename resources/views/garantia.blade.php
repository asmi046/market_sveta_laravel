@extends('layout.all')

@php
$page_title = "Гарантия и гарантийное обслуживание";
@endphp

@section('title', $page_title)

@section('content')

    <section id="select-prod" class="select-prod">
        <div class="_container">
            <x-breadcrumbs :pagename="$page_title" :simple="true"></x-breadcrumbs>

            <h1>Гарантийное обслуживание</h1>


            <div class="text_style">
                <x-simple-texts.garantia></x-simple-texts.garantia>
            </div>

        </div>
    </section>


@endsection
