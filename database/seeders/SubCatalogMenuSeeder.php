<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class SubCatalogMenuSeeder extends Seeder
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
                "parent" => "Люстры",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Люстры потолочные, накладны",
                "link" => "category/liustry-potolocnye-nakladny-23",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Люстры подвесные",
                "link" => "category/liustry-podvesnye-24",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Люстры каскадные",
                "link" => "category/liustry-kaskadnye-25",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Люстры для натяжного потолка",
                "link" => "category/liustry-dlia-natiaznogo-potolka-27",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Люстры с пультом",
                "link" => "category/liustry-s-pultom-28",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Люстры светодиодные",
                "link" => "category/liustry-svetodiodnye-29",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Люстры светодиодные",
                "link" => "category/liustry-svetodiodnye-29",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Люстры на штанге",
                "link" => "category/liustry-na-stange-2300",
            ],

        ];


        DB::table("sub_catalog_menus")->insert($all_punkt);

        $all_punkt = [
            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Бра с выключателем",
                "link" => "category/bra-s-vykliucatelem-9",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Бра гибкие",
                "link" => "category/bra-gibkie-10",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Бра с абажуром",
                "link" => "category/bra-s-abazurom-11",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Бра с подсветкой",
                "link" => "category/bra-s-podsvetkoi-12",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Бра для чтения",
                "link" => "category/bra-dlia-cteniia-13",
            ],



        ];


        DB::table("sub_catalog_menus")->insert($all_punkt);

        $all_punkt = [
            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Накладные светильники с пультом",
                "link" => "category/nakladnye-svetilniki-s-pultom-3101",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Светодиодные накладные светильники",
                "link" => "category/svetodiodnye-nakladnye-svetilniki-3102",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Накладные светильники для натяжного потолка",
                "link" => "category/nakladnye-svetilniki-dlia-natiaznogo-potolka-3103",
            ],



        ];


        DB::table("sub_catalog_menus")->insert($all_punkt);

        $all_punkt = [
            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Накладные светильники с пультом",
                "link" => "category/nakladnye-svetilniki-s-pultom-3101",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Светодиодные накладные светильники",
                "link" => "category/svetodiodnye-nakladnye-svetilniki-3102",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Накладные светильники для натяжного потолка",
                "link" => "category/nakladnye-svetilniki-dlia-natiaznogo-potolka-3103",
            ],



        ];
    }
}
