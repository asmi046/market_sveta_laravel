<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Illuminate\Support\Facades\Storage;
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
                "img" => "lyustry.png",
                "link" => "/category/potolocnye-liustry-2868",
            ],
            
            [
                "order" => 2,
                "slug" => Str::slug("Светильники"),
                "title" => "Светильники",
                "img" => "svetilniki.png",
                "link" => "/category/potolocnye-svetilniki-2872",
            ],

            [
                "order" => 3,
                "slug" => Str::slug("Бра"),
                "title" => "Бра",
                "img" => "bra-i-podsvetki.png",
                "link" => "/category/nastennye-bra-2864",
            ],

            [
                "order" => 4,
                "slug" => Str::slug("Споты"),
                "title" => "Споты",
                "img" => "spoty.png",
                "link" => "/category/spoty-2893",
            ],

            [
                "order" => 5,
                "slug" => Str::slug("Настольные лампы"),
                "title" => "Настольные лампы",
                "img" => "nastolnye-lampy.png",
                "link" => "/category/nastolnye-lampy-2865",
            ],

            [
                "order" => 6,
                "slug" => Str::slug("Торшеры"),
                "title" => "Торшеры",
                "img" => "torshery.png",
                "link" => "/category/torsery-i-napolnye-svetilniki-2894",
            ],

            [
                "order" => 7,
                "slug" => Str::slug("Трековые системы"),
                "title" => "Трековые системы",
                "img" => "trekovye-sistemy.png",
                "link" => "/category/sinnye-i-strunnye-sistemy-2899",
            ],

            [
                "order" => 8,
                "slug" => Str::slug("Уличьное освещение"),
                "title" => "Уличьное освещение",
                "img" => "eksterernoe_osveshchenie.png",
                "link" => "/category/svet-dlia-ulicy-2915",
            ],

            [
                "order" => 9,
                "slug" => Str::slug("Офисное освещение"),
                "title" => "Офисное освещение",
                "img" => "ofisnoe-osveshchenie.png",
                "link" => "/category/texniceskii-svet-10207",
            ],

            [
                "order" => 10,
                "slug" => Str::slug("Лампочьки"),
                "title" => "Лампочьки",
                "img" => "lampochki.png",
                "link" => "/category/lampy-2908",
            ],

            [
                "order" => 11,
                "slug" => Str::slug("Светодиодная подсветка"),
                "title" => "Светодиодная подсветка",
                "img" => "svetodiodnaya-podsvetka.png",
                "link" => "/category/svetodiodnye-lenty-2884",
            ],

            [
                "order" => 12,
                "slug" => Str::slug("Электротовары"),
                "title" => "Электротовары",
                "img" => "elektrotovary.png",
                "link" => "/category/elektroustanovka-3201",
            ],
        ];

        
        Storage::disk('local')->put("public/catalog/lyustry.png", file_get_contents("https://www.vamsvet.ru/upload/iblock/28e/lyustry.png"), 'public');
        Storage::disk('local')->put("public/catalog/svetilniki.png", file_get_contents("https://www.vamsvet.ru/upload/iblock/f99/svetilniki.png"), 'public');
        Storage::disk('local')->put("public/catalog/bra-i-podsvetki.png", file_get_contents("https://www.vamsvet.ru/upload/iblock/26b/bra-i-podsvetki.png"), 'public');
        Storage::disk('local')->put("public/catalog/spoty.png", file_get_contents("https://www.vamsvet.ru/upload/iblock/377/spoty.png"), 'public');
        Storage::disk('local')->put("public/catalog/nastolnye-lampy.png", file_get_contents("https://www.vamsvet.ru/upload/iblock/fa1/nastolnye-lampy.png"), 'public');
        Storage::disk('local')->put("public/catalog/torshery.png", file_get_contents("https://www.vamsvet.ru/upload/iblock/3a2/torshery.png"), 'public');
        Storage::disk('local')->put("public/catalog/trekovye-sistemy.png", file_get_contents("https://www.vamsvet.ru/upload/iblock/690/trekovye-sistemy.png"), 'public');
        Storage::disk('local')->put("public/catalog/eksterernoe_osveshchenie.png", file_get_contents("https://www.vamsvet.ru/upload/iblock/9f3/eksterernoe_osveshchenie.png"), 'public');
        Storage::disk('local')->put("public/catalog/ofisnoe-osveshchenie.png", file_get_contents("https://www.vamsvet.ru/upload/iblock/1c3/ofisnoe-osveshchenie.png"), 'public');
        Storage::disk('local')->put("public/catalog/lampochki.png", file_get_contents("https://www.vamsvet.ru/upload/iblock/03e/lampochki.png"), 'public');
        Storage::disk('local')->put("public/catalog/svetodiodnaya-podsvetka.png", file_get_contents("https://www.vamsvet.ru/upload/iblock/44b/svetodiodnaya-podsvetka.png"), 'public');
        Storage::disk('local')->put("public/catalog/elektrotovary.png", file_get_contents("https://www.vamsvet.ru/upload/iblock/923/elektrotovary.png"), 'public');

        DB::table("catalog_menus")->insert($all_punkt);
    }
}
