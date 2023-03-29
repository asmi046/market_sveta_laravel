<!DOCTYPE html>
<html lang="ru">
    @include('parts.head')
<body>

    <div class="up_btn up_btn_hide" id="up_btn"></div>

	<div class="wrapper" id = "global_app">
		@include('parts.header_index')

        <modal-window rout="/send_consult" redirect="/thencs" hesh="recollMsg" title="Заказать обратный звонок" subtitle="{{Config::get('contact.grafik')}}" ></modal-window>

        <quick-view-window></quick-view-window>

		<main class="page">

            @yield('content')

		</main>
		@include('parts.footer')
	</div>
	@include('parts.js')
</body>

</html>
