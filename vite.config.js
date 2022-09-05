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
                "resources/js/lib/lib.js", 
                "public/css/style.min.css", 
                "public/css/interface.css", 
                "public/css/filter.style.css"
            ],
            refresh: true,
        }),
    ],


});
