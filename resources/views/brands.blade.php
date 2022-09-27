@extends('layout.all')

@php
$page_title = "Бренды";
@endphp

@section('title', $page_title)

@section('content')

    <script>
        let all_brands = {!! json_encode($all_brands)!!};

    </script>

    <section id="select-prod" class="select-prod">
        <div class="_container">
            
            <x-breadcrumbs :pagename="$page_title" :simple="true"></x-breadcrumbs>

            <h1>{{$page_title}}</h1>
        

            <div class="all_brands_in_page">
                <div class="brand_search">
                    <form action="">
                        <input id="search_brand_input" type="text" placeholder="Введите бренд для поиска">
                    </form>
                    <div id="brand_search_result" class="brand_search_result">

                    </div>
                </div>

                <div class="brand_input">
                   @foreach ($all_brands as $key => $value)
                        <div class="brand_input_blk">
                            <div class="alfuk">
                                {{$key}}
                            </div>

                            <div class="list">
                                @foreach ($value as $item)
                                    <a href="/brand/{{$item['slug']}}">{{$item['brand']}}</a>                                    
                                @endforeach
                            </div>
                        </div>   
                   @endforeach

                     
                </div>

            </div>

        </div>
    </section>

   
@endsection