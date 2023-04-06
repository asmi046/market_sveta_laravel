<div class="foooter_subsribe_line">
	<h3>Не нашли то что искали? <br>Воспользуйтесь услугой подбор по фото →</h3>
    <a href="#photoMsg" class="btn">Подбор по фото</a>
</div>

<footer id="footer" class="footer">
	<div class='_container'>
		<div class="footer__row d-flex">

			<div class="footer__col footer__col_forms">

				<div class="footer__callback callback d-flex">
					<a href="tel:88007006045" class="callback__phone">{{Config::get('contact.phone')}}</a>
					<P class="callback__popup _popup-link">{{Config::get('contact.grafik')}}</p>
				</div>

				<p class="footer__info-text">
					2012 — {{date("Y")}}г. «Интернет-магазин «Карта Света» ©
				</p>
			</div>

			<div class="footer__col">
				<h3>Каталог товаров</h3>
				<ul class="footer__menu">
					@foreach ($menu as $item)
						<li><a href="{{$item->slug}}">{{$item->title}}</a></li>
					@endforeach
				</ul>
			</div>

			<div class="footer__col">
				<h3>Помощь покупателю</h3>
				<ul class="footer__menu">
					<x-bottom-menu-puncts></x-bottom-menu-puncts>
				</ul>
				<div class="footer__social-network">
					<p class="footer__social-network-text">СОЦИАЛЬНЫЕ СЕТИ</p>
					<div class="footer__social-network-block">
						<a href="{{Config::get('contact.vk')}}" class="footer__social-network-link social-network-link-01"></a>
						<a href="{{Config::get('contact.tg')}}" class="footer__social-network-link social-network-link-02"></a>
					</div>
				</div>
			</div>

			<div class="footer__col">
				<h3>Информация</h3>
				<ul class="footer__menu">
					<li><a href="{{route('home')}}">О компании</a></li>
					<li><a href="{{route('policy')}}">Политика конфиденциальности</a></li>
				</ul>
				<div class="footer__payment-methods">
					<p class="footer__payment-methods-text">Способы оплаты</p>
					<div class="footer__payment-methods-icon">
						<img src="{{asset('img/icons/pay_system/mir.svg')}}" alt="">
						<img src="{{asset('img/icons/pay_system/visa.svg')}}" alt="">
						<img class="circle" src="{{asset('img/icons/pay_system/master.svg')}}" alt="">
						<img class="circle" src="{{asset('img/icons/pay_system/maestro.svg')}}" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
