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
                "order" => 11,
                "title" => "Светильники для подсветки",
                "img" => "lyustry.png",
                "link" => "/category/svetilniki-dlia-podsvetki-1",
            ],

            [
                "order" => 2,
                "title" => "Бра и настенное освещение",
                "img" => "lyustry.png",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7",
            ],

            [
                "order" => 7,
                "title" => "Настольные лампы",
                "img" => "lyustry.png",
                "link" => "/category/nastolnye-lampy-15",
            ],

            [
                "order" => 1,
                "title" => "Люстры",
                "img" => "lyustry.png",
                "link" => "/category/liustry-22",
            ],

            [
                "order" => 3,
                "title" => "Светильники",
                "img" => "lyustry.png",
                "link" => "/category/svetilniki-30",
            ],

            [
                "order" => 13,
                "title" => "Детские светильники",
                "img" => "lyustry.png",
                "link" => "/category/detskie-svetilniki-34",
            ],

            [
                "order" => 12,
                "title" => "Светодиодные ленты и профили",
                "img" => "lyustry.png",
                "link" => "/category/svetodiodnye-lenty-i-profili-43",
            ],

            [
                "order" => 9,
                "title" => "Споты",
                "img" => "lyustry.png",
                "link" => "/category/spoty-54",
            ],

            [
                "order" => 8,
                "title" => "Торшеры и напольные светильники",
                "img" => "lyustry.png",
                "link" => "/category/torsery-i-napolnye-svetilniki-59",
            ],

            [
                "order" => 6,
                "title" => "Точечные светильники",
                "img" => "lyustry.png",
                "link" => "/category/tocecnye-svetilniki-64",
            ],

            [
                "order" => 10,
                "title" => "Шинные и струнные системы",
                "img" => "lyustry.png",
                "link" => "/category/sinnye-i-strunnye-sistemy-68",
            ],

            [
                "order" => 15,
                "title" => "Лампы",
                "img" => "lyustry.png",
                "link" => "/category/lampy-109",
            ],

            [
                "order" => 16,
                "title" => "Лайтбоксы",
                "img" => "lyustry.png",
                "link" => "/category/laitboksy-117",
            ],

            [
                "order" => 14,
                "title" => "Уличные светильники",
                "img" => "lyustry.png",
                "link" => "/category/ulicnye-svetilniki-118",
            ],

            [
                "order" => 17,
                "title" => "Праздничное освещение",
                "img" => "lyustry.png",
                "link" => "/category/prazdnicnoe-osveshhenie-132",
            ],

            [
                "order" => 18,
                "title" => "Электроустановочные изделия",
                "img" => "lyustry.png",
                "link" => "/category/elektroustanovocnye-izdeliia-143",
            ],

            [
                "order" => 19,
                "title" => "Технический свет, офисные светильники",
                "img" => "lyustry.png",
                "link" => "/category/texniceskii-svet-ofisnye-svetilniki-168",
            ]

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
