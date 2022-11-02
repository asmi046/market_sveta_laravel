@extends('layout.all')
@section('title', "Брэнд")

@section('content')

    <section id="category_page" class="select-prod">
        <div class="_container">
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{route('home')}}">Главная</a></li>
                    <li><a href="{{route('brands')}}">Все бренды</a></li>
                    <li>{{$brand->brand}}</li>
                </ul>
            </div>

            <h1>Продукты бренда {{$brand->brand}}</h1>

            <div class="page__body d-flex">

                <div id="sb_app"  class="sb_app">                
                    <category-filter 
                        home-rout="{{ route('home') }}" 
                        cat-list="" 
                        cat-url="{{url()->current()}}" 
                        cat-id="{{$brand->brand}}"
                        show-mode="brand" 
                    ></category-filter>
                </div>
                
                <main class="page__main main">

                
                    <div class="main-prod-card d-flex">
                        @foreach ($brand_product as $item)
                            <x-tovar-card :minfo="$item"></x-tovar-card>    
                        @endforeach
                    </div>

                


                    {{$brand_product->links('parts.pagination');}}
                </main>

            </div>
        </div>
    </section>

@endsection