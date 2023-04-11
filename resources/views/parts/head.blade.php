<head>
	<title>@yield('title')</title>
	<meta name="description" content="@yield('description')">
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" type="image/png" href="{{asset('img/favicons/icon256.png')}}" sizes="256x256">
	<link rel="icon" type="image/png" href="{{asset('img/favicons/icon128.png')}}" sizes="128x128">
	<link rel="icon" type="image/png" href="{{asset('img/favicons/icon64.png')}}" sizes="64x64">
	<link rel="icon" type="image/png" href="{{asset('img/favicons/icon32.png')}}" sizes="32x32">
	<link rel="icon" type="image/png" href="{{asset('img/favicons/icon16.png')}}" sizes="16x16">
	<link rel="icon" type="image/png" href="{{asset('img/favicons/icon.svg')}}" sizes="any">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta property="og:locale" content="ru_RU" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="@yield('title')" />
	<meta property="og:description" content="@yield('description')" />
	<meta property="og:url" content="{{url()->current()}}" />
	<meta property="og:site_name" content="MarketSveta.su" />

    <meta name="yandex-verification" content="4352bfa0c3087b1f" />

	<meta name="_token" content="{{ csrf_token() }}">

    <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}" />

	@vite(["resources/css/app.css",
			"resources/js/app.js",
			"resources/js/lib/lib.js",
			"public/css/style.min.css",
			"public/css/interface.css",
			"public/css/filter.style.css",
			"public/css/mainsearch.css",
			"public/css/bascet.css",
			"public/css/catalog_menu.css",
			"public/css/brand.css",
			"public/css/mobile_bottom_menu.css",
			"public/css/icon-font.css",
			"public/css/mobile_catalog_menu.css",
			"public/css/stocks.css",
			])
    <script>
        const map_coord = {{Config::get('contact.coord')}}
        const company_name = "{{Config::get('contact.maptext')}}"
        const adress = "{{Config::get('contact.adress')}}"
    </script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(93148141, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true,
            ecommerce:"dataLayer"
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/93148141" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>
