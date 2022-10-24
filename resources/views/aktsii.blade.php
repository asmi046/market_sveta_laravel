@extends('layout.all')

@php
$page_title = "Акции";
@endphp

@section('title', $page_title)

@section('content')

    <section id="select-prod" class="select-prod">
        <div class="_container">
            
            <x-breadcrumbs :pagename="$page_title" :simple="true"></x-breadcrumbs>

            <h1>{{$page_title}}</h1>
        

            <div class="all_stocks">
                @foreach ($stocks as $item)
                    <a href="{{$item->link}}" title="{{$item->title}}" class="stock_blk">
                        <img src="{{Storage::url('public/stock/'.$item->img)}}" alt="{{$item->title}}">
                        <div class="endtime">
                            {{$item->end_data}}
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

   
@endsection