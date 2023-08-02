@extends('layout.all')
@section('title', "Товары со скидкой ")
@section('description', "Осветительное оборудование со скидкой, каждый день мы готовим для Вас самые выгодные цены на светильники, люстры и другое световое оборудование")

@section('content')

    <section id="category_page" class="select-prod">
        <div class="_container">
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{route('home')}}">Главная</a></li>

                    <li>Товары со скидкой</li>
                </ul>
            </div>

            <h1>Товары со скидкой</h1>

            <div class="page__body d-flex">


                <div id="sb_app" class="sb_app">
                    <category-filter
                        home-rout="{{ route('home') }}"
                        cat-list=""
                        cat-url="{{url()->current()}}"
                        cat-id="1"
                        show-mode="sales"
                    ></category-filter>
                </div>

                <main class="page__main main">


                    <x-category-sort :cat="$cat_product"></x-category-sort>

                    <div class="main-prod-card d-flex">
                        @foreach ($cat_product as $item)
                            <x-tovar-card :minfo="$item"></x-tovar-card>
                        @endforeach
                    </div>

                    @php
                        $inPage = isset($_REQUEST['page'])?(int)$_REQUEST['page'] * 48:48;
                    @endphp
                    {{-- <show-more route="/show_more_tovar" catid="{{$category->id}}" inpage="{{$inPage}}"></show-more> --}}

                    {{$cat_product->links('parts.pagination');}}

                </main>

            </div>
        </div>
    </section>

@endsection
