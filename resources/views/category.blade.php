@extends('layout.all')
@section('title', $category->title_seo)
@section('description', $category->description_seo)

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

             
                <div id="sb_app" class="sb_app">                
                    <category-filter 
                        home-rout="{{ route('home') }}" 
                        cat-list="{{$sub_cat->toJson()}}" 
                        cat-url="{{url()->current()}}" 
                        cat-id="{{$category->baseid}}"
                        show-mode="category" 
                    ></category-filter>
                </div>
                
                <main class="page__main main">

                    <x-subcat-slider :subcat="$sub_cat"></x-subcat-slider>

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