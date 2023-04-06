<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BanerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Storage::disk('public')->put("main_cristal_lux.webp", file_get_contents(public_path('img/banners/main_cristal_lux.webp')), 'public');
        Storage::disk('public')->put("main_smart_home_1.webp", file_get_contents(public_path('img/banners/main_smart_home.webp')), 'public');
        Storage::disk('public')->put("main_maytonu.webp", file_get_contents(public_path('img/banners/main_maytonu.webp')), 'public');
        Storage::disk('public')->put("main_arlight.webp", file_get_contents(public_path('img/banners/main_arlight.webp')), 'public');
        Storage::disk('public')->put("main_clux_2.webp", file_get_contents(public_path('img/banners/main_clux_2.webp')), 'public');
        Storage::disk('public')->put("main_skyline.webp", file_get_contents(public_path('img/banners/main_skyline.webp')), 'public');

        Storage::disk('public')->put("action_banner_odeon.webp", file_get_contents(public_path('img/banners/action_banner_odeon.webp')), 'public');
        Storage::disk('public')->put("action_banner_C_LUX.webp", file_get_contents(public_path('img/banners/action_banner_C_LUX.webp')), 'public');
        Storage::disk('public')->put("action_banner_SMART.webp", file_get_contents(public_path('img/banners/action_banner_SMART.webp')), 'public');
        Storage::disk('public')->put("action_banner_MAGNIT.webp", file_get_contents(public_path('img/banners/action_banner_MAGNIT.webp')), 'public');

        Storage::disk('public')->put("info-sl-1.webp", file_get_contents(public_path('img/banners/info-sl-1.webp')), 'public');
        Storage::disk('public')->put("info-sl-2.webp", file_get_contents(public_path('img/banners/info-sl-2.webp')), 'public');

        echo env("PICT",1);
        $all_banners = [

            [
                "img_name" =>  Storage::url("action_banner_C_LUX.webp"),
                "page" => "home",
                "page_area" => "action_banner",
                "title" => "",
                "sub_title" => "",
                "order" => 1,
            ],

            [
                "img_name" =>  Storage::url("action_banner_SMART.webp"),
                "page" => "home",
                "page_area" => "action_banner",
                "title" => "",
                "sub_title" => "",
                "order" => 2,
            ],

            [
                "img_name" =>  Storage::url("action_banner_MAGNIT.webp"),
                "page" => "home",
                "page_area" => "action_banner",
                "title" => "",
                "sub_title" => "",
                "order" => 3,
            ],

            [
                "img_name" =>  Storage::url("action_banner_odeon.webp"),
                "page" => "home",
                "page_area" => "action_banner",
                "title" => "",
                "sub_title" => "",
                "order" => 4,
            ],

            [
                "img_name" =>  Storage::url("main_cristal_lux.webp"),
                "page" => "home",
                "page_area" => "main_banner",
                "title" => "Баннер 1",
                "sub_title" => "Баннер 1",
                "order" => 0,
            ],

            [
                "img_name"  =>  Storage::url("main_smart_home_1.webp"),
                "page" => "home",
                "page_area" => "main_banner",
                "title" => "Баннер 2",
                "sub_title" => "Баннер 2",
                "order" => 1,
            ],

            [
                "img_name"  =>  Storage::url("main_maytonu.webp"),
                "page" => "home",
                "page_area" => "main_banner",
                "title" => "Баннер 2",
                "sub_title" => "Баннер 2",
                "order" => 1,
            ],

            [
                "img_name"  =>  Storage::url("main_arlight.webp"),
                "page" => "home",
                "page_area" => "main_banner",
                "title" => "Баннер 2",
                "sub_title" => "Баннер 2",
                "order" => 1,
            ],

            [
                "img_name"  =>  Storage::url("main_clux_2.webp"),
                "page" => "home",
                "page_area" => "main_banner",
                "title" => "Баннер 2",
                "sub_title" => "Баннер 2",
                "order" => 1,
            ],

            [
                "img_name"  =>  Storage::url("main_skyline.webp"),
                "page" => "home",
                "page_area" => "main_banner",
                "title" => "Баннер 2",
                "sub_title" => "Баннер 2",
                "order" => 1,
            ],



            [
                "img_name" => Storage::url("info-sl-1.webp"),
                "page" => "home",
                "page_area" => "info_slider_top",
                "title" => "",
                "sub_title" => "",
                "order" => 0,
            ],
            [
                "img_name" => Storage::url("info-sl-2.webp"),
                "page" => "home",
                "page_area" => "info_slider_bottom",
                "title" => "",
                "sub_title" => "",
                "order" => 0,
            ],

            [
                "img_name" => "sale.jpg",
                "page" => "home",
                "page_area" => "sale_banner",
                "title" => "",
                "sub_title" => "",
                "order" => 0,
            ],

            [
                "img_name" => "sale-baner.jpg",
                "page" => "contacts",
                "page_area" => "sale_banner",
                "title" => "",
                "sub_title" => "",
                "order" => 0,
            ],
        ];
        DB::table("baners")->insert($all_banners);
    }
}
