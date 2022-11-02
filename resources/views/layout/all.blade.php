<!DOCTYPE html>
<html lang="ru">
    @include('parts.head')
<body>
	<script>
		let map_text = "{{Config::get('contact.maptext')}}";
		let map_coord = {{Config::get('contact.coord')}};
	</script>
	
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