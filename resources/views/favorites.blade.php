@extends('layout.all')

@php
$page_title = "Избранное";
@endphp

@section('title', $page_title)

@section('content')

    <section id="select-prod" class="select-prod">
        <div class="_container">

            <x-breadcrumbs :pagename="$page_title" :simple="true"></x-breadcrumbs>

            <h1>{{$page_title}}</h1>


            <favorites></favorites>

        </div>
    </section>


@endsection
