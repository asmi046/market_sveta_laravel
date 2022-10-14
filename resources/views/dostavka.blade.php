@extends('layout.all')

@php
$page_title = "Доставка";
@endphp

@section('title', $page_title)

@section('content')

    <section id="select-prod" class="select-prod">
        <div class="_container">
            
            <x-breadcrumbs :pagename="$page_title" :simple="true"></x-breadcrumbs>

            <h1>{{$page_title}}</h1>
        

            <div class="text_style">
                <div class="dost_blk">
					<p>Мы осуществляем доставку с о склада по <strong>Москве</strong> и Московской области. Транспортными компаниями нашу продукцию мы доставляем по всей территории <strong>РФ</strong> а так же по всем странам <strong>СНГ</strong></p> 
					
                    <ul>
						<li>Популярные позиции из нашего каталога имеются на скдаже в Москве.</li>
						<li>Срок поставки отсутствующих товаров составляет 4-6 недель!</li>
					</ul>
				
					<p>После оформления заказов наши менеджеры свяжутся с Вами и уточнят конкретные сроки доставки по оборудованию!</p>
				</div>    
            </div>

        </div>
    </section>

   
@endsection