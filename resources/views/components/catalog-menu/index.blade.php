
<div class="catalog_menu_wrapper_zt">
	<div class="close_catalog"></div>
</div>
<div class="catalog_menu_wrapper">
	<div class="catalog_menu">
		<nav>
			<ul>
				@foreach ($menu as $item)
					<li><a data-subwin="{{$item->slug}}" href="{{$item->link}}">{{$item->title}}</a></li>	
				@endforeach
			</ul>
		</nav>
	</div>

	<x-catalog-menu.submenu :menu="$menu"></x-catalog-menu.submenu>

	
</div>

<x-mobile-catalog-menu></x-mobile-catalog-menu>

<header id="header-bottom" class="header-bottom">
	<div class="_container">

		<div class="header__menu menu">
			<ul class="menu__list d-flex">
				<li class="menu__catalogy"><a href="#" class="open_cat_menu menu__link animated_bg">Каталог товаров</a></li>
				<li><a href="{{route('category', "potolocnye-liustry-2868")}}" class="menu__link">Люстры</a></li>
				<li><a href="{{route('category', "potolocnye-svetilniki-2872")}}" class="menu__link">Светильники</a></li>
				<li><a href="{{route('category', "nastennye-bra-2864")}}" class="menu__link">Бра</a></li>
				<li><a href="{{route('category', "nastolnye-lampy-2865")}}" class="menu__link">Настольные лампы</a></li>
				<li><a href="{{route('category', "spoty-2893")}}" class="menu__link">Споты</a></li>
				<li><a href="{{route('category', "torsery-i-napolnye-svetilniki-2894")}}" class="menu__link">Торшеры</a></li>
				<li><a href="{{route('category', "svet-dlia-ulicy-2915")}}" class="menu__link">Уличное освещение</a></li>
				<li><a href="{{route('category', "elektroustanovka-3201")}}" class="menu__link">Электротовары</a></li>
				<li class="menu__shares"><a href="{{route('aktsii')}}" class="menu__link animated_bg">Акции</a></li>
			</ul>
		</div>

	</div>
</header>