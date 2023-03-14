<header id="header-top" class="header-top header-top-index">
	<div class="_container">
		<div class="header-top__inner">
			<div class="location-block d-flex" id="city_select">
				<city-select page-mode="head"></city-select>
				<a href="{{route('dostavka')}}" class="location-block__link location-block__box icon-ec_icon_box">Доставка</a>
			</div>
            <div class="r_work">
                {{Config::get('contact.grafik')}}
            </div>
			<ul>
				<x-top-menu-puncts></x-top-menu-puncts>
			</ul>
		</div>
	</div>
</header>
