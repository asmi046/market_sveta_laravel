@extends('layout.all')
@section('title', 'Поиск по запросу ' . $search_str)
@section('description', 'Поиск по запросу ' . $search_str)

@section('content')

    <section id="category_page" class="select-prod">
        <div class="_container">
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{route('home')}}">Главная</a></li>

                    <li>Поиск по запросу  {{$search_str}}</li>
                </ul>
            </div>

            <h1>Поиск по запросу  {{$search_str}}</h1>

            <div class="page__body d-flex">


                <div id="sb_app" class="sb_app">
                    <category-filter
                        home-rout="{{ route('home') }}"
                        cat-list=""
                        cat-url="{{url()->current()}}"
                        cat-id="1"
                        show-mode="search"
                        search-str="{{$search_str}}"
                    ></category-filter>
                </div>

                <main class="page__main main">


                    <x-category-sort :cat="$cat_product"></x-category-sort>

                    <div class="main-prod-card d-flex">
                        @foreach ($cat_product as $item)
                            <x-tovar-card :minfo="$item"></x-tovar-card>
                        @endforeach
                    </div>


                    {{$cat_product->links('parts.pagination');}}

                </main>

            </div>
        </div>
    </section>

@endsection
