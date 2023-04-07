
<script src="{{asset('js/libs/swiper.min.js')}}"></script>

@if (Route::currentRouteName() == "contacts")

@endif

@if (Route::currentRouteName() == "brands" || Route::currentRouteName() == "opt_sotrudnihestvo")
    <script>
        let all_brands = {!! json_encode($all_brands) !!};
    </script>
@endif

@vite([
"public/js/modules/brand.js",
// "public/js/modules/dynamic_adapt.js",

// "public/js/modules/functions.js",
// "public/js/modules/regular.js",
"public/js/modules/script.js",
// "public/js/modules/scroll.js",
"public/js/modules/mainsearch.js",
"public/js/modules/sliders.js",
"public/js/modules/bascet.js",
"public/js/modules/catalog_menu.js",
"public/js/modules/forms.js",
"public/js/modules/mobile_catalog_menu.js",
"public/js/modules/favorites.js",
"public/js/modules/upp_btn.js",
"public/js/libs/fslightbox.js",

])
