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
// Стили
            [
                "parent" => "Люстры",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Современный",
                "link" => "category/liustry-22?style%5B%5D=современный",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Арт-деко",
                "link" => "category/liustry-22?style%5B%5D=арт-деко",
            ],
            
            [
                "parent" => "Люстры",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Восточный",
                "link" => "category/liustry-22?style%5B%5D=восточный",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Лофт",
                "link" => "category/liustry-22?style%5B%5D=лофт",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Замковый",
                "link" => "category/liustry-22?style%5B%5D=замковый",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Классический",
                "link" => "category/liustry-22?style%5B%5D=классический",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Ретро",
                "link" => "category/liustry-22?style%5B%5D=ретро",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Кантри",
                "link" => "category/liustry-22?style%5B%5D=кантри",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Хай-тек",
                "link" => "category/liustry-22?style%5B%5D=хай-тек",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Модерн",
                "link" => "category/liustry-22?style%5B%5D=модерн",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Флористика",
                "link" => "category/liustry-22?style%5B%5D=флористика",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Прованс",
                "link" => "category/liustry-22?style%5B%5D=прованс",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Тиффани",
                "link" => "category/liustry-22?style%5B%5D=тиффани",
            ],
// Материалы

            [
                "parent" => "Люстры",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Металл",
                "link" => "category/liustry-22?arm_material%5B%5D=металл",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Алюминий",
                "link" => "category/liustry-22?arm_material%5B%5D=алюминий",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Пластик",
                "link" => "category/liustry-22?arm_material%5B%5D=пластик",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Латунь",
                "link" => "category/liustry-22?arm_material%5B%5D=латунь",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Дерево",
                "link" => "category/liustry-22?arm_material%5B%5D=дерево",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Стекло",
                "link" => "category/liustry-22?arm_material%5B%5D=стекло",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Полимер",
                "link" => "category/liustry-22?arm_material%5B%5D=полимер",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Камень",
                "link" => "category/liustry-22?arm_material%5B%5D=камень",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Хрусталь",
                "link" => "category/liustry-22?arm_material%5B%5D=хрусталь",
            ],
//Места применения
            [
                "parent" => "Люстры",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Прихожая",
                "link" => "category/liustry-22?mesto%5B%5D=прихожая",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Гостиная",
                "link" => "category/liustry-22?mesto%5B%5D=гостиная",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кафе, рестораны",
                "link" => "category/liustry-22?mesto%5B%5D=кафе%2C+рестораны",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Спальня",
                "link" => "category/liustry-22?mesto%5B%5D=спальня",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Детская",
                "link" => "category/liustry-22?mesto%5B%5D=детская",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Большие залы",
                "link" => "category/liustry-22?mesto%5B%5D=большие+залы",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кухня",
                "link" => "category/liustry-22?mesto%5B%5D=кухня",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Офис",
                "link" => "category/liustry-22?mesto%5B%5D=офис",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кабинет",
                "link" => "category/liustry-22?mesto%5B%5D=кабинет",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Магазин",
                "link" => "category/liustry-22?mesto%5B%5D=магазин",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Ванная",
                "link" => "category/liustry-22?mesto%5B%5D=ванная",
            ],

        ];
//КОНЕЦ СТРОКИ

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

    }
}
