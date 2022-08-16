<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class BanerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $all_banners = [
            [
                "img_name" => "sl-1.jpg",
                "page" => "home",
                "page_area" => "main_banner",
                "title" => "Баннер 1",
                "sub_title" => "Баннер 1",
                "order" => 0,
            ],
            [
                "img_name" => "sl-1.jpg",
                "page" => "home",
                "page_area" => "main_banner",
                "title" => "Баннер 2",
                "sub_title" => "Баннер 2",
                "order" => 1,
            ],
            [
                "img_name" => "info-sl-1.jpg",
                "page" => "home",
                "page_area" => "info_slider_top",
                "title" => "",
                "sub_title" => "",
                "order" => 0,
            ],
            [
                "img_name" => "info-sl-2.jpg",
                "page" => "home",
                "page_area" => "info_slider_bottom",
                "title" => "",
                "sub_title" => "",
                "order" => 0,
            ],
            [
                "img_name" => "popular-br.jpg",
                "page" => "home",
                "page_area" => "action_banner",
                "title" => "",
                "sub_title" => "",
                "order" => 0,
            ],
            [
                "img_name" => "sale-baner.jpg",
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
