<!DOCTYPE html>
<html lang="ru">
    @include('parts.head')
<body>

    <div class="up_btn up_btn_hide" id="up_btn"></div>

	<div class="wrapper" id = "global_app">
		@include('parts.header_index')

        <modal-window rout="/send_consult" redirect="/thencs" hesh="recollMsg" title="Заказать обратный звонок" subtitle="{{Config::get('contact.grafik')}}" ></modal-window>
        <project-send-window rout="/send_project" redirect="/thencs" hesh="projectMsg" title="Отправить проект на расчет" subtitle="Отправьте проект и мы постараемся сделать цену ниже." ></project-send-window>
        <project-send-window rout="/send_project" redirect="/thencs" hesh="photoMsg" title="Подбор по фото" subtitle="Отправьте нам фото и мы найдем желаемый продукт." ></project-send-window>
        <project-send-window rout="/send_project" redirect="/thencs" hesh="calcbaMsg" title="Заявка на сотрудничество" subtitle="Заполните заявку и наши менеджеры свяжутся с Вами и предложат лучьшие условия." ></project-send-window>

        <quick-view-window></quick-view-window>
        <one-click-buy-window></one-click-buy-window>

		<main class="page">

            @yield('content')

		</main>
		@include('parts.footer')
	</div>
	@include('parts.js')
</body>

</html>
