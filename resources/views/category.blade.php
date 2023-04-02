@extends('layout.all')
@section('title', $category->title_seo)
@section('description', $category->description_seo)

@section('content')

    <section id="category_page" class="select-prod">
        <div class="_container">
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{route('home')}}">Главная</a></li>

                    @if($bc1)
                        <li><a href="{{route('category', $bc1->slug)}}">{{$bc1->name}}</a></li>
                    @endif

                    @if($bc2)
                        <li><a href="{{route('category', $bc2->slug)}}">{{$bc2->name}}</a></li>
                    @endif

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
                        cat-id="{{$category->id}}"
                        show-mode="category"
                    ></category-filter>
                </div>

                <main class="page__main main">

                    <div class="main-prod-card d-flex">
                        @foreach ($cat_product as $item)
                            <x-tovar-card :minfo="$item"></x-tovar-card>
                        @endforeach
                    </div>


                    {{$cat_product->links('parts.pagination');}}

                    <div class="text_blk category_description">
                        {!! $category->description !!}
                    </div>
                </main>

            </div>
        </div>
    </section>

@endsection
