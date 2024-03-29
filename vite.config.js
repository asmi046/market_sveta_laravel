import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',

                "public/css/style.min.css",
                "public/css/interface.css",
                "public/css/filter.style.css",
                "public/css/mainsearch.css",
                "public/css/bascet.css",
                "public/css/brand.css",
                "public/css/mobile_bottom_menu.css",
                "public/css/icon-font.css",
                "public/css/mobile_catalog_menu.css",
                "public/css/catalog_menu.css",
                "public/css/stocks.css",

                "resources/js/lib/lib.js",

                // "public/js/modules/dynamic_adapt.js",

                // "public/js/modules/functions.js",
                // "public/js/modules/regular.js",
                "public/js/modules/script.js",
                "public/js/modules/brand.js",
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
            ],
            refresh: true,
            mode:'production'

        }),
    ],


});
