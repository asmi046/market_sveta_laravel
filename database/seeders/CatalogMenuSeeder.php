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

        Storage::disk('public')->put("bra.jpg", file_get_contents(public_path('img/facer_img/for_menu/bra.jpg')), 'public');
        Storage::disk('public')->put("detskiye_svetilniki.jpg", file_get_contents(public_path('img/facer_img/for_menu/detskiye_svetilniki.jpg')), 'public');
        Storage::disk('public')->put("elektroustanovochnyye_izdeliya.jpg", file_get_contents(public_path('img/facer_img/for_menu/elektroustanovochnyye_izdeliya.jpg')), 'public');
        Storage::disk('public')->put("lampy.jpg", file_get_contents(public_path('img/facer_img/for_menu/lampy.jpg')), 'public');
        Storage::disk('public')->put("lyustry.jpg", file_get_contents(public_path('img/facer_img/for_menu/lyustry.jpg')), 'public');
        Storage::disk('public')->put("nakladnye_svet.jpg", file_get_contents(public_path('img/facer_img/for_menu/nakladnye_svet.jpg')), 'public');
        Storage::disk('public')->put("nastolnyye_lampy.jpg", file_get_contents(public_path('img/facer_img/for_menu/nastolnyye_lampy.jpg')), 'public');
        Storage::disk('public')->put("podvesnye_svet.jpg", file_get_contents(public_path('img/facer_img/for_menu/podvesnye_svet.jpg')), 'public');
        Storage::disk('public')->put("prazdnichnoye_osveshcheniye.jpg", file_get_contents(public_path('img/facer_img/for_menu/prazdnichnoye_osveshcheniye.jpg')), 'public');
        Storage::disk('public')->put("reechniye_svet.jpg", file_get_contents(public_path('img/facer_img/for_menu/reechniye_svet.jpg')), 'public');
        Storage::disk('public')->put("shinnyye_sistemy.jpg", file_get_contents(public_path('img/facer_img/for_menu/shinnyye_sistemy.jpg')), 'public');
        Storage::disk('public')->put("spoty.jpg", file_get_contents(public_path('img/facer_img/for_menu/spoty.jpg')), 'public');
        Storage::disk('public')->put("svetilniki_dlya_podsvetki.jpg", file_get_contents(public_path('img/facer_img/for_menu/svetilniki_dlya_podsvetki.jpg')), 'public');
        Storage::disk('public')->put("svetodiodnyye_lenty.jpg", file_get_contents(public_path('img/facer_img/for_menu/svetodiodnyye_lenty.jpg')), 'public');
        Storage::disk('public')->put("tekhnicheskiy_svet_ofis.jpg", file_get_contents(public_path('img/facer_img/for_menu/tekhnicheskiy_svet_ofis.jpg')), 'public');
        Storage::disk('public')->put("tochechnyye_svet.jpg", file_get_contents(public_path('img/facer_img/for_menu/tochechnyye_svet.jpg')), 'public');
        Storage::disk('public')->put("torshery.jpg", file_get_contents(public_path('img/facer_img/for_menu/torshery.jpg')), 'public');

        $all_punkt = [

            [
                "order" => 11,
                "title" => "Светильники для подсветки",
                "img" => Storage::url("svetilniki_dlya_podsvetki.jpg"),
                "link" => "/category/svetilniki-dlia-podsvetki-1",
            ],

            [
                "order" => 2,
                "title" => "Бра и настенное освещение",
                "img" => Storage::url("bra.jpg"),
                "link" => "/category/bra-i-nastennoe-osveshhenie-7",
            ],

            [
                "order" => 7,
                "title" => "Настольные лампы",
                "img" => Storage::url("nastolnyye_lampy.jpg"),
                "link" => "/category/nastolnye-lampy-15",
            ],

            [
                "order" => 1,
                "title" => "Люстры",
                "img" => Storage::url("lyustry.jpg"),
                "link" => "/category/liustry-22",
            ],

            [
                "order" => 3,
                "title" => "Накладные светильники",
                "img" => Storage::url("nakladnye_svet.jpg"),
                "link" => "/category/nakladnye-potolocnye-svetilniki-31",
            ],

            [
                "order" => 3,
                "title" => "Подвесные светильники",
                "img" => Storage::url("podvesnye_svet.jpg"),
                "link" => "/category/podvesnye-svetilniki-32",
            ],

            [
                "order" => 3,
                "title" => "Реечные, линейные светильники",
                "img" => Storage::url("reechniye_svet.jpg"),
                "link" => "/category/reecnye-lineinye-svetilniki-33",
            ],

            [
                "order" => 13,
                "title" => "Детские светильники",
                "img" => Storage::url("detskiye_svetilniki.jpg"),
                "link" => "/category/detskie-svetilniki-34",
            ],

            [
                "order" => 12,
                "title" => "Светодиодные ленты и профили",
                "img" => Storage::url("svetodiodnyye_lenty.jpg"),
                "link" => "/category/svetodiodnye-lenty-i-profili-43",
            ],

            [
                "order" => 9,
                "title" => "Споты",
                "img" => Storage::url("spoty.jpg"),
                "link" => "/category/spoty-54",
            ],

            [
                "order" => 8,
                "title" => "Торшеры и напольные светильники",
                "img" => Storage::url("torshery.jpg"),
                "link" => "/category/torsery-i-napolnye-svetilniki-59",
            ],

            [
                "order" => 6,
                "title" => "Точечные светильники",
                "img" => Storage::url("tochechnyye_svet.jpg"),
                "link" => "/category/tocecnye-svetilniki-64",
            ],

            [
                "order" => 10,
                "title" => "Шинные и струнные системы",
                "img" => Storage::url("shinnyye_sistemy.jpg"),
                "link" => "/category/sinnye-i-strunnye-sistemy-68",
            ],

            [
                "order" => 15,
                "title" => "Лампы",
                "img" => Storage::url("lampy.jpg"),
                "link" => "/category/lampy-109",
            ],

            [
                "order" => 16,
                "title" => "Лайтбоксы",
                "img" => Storage::url("lyustry.png"),
                "link" => "/category/laitboksy-117",
            ],

            [
                "order" => 14,
                "title" => "Уличные светильники",
                "img" => Storage::url("ulichnyye_svetilniki.jpg"),
                "link" => "/category/ulicnye-svetilniki-118",
            ],

            [
                "order" => 17,
                "title" => "Праздничное освещение",
                "img" => Storage::url("prazdnichnoye_osveshcheniye.jpg"),
                "link" => "/category/prazdnicnoe-osveshhenie-132",
            ],

            [
                "order" => 18,
                "title" => "Электроустановочные изделия",
                "img" => Storage::url("elektroustanovochnyye_izdeliya.jpg"),
                "link" => "/category/elektroustanovocnye-izdeliia-143",
            ],

            [
                "order" => 19,
                "title" => "Технический свет, офисные светильники",
                "img" => Storage::url("tekhnicheskiy_svet_ofis.jpg"),
                "link" => "/category/texniceskii-svet-ofisnye-svetilniki-168",
            ]

        ];




        DB::table("catalog_menus")->insert($all_punkt);
    }
}
