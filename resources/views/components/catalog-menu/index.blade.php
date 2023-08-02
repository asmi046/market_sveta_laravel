
<div class="catalog_menu_wrapper_zt">
	<div class="close_catalog"></div>
</div>
<div class="catalog_menu_wrapper">
	<div class="catalog_menu">
		<nav>
			<ul>
				@foreach ($menu as $item)
					<li><a data-subwin="{{$item->id}}" href="{{$item->link}}">{{$item->title}}</a></li>
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

                <li><a href="{{route('category', "liustry-22")}}" class="menu__link">Люстры</a></li>
                <li><a href="{{route('category', "bra-i-nastennoe-osveshhenie-7")}}" class="menu__link">Бра</a></li>
                <li><a href="{{route('category', "tocecnye-svetilniki-64")}}" class="menu__link">Точечный свет</a></li>
                <li><a href="{{route('category', "svetodiodnye-lenty-i-profili-43")}}" class="menu__link">Ленты и профили</a></li>
                <li><a href="{{route('category', "sinnye-i-strunnye-sistemy-68")}}" class="menu__link">Трековый свет</a></li>
                <li><a href="{{route('category', "ulicnye-svetilniki-118")}}" class="menu__link">Уличный свет</a></li>
                <li><a href="{{route('category', "spoty-54")}}" class="menu__link">Споты</a></li>
                <li><a href="{{route('category', "nastolnye-lampy-15")}}" class="menu__link">Настольные лампы</a></li>

                <li class="menu__shares"><a href="{{route('sales')}}" class="menu__link animated_bg">Распродажа</a></li>
			</ul>
		</div>

	</div>
</header>
