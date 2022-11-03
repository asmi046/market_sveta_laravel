<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Illuminate\Support\Str;

class CatalogMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $all_punkt = [
            [
                "order" => 1,
                "slug" => Str::slug("Люстры"),
                "title" => "Люстры",
                "link" => "/category/potolocnye-liustry-2868",
            ],
            
            [
                "order" => 2,
                "slug" => Str::slug("Светильники"),
                "title" => "Светильники",
                "link" => "/category/potolocnye-svetilniki-2872",
            ],

            [
                "order" => 3,
                "slug" => Str::slug("Бра"),
                "title" => "Бра",
                "link" => "/category/nastennye-bra-2864",
            ],

            [
                "order" => 4,
                "slug" => Str::slug("Споты"),
                "title" => "Споты",
                "link" => "/category/spoty-2893",
            ],

            [
                "order" => 5,
                "slug" => Str::slug("Настольные лампы"),
                "title" => "Настольные лампы",
                "link" => "/category/nastolnye-lampy-2865",
            ],

            [
                "order" => 6,
                "slug" => Str::slug("Торшеры"),
                "title" => "Торшеры",
                "link" => "/category/torsery-i-napolnye-svetilniki-2894",
            ],

            [
                "order" => 7,
                "slug" => Str::slug("Трековые системы"),
                "title" => "Трековые системы",
                "link" => "/category/sinnye-i-strunnye-sistemy-2899",
            ],

            [
                "order" => 8,
                "slug" => Str::slug("Уличьное освещение"),
                "title" => "Уличьное освещение",
                "link" => "/category/svet-dlia-ulicy-2915",
            ],

            [
                "order" => 9,
                "slug" => Str::slug("Офисное освещение"),
                "title" => "Офисное освещение",
                "link" => "/category/texniceskii-svet-10207",
            ],

            [
                "order" => 10,
                "slug" => Str::slug("Лампочьки"),
                "title" => "Лампочьки",
                "link" => "/category/lampy-2908",
            ],

            [
                "order" => 11,
                "slug" => Str::slug("Светодиодная подсветка"),
                "title" => "Светодиодная подсветка",
                "link" => "/category/svetodiodnye-lenty-2884",
            ],

            [
                "order" => 12,
                "slug" => Str::slug("Электротовары"),
                "title" => "Электротовары",
                "link" => "/category/elektroustanovka-3201",
            ],
        ];

        DB::table("catalog_menus")->insert($all_punkt);
    }
}
