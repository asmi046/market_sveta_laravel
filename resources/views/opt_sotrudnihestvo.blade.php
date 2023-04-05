@extends('layout.all')

@php
$page_title = "Оптовым клиентам";
@endphp

@section('title', $page_title)

@section('content')

    <section id="select-prod" class="select-prod">
        <div class="_container">

            <x-breadcrumbs :pagename="$page_title" :simple="true"></x-breadcrumbs>

            <h1>{{$page_title}}</h1>

            <div class="text_style">

                <div class="designer_slide opt">
                    <div class="control">
                        <h2>Зарабатывайте и получайте новых клиентов с магазином КартаСвета</h2>
                        <h3>КартаСвета - твой путеводитель в области освещения!</h3>
                        <ul>
                            <li>Самые выгодные условия</li>
                            <li>Сопровождение сделки и  всех этапах</li>
                        </ul>
                        <a class="btn btn_bc" href="">Заявка на сотрудничество</a>
                    </div>
                </div>

                <h2>Мы предлагаем</h2>
                <div class="how_hem">
                    <div data-number="1." class="hhp">Самые выгодные условия</div>
                    <div data-number="2." class="hhp">Сопровождение сделки и  всех этапах</div>
                    <div data-number="3." class="hhp">Помощь в комплектации светильников</div>
                    <div data-number="4." class="hhp">Печатные каталоги и рекламные материалы </div>
                    <div data-number="5." class="hhp">Быстрый возварт или обмен</div>
                    <div data-number="6." class="hhp">Актуальные цены и остатки</div>
                    <div data-number="7." class="hhp">Различные схемы работы, дропшиппинг</div>
                    <div data-number="8." class="hhp">Осуществляем бесплатное  хранение на складе</div>
                </div>

                <div class="col_2_blk">
                    <div class="left">
                        <h2>Среди наших оптовых клиентов:</h2>
                        <div class="pay_sp_in_page opt_page">
                            <div class="ps">
                                <div class="icon opt_icon_shop"></div>
                                <div class="text"><span>Розничные магазины светильников</span></div>
                            </div>

                            <div class="ps">
                                <div class="icon opt_icon_shop_online"></div>
                                <div class="text"><span>Интернет-магазины люстр</span></div>
                            </div>

                            <div class="ps">
                                <div class="icon opt_icon_stroi"></div>
                                <div class="text"><span>Строительные компании, снабженцы</span></div>
                            </div>

                            <div class="ps">
                                <div class="icon opt_icon_cafe"></div>
                                <div class="text"><span>Отели, рестораны, кафе</span></div>
                            </div>

                            <div class="ps">
                                <div class="icon opt_icon_kot_pos"></div>
                                <div class="text"><span>Коттеджные поселки, городские парки</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="right">
                        <h2>Наши преимущества:</h2>
                        <div class="pay_sp_in_page opt_page">
                            <div class="ps">
                                <div class="icon opt_icon_control"></div>
                                <div class="text"><span>Проверим перед доставкой </span></div>
                            </div>

                            <div class="ps">
                                <div class="icon opt_icon_pay"></div>
                                <div class="text"><span>Предоставим удобные способы оплаты </span></div>
                            </div>

                            <div class="ps">
                                <div class="icon opt_icon_savemony"></div>
                                <div class="text"><span>Гарантируем низкие цены </span></div>
                            </div>

                            <div class="ps">
                                <div class="icon opt_icon_delivery"></div>
                                <div class="text"><span>Доставим оперативно и качественно</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <x-project-rs></x-project-rs>

                <h2>Бренды с которыми мы сотрудничаем</h2>
                <div class="btand_wrap">
                    <x-brands-in-page :allbrands="$all_brands"></x-brands-in-page>
                </div>



            </div>

        </div>
    </section>


@endsection
