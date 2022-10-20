<header id="header" class="header">
	<div class="_container">

		<div class="header__row-top d-flex">
			<a href="{{route('home')}}" class="header__logo logo-icon"></a>

			<div class="header__middle d-flex">

				<x-main-search></x-main-search>
				
				<div class="header__contacts d-flex">
					<div class="header__callback callback d-flex">
						<a href="tel:88007006045" class="callback__phone">{{Config::get('contact.phone')}}</a>
						<a href="#callback" class="callback__popup _popup-link">Заказать обратный звонок</a>
					</div>

					<a href="#" class="header__favorites">Избранное</a>
					<a href="{{route('bascet')}}" class="header__bascket"> <span class="bascet_counter">0</span> Корзина</a>
				</div>

			</div>

		</div>

	</div>
</header>