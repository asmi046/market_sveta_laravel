<!DOCTYPE html>
<html lang="ru">
    @include('parts.head')
<body>
	<div class="wrapper" id = "global_app">
		@include('parts.header_index')
		<main class="page">
            
            @yield('content')

		</main>
		@include('parts.footer')
	</div>
	@include('parts.popup')
	@include('parts.js')
</body>

</html>