@extends('layout.all')

@php
$page_title = "Укомплектуем дизайн-проект";
@endphp

@section('title', $page_title)

@section('content')

    <section id="select-prod" class="select-prod">
        <div class="_container">

            <x-breadcrumbs :pagename="$page_title" :simple="true"></x-breadcrumbs>

            <h1>{{$page_title}}</h1>


            <div class="text_style">
                <h2>У ВАС ЕСТЬ ДИЗАЙН-ПРОЕКТ И ВАМ НУЖНА ПРОФЕССИАНАЛЬНАЯ ПОМОЩЬ ПО ПОДБОРУ ОСВЕЩЕНИЯ ?</h2>
                <h2>У ВАС ЕСТЬ КАРТИНКА ИЛИ ФОТО СВЕТИЛЬНИКА И ВЫ НЕ МОЖЕТЕ ЕГО НАЙТИ ?</h2>

                <ul>
                    <li>Команда магазина "КартаСвета" помогут Вам  в этом !</li>
                    <li>Мы закрепим за вами личного менеджера</li>
                    <li>Укомплектуем и оптимизируем смету по освещению</li>
                    <li>Найдем то, что вы так долго искали!</li>
                </ul>

                <h2>Комплектация проекта</h2>

                <p>Персональный подход к каждому проекту, качество продукции и безукоризненный сервис - эти критерии являются основными направлениями в нашей компании</p>
                <p>Доверяя нам  свои проекты,  вы можете быть уверены и спокойны за их конечную реализацию.</p>
                <p>Мы не просто продаем свет, мы живем этой  стихией, мы делаем результат.</p>

                <h2>На что вы точно можете  рассчитывать</h2>

                <div class="pay_sp_in_page complecctation">
                    <div class="ps">
                        <div class="icon budget_icon"></div>
                        <div class="text">
                            <strong>Оптимизация бюджета</strong>
                            <p>Наша команда не просто подберет нужное освещение, мы оптимизируем смету закупки. Учтем все ваши  пожелания  и сэкономим бюджет.</p>
                        </div>
                    </div>

                    <div class="ps">
                        <div class="icon complectation_icon"></div>
                        <div class="text">
                            <strong>Бесплатная комплектация и подбор освещения</strong>
                            <p>Просто отправьте нам проект. Все остальное мы сделаем сами! Мы оперативно подбираем по фото, визуализациям и с легкостью ориентируемся в чертежах. Составляем сметы, коммерческие предложения и рассчитываем освещенность</p>
                        </div>
                    </div>

                    <div class="ps">
                        <div class="icon result_icon"></div>
                        <div class="text">
                            <strong>Безукоризненый результат</strong>
                            <p>За красотой интерьера  стоит колосальная работа, а результат напрямую зависит от исполнительности. Соблюдение сроков, удобная доставка, надежная  консультация - одна из составляющих безупречной реализации проекта.</p>
                        </div>
                    </div>
                </div>

                <h2>"КартаСвета" - твой путеводитель в области освещения!</h2>

            </div>

        </div>
    </section>


@endsection