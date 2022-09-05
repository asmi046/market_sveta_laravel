@extends('layout.all')
@section('title', "Категория")

@section('content')

    <section id="category_page" class="select-prod">
        <div class="_container">
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{route('home')}}">Главная</a></li>
                    <li>{{$category->name}}</li>
                </ul>
            </div>

            <h1>{{$category->name}}</h1>

            <div class="page__body d-flex">

                {{-- <x-category-sidebar></x-category-sidebar> --}}

                {{-- @livewire('category-filter', ['sub_cat' => $sub_cat, 'cat_id' => $category->baseid, 'cat_name'=>$category->name, 'cat_url'=> url()->current()]) --}}
                
                <div id="sb_app">                
                    <category-filter 
                        home-rout="{{ route('home') }}" 
                        cat-list="{{$sub_cat->toJson()}}" 
                        cat-url="{{url()->current()}}" 
                        cat-name="{{$category->name}}" 
                        cat-id="{{$category->baseid}}" 
                    ></category-filter>
                </div>
                
                <main class="page__main main">

                    <x-subcat-slider :subcat="$sub_cat"></x-subcat-slider>

                    <div class="page__main-banner banner">

                    </div>

                    <div class="main-prod-card d-flex">
                        @foreach ($cat_product as $item)
                            <x-tovar-card :minfo="$item"></x-tovar-card>    
                        @endforeach
                    </div>

                    <!-- <div class="show-link">
                        <a href="#" class="show-link__btn">Показать еще</a>
                    </div> -->

                    <!-- <nav class="pagination d-flex">
                        <div class="pagination__nav-links d-flex">
                            <a class="pagination__back" href="#">Назад</a>
                            <span class="pagination__numbers">1</span>
                            <a class="pagination__numbers current" href="#">2</a>
                            <a class="pagination__numbers" href="#">3</a>
                            <a class="pagination__numbers" href="#">4</a>
                            <a class="pagination__numbers" href="#">5</a>
                            <div class="pagination__block-dot d-flex">
                                <span class="pagination__dot">.</span>
                                <span class="pagination__dot">.</span>
                                <span class="pagination__dot">.</span>
                            </div>
                            <a class="pagination__numbers" href="#">60</a>
                            <a class="pagination__next" href="#">Вперед</a>
                        </div>
                    </nav> -->

                </main>

            </div>
        </div>
    </section>

@endsection