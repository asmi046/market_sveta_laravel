<header id="header-top" class="header-top header-top-index">
	<div class="_container">
		<div class="header-top__inner">
			<div class="location-block d-flex" id="city_select">
				<city-select></city-select>
				{{-- <a href="#city" class="location-block__link location-block__link_01 _popup-link">Курск</a> --}}
				<a href="{{route('dostavka')}}" class="location-block__link location-block__box icon-ec_icon_box">Доставка</a>
			</div>
			<ul>
				<li><a href="{{route('about')}}">О компании</a></li>
				<li><a href="{{route('brands')}}">Бренды</a></li>
                <li><a href="{{route('aktsii')}}">Акции</a></li>
                <li><a href="{{route('pay')}}">Оплата</a></li>
                <li><a href="{{route('opt_sotrudnihestvo')}}">Опт и сотрудничество</a></li>
				<li><a href="{{route('contacts')}}">Контакты</a></li>
			</ul>
		</div>
	</div>
</header>