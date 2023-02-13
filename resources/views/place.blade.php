@extends('layout.all')
@section('title', $place->title_seo)
@section('description', $place->description_seo)

@section('content')

    <section id="category_page" class="select-prod">
        <div class="_container">
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{route('home')}}">Главная</a></li>
                    <li>{{$place->mesto}}</li>
                </ul>
            </div>

            <h1>{{$place->title}}</h1>

            <div class="page__body d-flex">


                <div id="sb_app" class="sb_app">
                    <category-filter
                        home-rout="{{ route('home') }}"
                        cat-list=""
                        cat-url="{{url()->current()}}"
                        cat-id="{{$place->mesto}}"
                        show-mode="place"
                    ></category-filter>
                </div>

                <main class="page__main main">

                    <div class="main-prod-card d-flex">
                        @foreach ($cat_product as $item)
                            <x-tovar-card :minfo="$item"></x-tovar-card>
                        @endforeach
                    </div>

                    <!-- <div class="show-link">
                        <a href="#" class="show-link__btn">Показать еще</a>
                    </div> -->


                    {{$cat_product->links('parts.pagination');}}
                </main>

            </div>
        </div>
    </section>

@endsection
