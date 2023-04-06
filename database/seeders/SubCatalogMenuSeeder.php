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
                "title" => "Люстры потолочные, накладные",
                "link" => "/category/liustry-potolocnye-nakladny-23",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Люстры подвесные",
                "link" => "/category/liustry-podvesnye-24",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Люстры каскадные",
                "link" => "/category/liustry-kaskadnye-25",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Люстры для натяжного потолка",
                "link" => "/category/liustry-dlia-natiaznogo-potolka-27",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Люстры с пультом",
                "link" => "/category/liustry-s-pultom-28",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Люстры светодиодные",
                "link" => "/category/liustry-svetodiodnye-29",
            ],


            [
                "parent" => "Люстры",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Люстры на штанге",
                "link" => "/category/liustry-na-stange-2300",
            ],
// Стили
            [
                "parent" => "Люстры",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Современный",
                "link" => "/category/liustry-22?style%5B%5D=современный",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Арт-деко",
                "link" => "/category/liustry-22?style%5B%5D=арт-деко",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Восточный",
                "link" => "/category/liustry-22?style%5B%5D=восточный",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Лофт",
                "link" => "/category/liustry-22?style%5B%5D=лофт",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Замковый",
                "link" => "/category/liustry-22?style%5B%5D=замковый",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Классический",
                "link" => "/category/liustry-22?style%5B%5D=классический",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Ретро",
                "link" => "/category/liustry-22?style%5B%5D=ретро",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Кантри",
                "link" => "/category/liustry-22?style%5B%5D=кантри",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Хай-тек",
                "link" => "/category/liustry-22?style%5B%5D=хай-тек",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Модерн",
                "link" => "/category/liustry-22?style%5B%5D=модерн",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Флористика",
                "link" => "/category/liustry-22?style%5B%5D=флористика",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Прованс",
                "link" => "/category/liustry-22?style%5B%5D=прованс",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Тиффани",
                "link" => "/category/liustry-22?style%5B%5D=тиффани",
            ],
// Материалы

            [
                "parent" => "Люстры",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Металл",
                "link" => "/category/liustry-22?arm_material%5B%5D=металл",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Алюминий",
                "link" => "/category/liustry-22?arm_material%5B%5D=алюминий",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Пластик",
                "link" => "/category/liustry-22?arm_material%5B%5D=пластик",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Латунь",
                "link" => "/category/liustry-22?arm_material%5B%5D=латунь",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Дерево",
                "link" => "/category/liustry-22?arm_material%5B%5D=дерево",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Стекло",
                "link" => "/category/liustry-22?arm_material%5B%5D=стекло",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Полимер",
                "link" => "/category/liustry-22?arm_material%5B%5D=полимер",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Камень",
                "link" => "/category/liustry-22?arm_material%5B%5D=камень",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Хрусталь",
                "link" => "/category/liustry-22?arm_material%5B%5D=хрусталь",
            ],
//Места применения
            [
                "parent" => "Люстры",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Прихожая",
                "link" => "/category/liustry-22?mesto%5B%5D=прихожая",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Гостиная",
                "link" => "/category/liustry-22?mesto%5B%5D=гостиная",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кафе, рестораны",
                "link" => "/category/liustry-22?mesto%5B%5D=кафе%2C+рестораны",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Спальня",
                "link" => "/category/liustry-22?mesto%5B%5D=спальня",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Детская",
                "link" => "/category/liustry-22?mesto%5B%5D=детская",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Большие залы",
                "link" => "/category/liustry-22?mesto%5B%5D=большие+залы",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кухня",
                "link" => "/category/liustry-22?mesto%5B%5D=кухня",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Офис",
                "link" => "/category/liustry-22?mesto%5B%5D=офис",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кабинет",
                "link" => "/category/liustry-22?mesto%5B%5D=кабинет",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Магазин",
                "link" => "/category/liustry-22?mesto%5B%5D=магазин",
            ],

            [
                "parent" => "Люстры",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Ванная",
                "link" => "/category/liustry-22?mesto%5B%5D=ванная",
            ],

        ];
//КОНЕЦ СТРОКИ ЛЮСТР
//НАЧАЛО СТРОКИ БРА И НАСТЕННОЕ ОСВЕЩЕНИЕ
        DB::table("sub_catalog_menus")->insert($all_punkt);

        $all_punkt = [
            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Бра с выключателем",
                "link" => "/category/bra-s-vykliucatelem-9",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Бра гибкие",
                "link" => "/category/bra-gibkie-10",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Бра с абажуром",
                "link" => "/category/bra-s-abazurom-11",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Бра с подсветкой",
                "link" => "/category/bra-s-podsvetkoi-12",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Бра для чтения",
                "link" => "/category/bra-dlia-cteniia-13",
            ],
//Стили БРА
            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Современный",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?style%5B%5D=современный",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Хай-тек",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?style%5B%5D=хай-тек",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Лофт",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?style%5B%5D=лофт",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Классический",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?style%5B%5D=классический",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Флористика",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?style%5B%5D=флористика",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Кантри",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?style%5B%5D=кантри",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Арт-декор",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?style%5B%5D=арт-деко",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Замковый",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?style%5B%5D=замковый",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Тиффани",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?style%5B%5D=тиффани",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Прованс",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?style%5B%5D=прованс",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Восточный",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?style%5B%5D=восточный",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Модерн",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?style%5B%5D=модерн",
            ],
//МАТЕРИАЛЫ БРА
            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Алюминий",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?arm_material%5B%5D=алюминий",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Металл",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?arm_material%5B%5D=металл",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Дерево",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?arm_material%5B%5D=дерево",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Пластик",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?arm_material%5B%5D=пластик",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Гипс",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?arm_material%5B%5D=гипс",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Бетон",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?arm_material%5B%5D=бетон",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Латунь",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?arm_material%5B%5D=латунь",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Полимер",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?arm_material%5B%5D=полимер",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Стекло",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?arm_material%5B%5D=стекло",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Керамика",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?arm_material%5B%5D=керамика",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Бронза",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?arm_material%5B%5D=бронза",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "камень",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?arm_material%5B%5D=камень",
            ],
//Место применения БРА

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Прихожая",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?mesto%5B%5D=прихожая",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кухня",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?mesto%5B%5D=кухня",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Спальня",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?mesto%5B%5D=спальня",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Офис",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?mesto%5B%5D=офис",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кафе, рестораны",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?mesto%5B%5D=кафе%2C+рестораны",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Экспозиция",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?mesto%5B%5D=экспозиция",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Ванная",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?mesto%5B%5D=ванная",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Детская",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?mesto%5B%5D=детская",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "гостиная",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?mesto%5B%5D=гостиная",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Большие залы",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?mesto%5B%5D=большие+залы",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Магазины",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?mesto%5B%5D=магазин",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Гостиная",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?mesto%5B%5D=Гостиня",
            ],

            [
                "parent" => "Бра и настенное освещение",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кабинет",
                "link" => "/category/bra-i-nastennoe-osveshhenie-7?mesto%5B%5D=кабинет",
            ],

        ];
//КОНЕЦ СТРОКИ БРА
//НАЧАЛО СТРОКИ НАКЛАДНЫЕ СВЕТИЛЬНИКИ
        DB::table("sub_catalog_menus")->insert($all_punkt);

        $all_punkt = [
            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Накладные светильники с пультом",
                "link" => "/category/nakladnye-svetilniki-s-pultom-3101",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Светодиодные накладные светильники",
                "link" => "/category/svetodiodnye-nakladnye-svetilniki-3102",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Накладные светильники для натяжного потолка",
                "link" => "/category/nakladnye-svetilniki-dlia-natiaznogo-potolka-3103",
            ],
//СТИЛИ НАКЛАДНЫЕ СВЕТИЛЬНИКИ
            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Хай-тек",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?style%5B%5D=хай-тек",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Современный",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?style%5B%5D=современный",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Классический",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?style%5B%5D=классический",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Арт-декор",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?style%5B%5D=арт-деко",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Лофт",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?style%5B%5D=лофт",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Флористика",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?style%5B%5D=флористика",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Кантри",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?style%5B%5D=кантри",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Прованс",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?style%5B%5D=прованс",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Восточный",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?style%5B%5D=восточный",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Модерн",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?style%5B%5D=модерн",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Замковый",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?style%5B%5D=замковый",
            ],
//МАТЕРИАЛЫ НАКЛАДНЫЕ СВЕТИЛЬНИКИ
            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Пластик",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?arm_material%5B%5D=пластик",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Алюминий",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?arm_material%5B%5D=алюминий",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Металл",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?arm_material%5B%5D=металл",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Латунь",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?arm_material%5B%5D=латунь",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Дерево",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?arm_material%5B%5D=дерево",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Полимер",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?arm_material%5B%5D=полимер",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Гипс",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?arm_material%5B%5D=гипс",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Бетон",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?arm_material%5B%5D=бетон",
            ],
//МЕСТО ПРИМЕНЕНИЯ НАКЛАДНЫЕ СВЕТИЛЬНИКИ
            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кухня",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?mesto%5B%5D=кухня",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Прихожая",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?mesto%5B%5D=прихожая",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Ванная",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?mesto%5B%5D=ванная",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Спальня",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?mesto%5B%5D=спальня",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Офис",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?mesto%5B%5D=офис",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Магазин",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?mesto%5B%5D=магазин",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Гостиная",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?mesto%5B%5D=гостиная",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кафе, рестораны",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?mesto%5B%5D=кафе%2C+рестораны",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кабинет",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?mesto%5B%5D=кабинет",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Большие залы",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?mesto%5B%5D=большие+залы",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Экспозиция",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?mesto%5B%5D=экспозиция",
            ],

            [
                "parent" => "Накладные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Детская",
                "link" => "/category/nakladnye-potolocnye-svetilniki-31?mesto%5B%5D=детская",
            ],

        ];
//КОНЕЦ СТРОКИ НАКЛАДНЫЕ СВЕТИЛЬНИКИ
//НАЧАЛО СТРОКИ ПОДВЕСНЫЕ СВЕТИЛЬНИКИ

        DB::table("sub_catalog_menus")->insert($all_punkt);

        $all_punkt = [
            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Светодиодные подвесные светильники",
                "link" => "/category/svetodiodnye-podvesnye-svetilniki-3201",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Подвесные светильники с абажуром",
                "link" => "/category/podvesnye-svetilniki-s-abazurom-3202",
            ],
//СТИЛИ ПОДВЕСНЫЕ СВЕТИЛЬНИКИ
            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Арт-декор",
                "link" => "/category/podvesnye-svetilniki-32?style%5B%5D=арт-деко",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Современный",
                "link" => "/category/podvesnye-svetilniki-32?style%5B%5D=современный",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Лофт",
                "link" => "/category/podvesnye-svetilniki-32?style%5B%5D=лофт",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Хай-тек",
                "link" => "/category/podvesnye-svetilniki-32?style%5B%5D=хай-тек",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Прованс",
                "link" => "/category/podvesnye-svetilniki-32?style%5B%5D=прованс",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Кантри",
                "link" => "/category/podvesnye-svetilniki-32?style%5B%5D=кантри",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Восточный",
                "link" => "/category/podvesnye-svetilniki-32?style%5B%5D=восточный",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Замковый",
                "link" => "/category/podvesnye-svetilniki-32?style%5B%5D=замковый",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Классический",
                "link" => "/category/podvesnye-svetilniki-32?style%5B%5D=классический",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Флористика",
                "link" => "/category/podvesnye-svetilniki-32?style%5B%5D=флористика",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Тиффани",
                "link" => "/category/podvesnye-svetilniki-32?style%5B%5D=тиффани",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Модерн",
                "link" => "/category/podvesnye-svetilniki-32?style%5B%5D=модерн",
            ],
//МАТЕРИАЛЫ
            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Металл",
                "link" => "/category/podvesnye-svetilniki-32?arm_material%5B%5D=металл",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Пластик",
                "link" => "/category/podvesnye-svetilniki-32?arm_material%5B%5D=пластик",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Алюминий",
                "link" => "/category/podvesnye-svetilniki-32?arm_material%5B%5D=алюминий",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Дерево",
                "link" => "/category/podvesnye-svetilniki-32?arm_material%5B%5D=дерево",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Латунь",
                "link" => "/category/podvesnye-svetilniki-32?arm_material%5B%5D=латунь",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Полимер",
                "link" => "/category/podvesnye-svetilniki-32?arm_material%5B%5D=полимер",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Бетон",
                "link" => "/category/podvesnye-svetilniki-32?arm_material%5B%5D=бетон",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Гипс",
                "link" => "/category/podvesnye-svetilniki-32?arm_material%5B%5D=гипс",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Камень",
                "link" => "/category/podvesnye-svetilniki-32?arm_material%5B%5D=камень",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Стекло",
                "link" => "/category/podvesnye-svetilniki-32?arm_material%5B%5D=стекло",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Керамика",
                "link" => "/category/podvesnye-svetilniki-32?arm_material%5B%5D=керамика",
            ],
//Место применения
            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Спальня",
                "link" => "/category/podvesnye-svetilniki-32?mesto%5B%5D=спальня",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кафе, рестораны",
                "link" => "/category/podvesnye-svetilniki-32?mesto%5B%5D=кафе%2C+рестораны",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Прихожая",
                "link" => "/category/podvesnye-svetilniki-32?mesto%5B%5D=прихожая",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кухня",
                "link" => "/category/podvesnye-svetilniki-32?mesto%5B%5D=кухня",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Гостиная",
                "link" => "/category/podvesnye-svetilniki-32?mesto%5B%5D=гостиная",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Магазин",
                "link" => "/category/podvesnye-svetilniki-32?mesto%5B%5D=магазин",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Большие залы",
                "link" => "/category/podvesnye-svetilniki-32?mesto%5B%5D=большие+залы",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Офис",
                "link" => "/category/podvesnye-svetilniki-32?mesto%5B%5D=офис",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кабинет",
                "link" => "/category/podvesnye-svetilniki-32?mesto%5B%5D=кабинет",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Экспозиция",
                "link" => "/category/podvesnye-svetilniki-32?mesto%5B%5D=экспозиция",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Детская",
                "link" => "/category/podvesnye-svetilniki-32?mesto%5B%5D=детская",
            ],

            [
                "parent" => "Подвесные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Ванная",
                "link" => "/category/podvesnye-svetilniki-32?mesto%5B%5D=ванная",
            ],
        ];
//КОНЕЦ СТРОКИ ПОДВЕСНЫЕ СВЕТИЛЬНИКИ
//НАЧАЛО СТРОКИ Реечные, линейные светильники


        DB::table("sub_catalog_menus")->insert($all_punkt);

        $all_punkt = [
            [
                "parent" => "Реечные, линейные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Накладные светильники с пультом",
                "link" => "/category/nakladnye-svetilniki-s-pultom-3101",
            ],
//СТИЛИ РЕЕЧНЫЕ, ЛИНЕЙНЫЕ СВЕТИЛЬНИКИ

            [
                "parent" => "Реечные, линейные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Хай-тек",
                "link" => "/category/reecnye-lineinye-svetilniki-33?style%5B%5D=хай-тек",
            ],

            [
                "parent" => "Реечные, линейные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Современный",
                "link" => "/category/reecnye-lineinye-svetilniki-33?style%5B%5D=современный",
            ],

            [
                "parent" => "Реечные, линейные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Лофт",
                "link" => "/category/reecnye-lineinye-svetilniki-33?style%5B%5D=лофт",
            ],

            [
                "parent" => "Реечные, линейные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Кантри",
                "link" => "/category/reecnye-lineinye-svetilniki-33?style%5B%5D=кантри",
            ],
//МАТЕРИАЛЫ
            [
                "parent" => "Реечные, линейные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Металл",
                "link" => "/category/reecnye-lineinye-svetilniki-33?arm_material%5B%5D=металл",
            ],

            [
                "parent" => "Реечные, линейные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Алюминий",
                "link" => "/category/reecnye-lineinye-svetilniki-33?arm_material%5B%5D=алюминий",
            ],

            [
                "parent" => "Реечные, линейные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Дерево",
                "link" => "/category/reecnye-lineinye-svetilniki-33?arm_material%5B%5D=дерево",
            ],
//Место применения
            [
                "parent" => "Реечные, линейные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Офис",
                "link" => "/category/reecnye-lineinye-svetilniki-33?mesto%5B%5D=офис",
            ],

            [
                "parent" => "Реечные, линейные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кафе, рестораны",
                "link" => "/category/reecnye-lineinye-svetilniki-33?mesto%5B%5D=кафе%2C+рестораны",
            ],

            [
                "parent" => "Реечные, линейные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Гостиная",
                "link" => "/category/reecnye-lineinye-svetilniki-33?mesto%5B%5D=гостиная",
            ],

            [
                "parent" => "Реечные, линейные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кухня",
                "link" => "/category/reecnye-lineinye-svetilniki-33?mesto%5B%5D=кухня",
            ],

            [
                "parent" => "Реечные, линейные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Прихожая",
                "link" => "/category/reecnye-lineinye-svetilniki-33?mesto%5B%5D=прихожая",
            ],

            [
                "parent" => "Реечные, линейные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Магазин",
                "link" => "/category/reecnye-lineinye-svetilniki-33?mesto%5B%5D=магазин",
            ],

            [
                "parent" => "Реечные, линейные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Большие залы",
                "link" => "/category/reecnye-lineinye-svetilniki-33?mesto%5B%5D=большие+залы",
            ],
        ];
//КОНЕЦ СТРОКИ Реечные, линейные светильники
//НАЧАЛО СТРОКИ Точечные светильники

        DB::table("sub_catalog_menus")->insert($all_punkt);

        $all_punkt = [
            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Влагозащищенные точечные светильники",
                "link" => "/category/vlagozashhishhennye-tocecnye-svetilniki-65",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Встраиваемые точечные светильники",
                "link" => "/category/vstraivaemye-tocecnye-svetilniki-66",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Накладные точечные светильники",
                "link" => "/category/nakladnye-tocecnye-svetilniki-67",
            ],
//СТИЛИ ТОЧЕЧНЫЕ СВЕТИЛЬНИКИ

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Современный",
                "link" => "/category/tocecnye-svetilniki-64?style%5B%5D=современный",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Хай-тек",
                "link" => "/category/tocecnye-svetilniki-64?style%5B%5D=хай-тек",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Классический",
                "link" => "/category/tocecnye-svetilniki-64?style%5B%5D=классический",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Лофт",
                "link" => "/category/tocecnye-svetilniki-64?style%5B%5D=лофт",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Флористика",
                "link" => "/category/tocecnye-svetilniki-64?style%5B%5D=флористика",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Арт-декор",
                "link" => "/category/tocecnye-svetilniki-64?style%5B%5D=арт-деко",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Кантри",
                "link" => "/category/tocecnye-svetilniki-64?style%5B%5D=кантри",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Прованс",
                "link" => "/category/tocecnye-svetilniki-64?style%5B%5D=прованс",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Замковый",
                "link" => "/category/tocecnye-svetilniki-64?style%5B%5D=замковый",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Восточный",
                "link" => "/category/tocecnye-svetilniki-64?style%5B%5D=восточный",
            ],
//МАТЕРИАЛЫ ТОЧЕЧНЫЕ СВЕТИЛЬНИКИ
            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Алюминий",
                "link" => "/category/tocecnye-svetilniki-64?arm_material%5B%5D=алюминий",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Металл",
                "link" => "/category/tocecnye-svetilniki-64?arm_material%5B%5D=металл",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Гипс",
                "link" => "/category/tocecnye-svetilniki-64?arm_material%5B%5D=гипс",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Латунь",
                "link" => "/category/tocecnye-svetilniki-64?arm_material%5B%5D=латунь",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Полимер",
                "link" => "/category/tocecnye-svetilniki-64?arm_material%5B%5D=полимер",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Пластик",
                "link" => "/category/tocecnye-svetilniki-64?arm_material%5B%5D=пластик",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Бетон",
                "link" => "/category/tocecnye-svetilniki-64?arm_material%5B%5D=бетон",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Бронза",
                "link" => "/category/tocecnye-svetilniki-64?arm_material%5B%5D=бронза",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Дерево",
                "link" => "/category/tocecnye-svetilniki-64?arm_material%5B%5D=дерево",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Керамика",
                "link" => "/category/tocecnye-svetilniki-64?arm_material%5B%5D=керамика",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Камень",
                "link" => "/category/tocecnye-svetilniki-64?arm_material%5B%5D=камень",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Стекло",
                "link" => "/category/tocecnye-svetilniki-64?arm_material%5B%5D=стекло",
            ],
//МЕСТО ПРИМЕНЕНИЯ ТОЧЕЧНЫЕ СВЕТИЛЬНИКИ
            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Ванная",
                "link" => "/category/tocecnye-svetilniki-64?mesto%5B%5D=ванная",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кафе, рестораны",
                "link" => "/category/tocecnye-svetilniki-64?mesto%5B%5D=кафе%2C+рестораны",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Прихожая",
                "link" => "/category/tocecnye-svetilniki-64?mesto%5B%5D=прихожая",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Спальня",
                "link" => "/category/tocecnye-svetilniki-64?mesto%5B%5D=спальня",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Магазин",
                "link" => "/category/tocecnye-svetilniki-64?mesto%5B%5D=магазин",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кухня",
                "link" => "/category/tocecnye-svetilniki-64?mesto%5B%5D=кухня",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Гостиная",
                "link" => "/category/tocecnye-svetilniki-64?mesto%5B%5D=гостиная",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Офис",
                "link" => "/category/tocecnye-svetilniki-64?mesto%5B%5D=офис",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Большие залы",
                "link" => "/category/tocecnye-svetilniki-64?mesto%5B%5D=большие+залы",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Экспозиция",
                "link" => "/category/tocecnye-svetilniki-64?mesto%5B%5D=экспозиция",
            ],

            [
                "parent" => "Точечные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кабинет",
                "link" => "/category/tocecnye-svetilniki-64?mesto%5B%5D=кабинет",
            ],
        ];
//КОНЕЦ СТРОКИ ТОЧЕЧНЫЕ СВЕТИЛЬНИКИ
//НАЧАЛО СТРОКИ Настольные лампы

        DB::table("sub_catalog_menus")->insert($all_punkt);

        $all_punkt = [
            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Настольные лампы c абажуром",
                "link" => "/category/nastolnye-lampy-c-abazurom-16",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Светодиодные настольные лампы",
                "link" => "/category/svetodiodnye-nastolnye-lampy-17",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Настольные лампы на струбцине",
                "link" => "/category/nastolnye-lampy-na-strubcine-18",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Настольные лампы для спальни",
                "link" => "/category/nastolnye-lampy-dlia-spalni-19",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Дизайнерские настольные лампы",
                "link" => "/category/dizainerskie-nastolnye-lampy-20",
            ],
//СТИЛИ ДЛЯ НАСТОЛЬНЫЕ ЛАМПЫ

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Современный",
                "link" => "/category/nastolnye-lampy-15?style%5B%5D=современный",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Классический",
                "link" => "/category/nastolnye-lampy-15?style%5B%5D=классический",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Хай-тек",
                "link" => "/category/nastolnye-lampy-15?style%5B%5D=хай-тек",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Лофт",
                "link" => "/category/nastolnye-lampy-15?style%5B%5D=лофт",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Кантри",
                "link" => "/category/nastolnye-lampy-15?style%5B%5D=кантри",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Восточный",
                "link" => "/category/nastolnye-lampy-15?style%5B%5D=восточный",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Арт-декор",
                "link" => "/category/nastolnye-lampy-15?style%5B%5D=арт-деко",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Прованс",
                "link" => "/category/nastolnye-lampy-15?style%5B%5D=прованс",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Тиффани",
                "link" => "/category/nastolnye-lampy-15?style%5B%5D=тиффани",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Флористика",
                "link" => "/category/nastolnye-lampy-15?style%5B%5D=флористика",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Замковый",
                "link" => "/category/nastolnye-lampy-15?style%5B%5D=замковый",
            ],
//МАТЕРИАЛЫ Настольные лампы
            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Керамика",
                "link" => "/category/nastolnye-lampy-15?arm_material%5B%5D=керамика",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Металл",
                "link" => "/category/nastolnye-lampy-15?arm_material%5B%5D=металл",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Дерево",
                "link" => "/category/nastolnye-lampy-15?arm_material%5B%5D=дерево",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Пластик",
                "link" => "/category/nastolnye-lampy-15?arm_material%5B%5D=пластик",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Бетон",
                "link" => "/category/nastolnye-lampy-15?arm_material%5B%5D=бетон",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Камень",
                "link" => "/category/nastolnye-lampy-15?arm_material%5B%5D=камень",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Латунь",
                "link" => "/category/nastolnye-lampy-15?arm_material%5B%5D=латунь",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Стекло",
                "link" => "/category/nastolnye-lampy-15?arm_material%5B%5D=стекло",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Алюминий",
                "link" => "/category/nastolnye-lampy-15?arm_material%5B%5D=алюминий",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Полимер",
                "link" => "/category/nastolnye-lampy-15?arm_material%5B%5D=полимер",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Ткань",
                "link" => "/category/nastolnye-lampy-15?arm_material%5B%5D=ткань",
            ],
//Место применения Настольные лампы

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Спальня",
                "link" => "/category/nastolnye-lampy-15?mesto%5B%5D=спальня",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Офис",
                "link" => "/category/nastolnye-lampy-15?mesto%5B%5D=офис",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Гостиная",
                "link" => "/category/nastolnye-lampy-15?mesto%5B%5D=гостиная",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кухня",
                "link" => "/category/nastolnye-lampy-15?mesto%5B%5D=кухня",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Прихожая",
                "link" => "/category/nastolnye-lampy-15?mesto%5B%5D=прихожая",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Большие залы",
                "link" => "/category/nastolnye-lampy-15?mesto%5B%5D=большие+залы",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кабинет",
                "link" => "/category/nastolnye-lampy-15?mesto%5B%5D=кабинет",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кафе, рестораны",
                "link" => "/category/nastolnye-lampy-15?mesto%5B%5D=кафе%2C+рестораны",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Детская",
                "link" => "/category/nastolnye-lampy-15?mesto%5B%5D=детская",
            ],

            [
                "parent" => "Настольные лампы",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Экспозиция",
                "link" => "/category/nastolnye-lampy-15?mesto%5B%5D=экспозиция",
            ],
        ];
//КОНЕЦ СТРОКИ НАСТОЛЬНЫЕ ЛАМПЫ
//НАЧАЛО СТРОКИ Торшеры и напольные светильники

        DB::table("sub_catalog_menus")->insert($all_punkt);

        $all_punkt = [
            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Торшеры с абажуром",
                "link" => "/category/torsery-s-abazurom-60",
            ],

            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Светодиодные",
                "link" => "/category/svetodiodnye-61",
            ],

            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Торшеры со столиком",
                "link" => "/category/torsery-so-stolikom-62",
            ],

            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Торшеры и напольные светильники",
                "link" => "/category/torsery-i-napolnye-svetilniki-59",
            ],
//СТИЛИ ДЛЯ ТОРШЕРЫ И НАПОЛЬНЫЕ СВЕТИЛЬНИКИ

            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Хай-тек",
                "link" => "/category/torsery-i-napolnye-svetilniki-59?style%5B%5D=хай-тек",
            ],

            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Современный",
                "link" => "/category/torsery-i-napolnye-svetilniki-59?style%5B%5D=современный",
            ],

            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Кантри",
                "link" => "/category/torsery-i-napolnye-svetilniki-59?style%5B%5D=кантри",
            ],

            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Классический",
                "link" => "/category/torsery-i-napolnye-svetilniki-59?style%5B%5D=классический",
            ],

            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Арт-декор",
                "link" => "/category/torsery-i-napolnye-svetilniki-59?style%5B%5D=арт-деко",
            ],

            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Лофт",
                "link" => "/category/torsery-i-napolnye-svetilniki-59?style%5B%5D=лофт",
            ],

            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Восточный",
                "link" => "/category/torsery-i-napolnye-svetilniki-59?style%5B%5D=восточный",
            ],

            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Флористика",
                "link" => "/category/torsery-i-napolnye-svetilniki-59?style%5B%5D=флористика",
            ],

            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Прованс",
                "link" => "/category/torsery-i-napolnye-svetilniki-59?style%5B%5D=прованс",
            ],

            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Модерн",
                "link" => "/category/torsery-i-napolnye-svetilniki-59?style%5B%5D=модерн",
            ],
//МАТЕРИАЛЫ ТОРШЕРЫ И НАПОЛЬНЫЕ СВЕТИЛЬНИКИ
            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Металл",
                "link" => "/category/torsery-i-napolnye-svetilniki-59?arm_material%5B%5D=металл",
            ],

            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Дерево",
                "link" => "/category/torsery-i-napolnye-svetilniki-59?arm_material%5B%5D=дерево",
            ],

            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Латунь",
                "link" => "/category/torsery-i-napolnye-svetilniki-59?arm_material%5B%5D=латунь",
            ],

            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Алюминий",
                "link" => "/category/torsery-i-napolnye-svetilniki-59?arm_material%5B%5D=алюминий",
            ],

            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Пластик",
                "link" => "/category/torsery-i-napolnye-svetilniki-59?arm_material%5B%5D=пластик",
            ],
//МЕСТО ПРИМЕНЕНИЯ ТОРШЕРЫ И НАПОЛЬНЫЕ СВЕТИЛЬНИКИ
            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Спальня",
                "link" => "/category/torsery-i-napolnye-svetilniki-59?mesto%5B%5D=спальня",
            ],

            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Офис",
                "link" => "/category/torsery-i-napolnye-svetilniki-59?mesto%5B%5D=офис",
            ],

            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Гостиная",
                "link" => "/category/torsery-i-napolnye-svetilniki-59?mesto%5B%5D=гостиная",
            ],

            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Прихожая",
                "link" => "/category/torsery-i-napolnye-svetilniki-59?mesto%5B%5D=прихожая",
            ],

            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кафе, рестораны",
                "link" => "/category/torsery-i-napolnye-svetilniki-59?mesto%5B%5D=кафе%2C+рестораны",
            ],

            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Большие залы",
                "link" => "/category/torsery-i-napolnye-svetilniki-59?mesto%5B%5D=большие+залы",
            ],

            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кабинет",
                "link" => "/category/torsery-i-napolnye-svetilniki-59?mesto%5B%5D=кабинет",
            ],

            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кухня",
                "link" => "/category/torsery-i-napolnye-svetilniki-59?mesto%5B%5D=кухня",
            ],

            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Детская",
                "link" => "/category/torsery-i-napolnye-svetilniki-59?mesto%5B%5D=детская",
            ],

            [
                "parent" => "Торшеры и напольные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Экспозиция",
                "link" => "/category/torsery-i-napolnye-svetilniki-59?mesto%5B%5D=экспозиция",
            ],
        ];
//КОНЕЦ СТРОКИ ТОРШЕРЫ И НАПОЛЬНЫЕ СВЕТИЛЬНИКИ
//НАЧАЛО СТРОКИ Споты

        DB::table("sub_catalog_menus")->insert($all_punkt);

        $all_punkt = [
            [
                "parent" => "Споты",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Встраиваемые споты",
                "link" => "/category/vstraivaemye-spoty-55",
            ],

            [
                "parent" => "Споты",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Светодиодные споты",
                "link" => "/category/svetodiodnye-spoty-56",
            ],

            [
                "parent" => "Споты",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Споты на штанге",
                "link" => "/category/spoty-na-stange-57",
            ],

            [
                "parent" => "Споты",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Споты с выключателем",
                "link" => "/category/spoty-s-vykliucatelem-58",
            ],
//СТИЛИ СПОТЫ
            [
                "parent" => "Споты",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Хай-тек",
                "link" => "/category/spoty-54?style%5B%5D=хай-тек",
            ],

            [
                "parent" => "Споты",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Лофт",
                "link" => "/category/spoty-54?style%5B%5D=лофт",
            ],

            [
                "parent" => "Споты",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Флористика",
                "link" => "/category/spoty-54?style%5B%5D=флористика",
            ],

            [
                "parent" => "Споты",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Современный",
                "link" => "/category/spoty-54?style%5B%5D=современный",
            ],

            [
                "parent" => "Споты",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Кантри",
                "link" => "/category/spoty-54?style%5B%5D=кантри",
            ],

            [
                "parent" => "Споты",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Прованс",
                "link" => "/category/spoty-54?style%5B%5D=прованс",
            ],

            [
                "parent" => "Споты",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Классический",
                "link" => "/category/spoty-54?style%5B%5D=классический",
            ],

            [
                "parent" => "Споты",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Восточный",
                "link" => "/category/spoty-54?style%5B%5D=восточный",
            ],

            [
                "parent" => "Споты",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Замковый",
                "link" => "/category/spoty-54?style%5B%5D=замковый",
            ],

            [
                "parent" => "Споты",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Арт-декор",
                "link" => "/category/spoty-54?style%5B%5D=арт-деко",
            ],
//МАТЕРИАЛЫ СПОТЫ
            [
                "parent" => "Споты",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Металл",
                "link" => "/category/spoty-54?arm_material%5B%5D=металл",
            ],

            [
                "parent" => "Споты",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Алюминий",
                "link" => "/category/spoty-54?arm_material%5B%5D=алюминий",
            ],

            [
                "parent" => "Споты",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Дерево",
                "link" => "/category/spoty-54?arm_material%5B%5D=дерево",
            ],
//МЕСТО ПРИМЕНЕНИЯ СПОТЫ
            [
                "parent" => "Споты",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Экспозиция",
                "link" => "/category/spoty-54?mesto%5B%5D=экспозиция",
            ],

            [
                "parent" => "Споты",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кафе, рестораны",
                "link" => "/category/spoty-54?mesto%5B%5D=кафе%2C+рестораны",
            ],

            [
                "parent" => "Споты",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Гостиная",
                "link" => "/category/spoty-54?mesto%5B%5D=гостиная",
            ],

            [
                "parent" => "Споты",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Магазин",
                "link" => "/category/spoty-54?mesto%5B%5D=магазин",
            ],

            [
                "parent" => "Споты",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Ванная",
                "link" => "/category/spoty-54?mesto%5B%5D=ванная",
            ],

            [
                "parent" => "Споты",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кухня",
                "link" => "/category/spoty-54?mesto%5B%5D=кухня",
            ],

            [
                "parent" => "Споты",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Спальня",
                "link" => "/category/spoty-54?mesto%5B%5D=спальня",
            ],

            [
                "parent" => "Споты",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Офис",
                "link" => "/category/spoty-54?mesto%5B%5D=офис",
            ],

            [
                "parent" => "Споты",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Прихожая",
                "link" => "/category/spoty-54?mesto%5B%5D=прихожая",
            ],

            [
                "parent" => "Споты",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Детская",
                "link" => "/category/spoty-54?mesto%5B%5D=детская",
            ],

            [
                "parent" => "Споты",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Большие залы",
                "link" => "/category/spoty-54?mesto%5B%5D=большие+залы",
            ],

            [
                "parent" => "Споты",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кабинет",
                "link" => "/category/spoty-54?mesto%5B%5D=кабинет",
            ],
        ];
//КОНЕЦ СТРОКИ СПОТЫ
//НАЧАЛО СТРОКИ Шинные и струнные системы

        DB::table("sub_catalog_menus")->insert($all_punkt);

        $all_punkt = [
            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Комплектующие",
                "link" => "/category/komplektuiushhie-70",
            ],

            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Трековые светильники",
                "link" => "/category/trekovye-svetilniki-71",
            ],

            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Готовые решения",
                "link" => "/category/gotovye-reseniia-72",
            ],

            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Шинопроводы",
                "link" => "/category/sinoprovody-73",
            ],

            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Комплектующие для трековых светильников",
                "link" => "/category/komplektuiushhie-dlia-trekovyx-svetilnikov-74",
            ],

            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Комплектующие для шинопроводов",
                "link" => "/category/komplektuiushhie-dlia-sinoprovodov-75",
            ],

            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Драйверы для шинопроводов",
                "link" => "/category/draivery-dlia-sinoprovodov-76",
            ],

            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Диммеры для шинопроводов",
                "link" => "/category/dimmery-dlia-sinoprovodov-78",
            ],

            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Датчики движения для шинопроводов",
                "link" => "/category/datciki-dvizeniia-dlia-sinoprovodov-79",
            ],

            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Струнные светильники",
                "link" => "/category/strunnye-svetilniki-80",
            ],

            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Струнные шинопроводы",
                "link" => "/category/strunnye-sinoprovody-81",
            ],
//СТИЛИ Шинные и струнные системы
            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Современный",
                "link" => "/category/sinnye-i-strunnye-sistemy-68?style%5B%5D=современный",
            ],

            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Лофт",
                "link" => "/category/sinnye-i-strunnye-sistemy-68?style%5B%5D=лофт",
            ],

            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Флористика",
                "link" => "/category/sinnye-i-strunnye-sistemy-68?style%5B%5D=флористика",
            ],

            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Хай-тек",
                "link" => "/category/sinnye-i-strunnye-sistemy-68?style%5B%5D=хай-тек",
            ],

            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Классический",
                "link" => "/category/sinnye-i-strunnye-sistemy-68?style%5B%5D=классический",
            ],
//МАТЕРИАЛЫ ШИННЫЕ И СТРУННЫЕ СИСТЕМЫ
            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Металл",
                "link" => "/category/sinnye-i-strunnye-sistemy-68?arm_material%5B%5D=металл",
            ],

            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Алюминий",
                "link" => "/category/sinnye-i-strunnye-sistemy-68?arm_material%5B%5D=алюминий",
            ],

            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Пластик",
                "link" => "/category/sinnye-i-strunnye-sistemy-68?arm_material%5B%5D=пластик",
            ],

            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Латунь",
                "link" => "/category/sinnye-i-strunnye-sistemy-68?arm_material%5B%5D=латунь",
            ],

            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Полимер",
                "link" => "/category/sinnye-i-strunnye-sistemy-68?arm_material%5B%5D=полимер",
            ],
//МЕСТО ПРИМЕНЕНИЯ ШИННЫЕ И СТРУННЫЕ СИСТЕМЫ
            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Магазин",
                "link" => "/category/sinnye-i-strunnye-sistemy-68?mesto%5B%5D=магазин",
            ],

            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Спальня",
                "link" => "/category/sinnye-i-strunnye-sistemy-68?mesto%5B%5D=спальня",
            ],

            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кухня",
                "link" => "/category/sinnye-i-strunnye-sistemy-68?mesto%5B%5D=кухня",
            ],

            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кафе, рестораны",
                "link" => "/category/sinnye-i-strunnye-sistemy-68?mesto%5B%5D=кафе%2C+рестораны",
            ],

            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Экспозиция",
                "link" => "/category/sinnye-i-strunnye-sistemy-68?mesto%5B%5D=экспозиция",
            ],

            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Гостиная",
                "link" => "/category/sinnye-i-strunnye-sistemy-68?mesto%5B%5D=гостиная",
            ],

            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Прихожая",
                "link" => "/category/sinnye-i-strunnye-sistemy-68?mesto%5B%5D=прихожая",
            ],

            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Офис",
                "link" => "/category/sinnye-i-strunnye-sistemy-68?mesto%5B%5D=офис",
            ],

            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Большие залы",
                "link" => "/category/sinnye-i-strunnye-sistemy-68?mesto%5B%5D=большие+залы",
            ],

            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Детская",
                "link" => "/category/sinnye-i-strunnye-sistemy-68?mesto%5B%5D=детская",
            ],

            [
                "parent" => "Шинные и струнные системы",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Ванная",
                "link" => "/category/sinnye-i-strunnye-sistemy-68?mesto%5B%5D=ванная",
            ],
        ];
//КОНЕЦ СТРОКИ Шинные и струнные системы
//НАЧАЛО СТРОКИ Светильники для подсветки

        DB::table("sub_catalog_menus")->insert($all_punkt);

        $all_punkt = [
            [
                "parent" => "Светильники для подсветки",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Светильники для картин и зеркал",
                "link" => "/category/svetilniki-dlia-kartin-i-zerkal-2",
            ],

            [
                "parent" => "Светильники для подсветки",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Мебельные светильники",
                "link" => "/category/mebelnye-svetilniki-3",
            ],

            [
                "parent" => "Светильники для подсветки",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Ночники",
                "link" => "/category/nocniki-4",
            ],

            [
                "parent" => "Светильники для подсветки",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Подсветка стен и ступеней",
                "link" => "/category/podsvetka-sten-i-stupenei-5",
            ],
//СТИЛИ Светильники для подсветки
            [
                "parent" => "Светильники для подсветки",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Современный",
                "link" => "/category/svetilniki-dlia-podsvetki-1?style%5B%5D=современный",
            ],

            [
                "parent" => "Светильники для подсветки",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Хай-тек",
                "link" => "/category/svetilniki-dlia-podsvetki-1?style%5B%5D=хай-тек",
            ],

            [
                "parent" => "Светильники для подсветки",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Классический",
                "link" => "/category/svetilniki-dlia-podsvetki-1?style%5B%5D=классический",
            ],

            [
                "parent" => "Светильники для подсветки",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Эклектика",
                "link" => "/category/svetilniki-dlia-podsvetki-1?style%5B%5D=эклектика",
            ],

            [
                "parent" => "Светильники для подсветки",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Прованс",
                "link" => "/category/svetilniki-dlia-podsvetki-1?style%5B%5D=прованс",
            ],

            [
                "parent" => "Светильники для подсветки",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Лофт",
                "link" => "/category/svetilniki-dlia-podsvetki-1?style%5B%5D=лофт",
            ],

            [
                "parent" => "Светильники для подсветки",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Арт-декор",
                "link" => "/category/svetilniki-dlia-podsvetki-1?style%5B%5D=арт-деко",
            ],
// МАТЕРИАЛЫ СВЕТИЛЬНИКИ ДЛЯ ПОДСВЕТКИ
            [
                "parent" => "Светильники для подсветки",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Металл",
                "link" => "/category/svetilniki-dlia-podsvetki-1?arm_material%5B%5D=металл",
            ],

            [
                "parent" => "Светильники для подсветки",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Алюминий",
                "link" => "/category/svetilniki-dlia-podsvetki-1?arm_material%5B%5D=алюминий",
            ],

            [
                "parent" => "Светильники для подсветки",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Латунь",
                "link" => "/category/svetilniki-dlia-podsvetki-1?arm_material%5B%5D=латунь",
            ],

            [
                "parent" => "Светильники для подсветки",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Пластик",
                "link" => "/category/svetilniki-dlia-podsvetki-1?arm_material%5B%5D=пластик",
            ],

            [
                "parent" => "Светильники для подсветки",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Бронза",
                "link" => "/category/svetilniki-dlia-podsvetki-1?arm_material%5B%5D=бронза",
            ],

            [
                "parent" => "Светильники для подсветки",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Гипс",
                "link" => "/category/svetilniki-dlia-podsvetki-1?arm_material%5B%5D=гипс",
            ],
//МЕСТО ПРИМЕНЕНИЯ СВЕТИЛЬНИКИ ДЛЯ ПОДСВЕТКИ
            [
                "parent" => "Светильники для подсветки",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Экспозиция",
                "link" => "/category/svetilniki-dlia-podsvetki-1?mesto%5B%5D=экспозиция",
            ],

            [
                "parent" => "Светильники для подсветки",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Гостиная",
                "link" => "/category/svetilniki-dlia-podsvetki-1?mesto%5B%5D=гостиная",
            ],

            [
                "parent" => "Светильники для подсветки",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Ванная",
                "link" => "/category/svetilniki-dlia-podsvetki-1?mesto%5B%5D=ванная",
            ],

            [
                "parent" => "Светильники для подсветки",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Прихожая",
                "link" => "/category/svetilniki-dlia-podsvetki-1?mesto%5B%5D=прихожая",
            ],

            [
                "parent" => "Светильники для подсветки",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Спальня",
                "link" => "/category/svetilniki-dlia-podsvetki-1?mesto%5B%5D=спальня",
            ],

            [
                "parent" => "Светильники для подсветки",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Офис",
                "link" => "/category/svetilniki-dlia-podsvetki-1?mesto%5B%5D=офис",
            ],

            [
                "parent" => "Светильники для подсветки",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кухня",
                "link" => "/category/svetilniki-dlia-podsvetki-1?mesto%5B%5D=кухня",
            ],

            [
                "parent" => "Светильники для подсветки",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Магазин",
                "link" => "/category/svetilniki-dlia-podsvetki-1?mesto%5B%5D=магазин",
            ],

            [
                "parent" => "Светильники для подсветки",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кафе, рестораны",
                "link" => "/category/svetilniki-dlia-podsvetki-1?mesto%5B%5D=кафе%2C+рестораны",
            ],
        ];
//КОНЕЦ СТРОКИ Светильники для подсветки
//НАЧАЛО СТРОКИ Светодиодные ленты и профили

        DB::table("sub_catalog_menus")->insert($all_punkt);

        $all_punkt = [
            [
                "parent" => "Светодиодные ленты и профили",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Ленты светодиодные",
                "link" => "/category/lenty-svetodiodnye-44",
            ],

            [
                "parent" => "Светодиодные ленты и профили",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Драйверы для светодиодных лент",
                "link" => "/category/draivery-dlia-svetodiodnyx-lent-45",
            ],

            [
                "parent" => "Светодиодные ленты и профили",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Усилители для светодиодных лент",
                "link" => "/category/usiliteli-dlia-svetodiodnyx-lent-46",
            ],

            [
                "parent" => "Светодиодные ленты и профили",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Контроллеры для светодиодных лент",
                "link" => "/category/kontrollery-dlia-svetodiodnyx-lent-47",
            ],

            [
                "parent" => "Светодиодные ленты и профили",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Блоки питания для светодиодных лент",
                "link" => "/category/bloki-pitaniia-dlia-svetodiodnyx-lent-48",
            ],

            [
                "parent" => "Светодиодные ленты и профили",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Экраны для светодиодных лент",
                "link" => "/category/ekrany-dlia-svetodiodnyx-lent-49",
            ],

            [
                "parent" => "Светодиодные ленты и профили",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Профили для светодиодных лент",
                "link" => "/category/profili-dlia-svetodiodnyx-lent-50",
            ],

            [
                "parent" => "Светодиодные ленты и профили",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Комплектующие для светодиодных лент",
                "link" => "/category/komplektuiushhie-dlia-svetodiodnyx-lent-51",
            ],

            [
                "parent" => "Светодиодные ленты и профили",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Комплектующие для профилей",
                "link" => "/category/komplektuiushhie-dlia-profilei-52",
            ],

            [
                "parent" => "Светодиодные ленты и профили",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Диммеры",
                "link" => "/category/dimmery-53",
            ],
//СТИЛИ ДЛЯ Светодиодные ленты и профили

            [
                "parent" => "Светодиодные ленты и профили",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Современный",
                "link" => "/category/svetodiodnye-lenty-i-profili-43?style%5B%5D=современный",
            ],

            [
                "parent" => "Светодиодные ленты и профили",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Хай-тек",
                "link" => "/category/svetodiodnye-lenty-i-profili-43?style%5B%5D=хай-тек",
            ],
//МАТЕРИАЛЫ СВЕТОДИОДНЫЕ ЛЕНТЫ И ПРОФИЛИ
            [
                "parent" => "Светодиодные ленты и профили",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Металл",
                "link" => "/category/svetodiodnye-lenty-i-profili-43?arm_material%5B%5D=металл",
            ],

            [
                "parent" => "Светодиодные ленты и профили",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Пластик",
                "link" => "/category/svetodiodnye-lenty-i-profili-43?arm_material%5B%5D=пластик",
            ],

            [
                "parent" => "Светодиодные ленты и профили",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Алюминий",
                "link" => "/category/svetodiodnye-lenty-i-profili-43?arm_material%5B%5D=алюминий",
            ],

            [
                "parent" => "Светодиодные ленты и профили",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Стекло",
                "link" => "/category/svetodiodnye-lenty-i-profili-43?arm_material%5B%5D=стекло",
            ],
//МЕСТО ПРИМЕНЕНИЯ СВЕТОДИОДНЫЕ ЛЕНТЫ И ПРОФИЛИ
            [
                "parent" => "Светодиодные ленты и профили",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кафе, рестораны",
                "link" => "/category/svetodiodnye-lenty-i-profili-43?mesto%5B%5D=кафе%2C+рестораны",
            ],
        ];
//КОНЕЦ СТРОКИ Светодиодные ленты и профили
//НАЧАЛО СТРОКИ Детские светильники

        DB::table("sub_catalog_menus")->insert($all_punkt);

        $all_punkt = [
            [
                "parent" => "Детские светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Детские люстры",
                "link" => "/category/detskie-liustry-35",
            ],

            [
                "parent" => "Детские светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Детские бра",
                "link" => "/category/detskie-bra-36",
            ],

            [
                "parent" => "Детские светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Детские настольные лампы",
                "link" => "/category/detskie-nastolnye-lampy-37",
            ],

            [
                "parent" => "Детские светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Детские ночники",
                "link" => "/category/detskie-nocniki-38",
            ],

            [
                "parent" => "Детские светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Светильники детские",
                "link" => "/category/svetilniki-detskie-39",
            ],

            [
                "parent" => "Детские светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Детские споты",
                "link" => "/category/detskie-spoty-40",
            ],

            [
                "parent" => "Детские светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Детские торшеры",
                "link" => "/category/detskie-torsery-41",
            ],

            [
                "parent" => "Детские светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Детские точечные светильники",
                "link" => "/category/detskie-tocecnye-svetilniki-42",
            ],
//СТИЛИ ДЛЯ Детские светильники
            [
                "parent" => "Детские светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Современный",
                "link" => "/category/detskie-svetilniki-34?style%5B%5D=современный",
            ],

            [
                "parent" => "Детские светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Классический",
                "link" => "/category/detskie-svetilniki-34?style%5B%5D=классический",
            ],

            [
                "parent" => "Детские светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Флористика",
                "link" => "/category/detskie-svetilniki-34?style%5B%5D=флористика",
            ],

            [
                "parent" => "Детские светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Хай-тек",
                "link" => "/category/detskie-svetilniki-34?style%5B%5D=хай-тек",
            ],

            [
                "parent" => "Детские светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Арт-декор",
                "link" => "/category/detskie-svetilniki-34?style%5B%5D=арт-деко",
            ],

            [
                "parent" => "Детские светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Лофт",
                "link" => "/category/detskie-svetilniki-34?style%5B%5D=лофт",
            ],

            [
                "parent" => "Детские светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Кантри",
                "link" => "/category/detskie-svetilniki-34?style%5B%5D=кантри",
            ],
//МАТЕРИАЛЫ ДЕТСКИЕ СВЕТИЛЬНИКИ
            [
                "parent" => "Детские светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Металл",
                "link" => "/category/detskie-svetilniki-34?arm_material%5B%5D=металл",
            ],

            [
                "parent" => "Детские светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Пластик",
                "link" => "/category/detskie-svetilniki-34?arm_material%5B%5D=пластик",
            ],

            [
                "parent" => "Детские светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Керамика",
                "link" => "/category/detskie-svetilniki-34?arm_material%5B%5D=керамика",
            ],

            [
                "parent" => "Детские светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Дерево",
                "link" => "/category/detskie-svetilniki-34?arm_material%5B%5D=дерево",
            ],

            [
                "parent" => "Детские светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Гипс",
                "link" => "/category/detskie-svetilniki-34?arm_material%5B%5D=гипс",
            ],

            [
                "parent" => "Детские светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Алюминий",
                "link" => "/category/detskie-svetilniki-34?arm_material%5B%5D=алюминий",
            ],

            [
                "parent" => "Детские светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Полимер",
                "link" => "/category/detskie-svetilniki-34?arm_material%5B%5D=полимер",
            ],
//МЕСТО ПРИМЕНЕНИЯ ДЕТСКИЕ ВЕТИЛЬНИКИ
            [
                "parent" => "Детские светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Детская",
                "link" => "/category/detskie-svetilniki-34?mesto%5B%5D=детская",
            ],

            [
                "parent" => "Детские светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Гостиная",
                "link" => "/category/detskie-svetilniki-34?mesto%5B%5D=гостиная",
            ],

            [
                "parent" => "Детские светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Прихожая",
                "link" => "/category/detskie-svetilniki-34?mesto%5B%5D=прихожая",
            ],

            [
                "parent" => "Детские светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кухня",
                "link" => "/category/detskie-svetilniki-34?mesto%5B%5D=кухня",
            ],

            [
                "parent" => "Детские светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Большие залы",
                "link" => "/category/detskie-svetilniki-34?mesto%5B%5D=большие+залы",
            ],

            [
                "parent" => "Детские светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кафе, рестораны",
                "link" => "/category/detskie-svetilniki-34?mesto%5B%5D=кафе%2C+рестораны",
            ],

            [
                "parent" => "Детские светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Спальня",
                "link" => "/category/detskie-svetilniki-34?mesto%5B%5D=спальня",
            ],
        ];
//КОНЕЦ СТРОКИ Детские светильники
//НАЧАЛО СТРОКИ Уличные светильники

        DB::table("sub_catalog_menus")->insert($all_punkt);

        $all_punkt = [
            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Грунтовые светильники",
                "link" => "/category/gruntovye-svetilniki-119",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Светильники для стен и ступеней",
                "link" => "/category/svetilniki-dlia-sten-i-stupenei-120",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Светильники для фонтанов и бассейнов",
                "link" => "/category/svetilniki-dlia-fontanov-i-basseinov-121",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Уличные настенные светильники",
                "link" => "/category/ulicnye-nastennye-svetilniki-122",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Уличные потолочные светильники",
                "link" => "/category/ulicnye-potolocnye-svetilniki-123",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Прожекторы",
                "link" => "/category/prozektory-124",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Садово-парковые светильники",
                "link" => "/category/sadovo-parkovye-svetilniki-125",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Садовые фигуры",
                "link" => "/category/sadovye-figury-126",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Уличные настольные светильники",
                "link" => "/category/ulicnye-nastolnye-svetilniki-127",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Уличные блоки розеток",
                "link" => "/category/ulicnye-bloki-rozetok-128",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Тротуарные светильники",
                "link" => "/category/trotuarnye-svetilniki-129",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Фонари",
                "link" => "/category/fonari-130",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Штативы",
                "link" => "/category/stativy-131",
            ],
//СТИЛИ ДЛЯ Уличные светильники
            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Современный",
                "link" => "/category/ulicnye-svetilniki-118?style%5B%5D=современный",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Хай-тек",
                "link" => "/category/ulicnye-svetilniki-118?style%5B%5D=хай-тек",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Классический",
                "link" => "/category/ulicnye-svetilniki-118?style%5B%5D=классический",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Лофт",
                "link" => "/category/ulicnye-svetilniki-118?style%5B%5D=лофт",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Замковый",
                "link" => "/category/ulicnye-svetilniki-118?style%5B%5D=замковый",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Флористика",
                "link" => "/category/ulicnye-svetilniki-118?style%5B%5D=флористика",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Эклектика",
                "link" => "/category/ulicnye-svetilniki-118?style%5B%5D=эклектика",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Кантри",
                "link" => "/category/ulicnye-svetilniki-118?style%5B%5D=кантри",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Восточный",
                "link" => "/category/ulicnye-svetilniki-118?style%5B%5D=восточный",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Прованс",
                "link" => "/category/ulicnye-svetilniki-118?style%5B%5D=прованс",
            ],
//МАТЕРИАЛЫ УЛИЧНЫЕ СВЕТИЛЬНИКИ
            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Металл",
                "link" => "/category/ulicnye-svetilniki-118?arm_material%5B%5D=металл",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Пластик",
                "link" => "/category/ulicnye-svetilniki-118?arm_material%5B%5D=пластик",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Алюминий",
                "link" => "/category/ulicnye-svetilniki-118?arm_material%5B%5D=алюминий",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Полимер",
                "link" => "/category/ulicnye-svetilniki-118?arm_material%5B%5D=полимер",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Бетон",
                "link" => "/category/ulicnye-svetilniki-118?arm_material%5B%5D=бетон",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Хрусталь",
                "link" => "/category/ulicnye-svetilniki-118?arm_material%5B%5D=хрусталь",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Латунь",
                "link" => "/category/ulicnye-svetilniki-118?arm_material%5B%5D=латунь",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Камень",
                "link" => "/category/ulicnye-svetilniki-118?arm_material%5B%5D=камень",
            ],
//МЕСТО ПРИМЕНЕНИЯ УЛИЧНЫЕ СВЕТИЛЬНИКИ
            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кафе, рестораны",
                "link" => "/category/ulicnye-svetilniki-118?mesto%5B%5D=кафе%2C+рестораны",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кухня",
                "link" => "/category/ulicnye-svetilniki-118?mesto%5B%5D=кухня",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Экспозиция",
                "link" => "/category/ulicnye-svetilniki-118?mesto%5B%5D=экспозиция",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Ванная",
                "link" => "/category/ulicnye-svetilniki-118?mesto%5B%5D=ванная",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Гостиная",
                "link" => "/category/ulicnye-svetilniki-118?mesto%5B%5D=гостиная",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Спальня",
                "link" => "/category/ulicnye-svetilniki-118?mesto%5B%5D=спальня",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Прихожая",
                "link" => "/category/ulicnye-svetilniki-118?mesto%5B%5D=прихожая",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Офис",
                "link" => "/category/ulicnye-svetilniki-118?mesto%5B%5D=офис",
            ],

            [
                "parent" => "Уличные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Веранда",
                "link" => "/category/ulicnye-svetilniki-118?mesto%5B%5D=веранда",
            ],
        ];
//КОНЕЦ СТРОКИ Уличные светильники
//НАЧАЛО СТРОКИ Лампы

        DB::table("sub_catalog_menus")->insert($all_punkt);

        $all_punkt = [
            [
                "parent" => "Лампы",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Галогеновые лампы",
                "link" => "/category/galogenovye-lampy-110",
            ],

            [
                "parent" => "Лампы",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Металлогалогеновые лампы",
                "link" => "/category/metallogalogenovye-lampy-111",
            ],

            [
                "parent" => "Лампы",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Лампы накаливания",
                "link" => "/category/lampy-nakalivaniia-112",
            ],

            [
                "parent" => "Лампы",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Светодиодные лампы",
                "link" => "/category/svetodiodnye-lampy-113",
            ],

            [
                "parent" => "Лампы",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Ретро лампы",
                "link" => "/category/retro-lampy-114",
            ],

            [
                "parent" => "Лампы",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Люминесцентные лампы",
                "link" => "/category/liuminescentnye-lampy-115",
            ],

            [
                "parent" => "Лампы",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Светодиодные модули",
                "link" => "/category/svetodiodnye-moduli-116",
            ],
//СТИЛИ ДЛЯ Лампы
            [
                "parent" => "Лампы",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Лофт",
                "link" => "/category/lampy-109?style%5B%5D=лофт",
            ],

            [
                "parent" => "Лампы",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Современный",
                "link" => "/category/lampy-109?style%5B%5D=современный",
            ],
//МАТЕРИАЛЫ ЛАМПЫ
            [
                "parent" => "Лампы",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Алюминий",
                "link" => "/category/lampy-109?arm_material%5B%5D=алюминий",
            ],

            [
                "parent" => "Лампы",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Пластик",
                "link" => "/category/lampy-109?arm_material%5B%5D=пластик",
            ],

            [
                "parent" => "Лампы",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Стекло",
                "link" => "/category/lampy-109?arm_material%5B%5D=стекло",
            ],

            [
                "parent" => "Лампы",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Керамика",
                "link" => "/category/lampy-109?arm_material%5B%5D=керамика",
            ],
//МЕСТО ПРИМЕНЕНИЯ ЛАМПЫ
            [
                "parent" => "Лампы",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Спальня",
                "link" => "/category/lampy-109?mesto%5B%5D=спальня",
            ],
        ];
//КОНЕЦ СТРОКИ Лампы

// //НАЧАЛО СТРОКИ Лайтбоксы

//         DB::table("sub_catalog_menus")->insert($all_punkt);

//         $all_punkt = [
//             [
//                 "parent" => "Лайтбоксы",
//                 "sub_punct" => "Виды",
//                 "order" => 1,
//                 "title" => "",
//                 "link" => "",
//             ],
//         ];
// //КОНЕЦ СТРОКИ Лайтбоксы

//НАЧАЛО СТРОКИ Праздничное освещение

        DB::table("sub_catalog_menus")->insert($all_punkt);

        $all_punkt = [
            [
                "parent" => "Праздничное освещение",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Светодиодная бахрома",
                "link" => "/category/svetodiodnaia-baxroma-133",
            ],

            [
                "parent" => "Праздничное освещение",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Светодиодные гирлянды",
                "link" => "/category/svetodiodnye-girliandy-134",
            ],

            [
                "parent" => "Праздничное освещение",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "LED гирлянды на деревья",
                "link" => "/category/led-girliandy-na-derevia-135",
            ],

            [
                "parent" => "Праздничное освещение",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Светодиодные деревья",
                "link" => "/category/svetodiodnye-derevia-136",
            ],

            [
                "parent" => "Праздничное освещение",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Светодиодные нити",
                "link" => "/category/svetodiodnye-niti-137",
            ],

            [
                "parent" => "Праздничное освещение",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Светодиодные занавесы",
                "link" => "/category/svetodiodnye-zanavesy-138",
            ],

            [
                "parent" => "Праздничное освещение",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Светодиодные фигуры",
                "link" => "/category/svetodiodnye-figury-139",
            ],

            [
                "parent" => "Праздничное освещение",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Светодиодные сети",
                "link" => "/category/svetodiodnye-seti-140",
            ],

            [
                "parent" => "Праздничное освещение",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Дюралайт",
                "link" => "/category/diuralait-141",
            ],

            [
                "parent" => "Праздничное освещение",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Комплектующие",
                "link" => "/category/komplektuiushhie-142",
            ],
//СТИЛИ Праздничное освещение
//МАТЕРИАЛЫ ПРАЗДНИЧНОЕ ОСВЕЩЕНИЕ
            [
                "parent" => "Праздничное освещение",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Пластик",
                "link" => "/category/prazdnicnoe-osveshhenie-132?arm_material%5B%5D=пластик",
            ],
        ];
//КОНЕЦ СТРОКИ Праздничное освещение
//НАЧАЛО СТРОКИ Электроустановочные изделия

        DB::table("sub_catalog_menus")->insert($all_punkt);

        $all_punkt = [
            [
                "parent" => "Электроустановочные изделия",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Выключатели",
                "link" => "/category/vykliucateli-144",
            ],

            [
                "parent" => "Электроустановочные изделия",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Клавиши, накладки",
                "link" => "/category/klavisi-nakladki-145",
            ],

            [
                "parent" => "Электроустановочные изделия",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Рамки",
                "link" => "/category/ramki-146",
            ],

            [
                "parent" => "Электроустановочные изделия",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Розетки",
                "link" => "/category/rozetki-147",
            ],

            [
                "parent" => "Электроустановочные изделия",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Радиовыключатели",
                "link" => "/category/radiovykliucateli-148",
            ],

            [
                "parent" => "Электроустановочные изделия",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Терморегулятор",
                "link" => "/category/termoreguliator-149",
            ],

            [
                "parent" => "Электроустановочные изделия",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Комплектующие",
                "link" => "/category/komplektuiushhie-150",
            ],

            [
                "parent" => "Электроустановочные изделия",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Стабилизаторы напряжения",
                "link" => "/category/stabilizatory-napriazeniia-151",
            ],
//СТИЛИ ДЛЯ Электроустановочные изделия
            [
                "parent" => "Электроустановочные изделия",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Современный",
                "link" => "/category/elektroustanovocnye-izdeliia-143?style%5B%5D=современный",
            ],

            [
                "parent" => "Электроустановочные изделия",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Кантри",
                "link" => "/category/elektroustanovocnye-izdeliia-143?style%5B%5D=кантри",
            ],
//МАТЕРИАЛЫ ЭЛЕКТРОУСТАНОВОЧНЫЕ ИЗДЕЛИЯ
            [
                "parent" => "Электроустановочные изделия",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Пластик",
                "link" => "/category/elektroustanovocnye-izdeliia-143?arm_material%5B%5D=пластик",
            ],
//МЕСТО ПРИМЕНЕНИЯ ЭЛЕКТРОУСТАНОВОЧНЫЕ ИЗДЕЛИЯ
            [
                "parent" => "Электроустановочные изделия",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Спальня",
                "link" => "/category/elektroustanovocnye-izdeliia-143?mesto%5B%5D=спальня",
            ],
        ];
//КОНЕЦ СТРОКИ Электроустановочные изделия
//НАЧАЛО СТРОКИ Технический свет, офисные светильники

        DB::table("sub_catalog_menus")->insert($all_punkt);

        $all_punkt = [
            [
                "parent" => "Технический свет, офисные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Консольные светильники",
                "link" => "/category/konsolnye-svetilniki-152",
            ],

            [
                "parent" => "Технический свет, офисные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Светильники Downlight",
                "link" => "/category/svetilniki-downlight-153",
            ],

            [
                "parent" => "Технический свет, офисные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Светодиодные панели",
                "link" => "/category/svetodiodnye-paneli-154",
            ],

            [
                "parent" => "Технический свет, офисные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Пылевлагозащищенные светильники",
                "link" => "/category/pylevlagozashhishhennye-svetilniki-155",
            ],

            [
                "parent" => "Технический свет, офисные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Световые указатели",
                "link" => "/category/svetovye-ukazateli-156",
            ],

            [
                "parent" => "Технический свет, офисные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Аварийные светильники",
                "link" => "/category/avariinye-svetilniki-157",
            ],

            [
                "parent" => "Технический свет, офисные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Потолочные светильники",
                "link" => "/category/potolocnye-svetilniki-158",
            ],

            [
                "parent" => "Технический свет, офисные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Купольные светильники",
                "link" => "/category/kupolnye-svetilniki-159",
            ],

            [
                "parent" => "Технический свет, офисные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Светильники офисные накладные",
                "link" => "/category/svetilniki-ofisnye-nakladnye-160",
            ],

            [
                "parent" => "Технический свет, офисные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Светильники подвесные промышленные",
                "link" => "/category/svetilniki-podvesnye-promyslennye-161",
            ],

            [
                "parent" => "Технический свет, офисные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Cветильники потолочные встраиваемые",
                "link" => "/category/cvetilniki-potolocnye-vstraivaemye-162",
            ],

            [
                "parent" => "Технический свет, офисные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Светильники для потолка грильято",
                "link" => "/category/svetilniki-dlia-potolka-griliato-163",
            ],

            [
                "parent" => "Технический свет, офисные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Светильники Армстронг",
                "link" => "/category/svetilniki-armstrong-164",
            ],

            [
                "parent" => "Технический свет, офисные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Светильники настенно-потолочные",
                "link" => "/category/svetilniki-nastenno-potolocnye-165",
            ],

            [
                "parent" => "Технический свет, офисные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Комплектующие",
                "link" => "/category/komplektuiushhie-166",
            ],

            [
                "parent" => "Технический свет, офисные светильники",
                "sub_punct" => "Виды",
                "order" => 1,
                "title" => "Светильники модульные",
                "link" => "/category/svetilniki-modulnye-167",
            ],
//СТИЛИ
            [
                "parent" => "Технический свет, офисные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Хай-тек",
                "link" => "/category/texniceskii-svet-ofisnye-svetilniki-168?style%5B%5D=хай-тек",
            ],

            [
                "parent" => "Технический свет, офисные светильники",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Современный",
                "link" => "/category/texniceskii-svet-ofisnye-svetilniki-168?style%5B%5D=современный",
            ],
//МАТЕРИАЛЫ
            [
                "parent" => "Технический свет, офисные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Алюминий",
                "link" => "/category/texniceskii-svet-ofisnye-svetilniki-168?arm_material%5B%5D=алюминий",
            ],

            [
                "parent" => "Технический свет, офисные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Пластик",
                "link" => "/category/texniceskii-svet-ofisnye-svetilniki-168?arm_material%5B%5D=пластик",
            ],

            [
                "parent" => "Технический свет, офисные светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Металл",
                "link" => "/category/texniceskii-svet-ofisnye-svetilniki-168?arm_material%5B%5D=металл",
            ],
//МЕСТО ПРИМЕНЕНИЯ
            [
                "parent" => "Технический свет, офисные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Офис",
                "link" => "/category/texniceskii-svet-ofisnye-svetilniki-168?mesto%5B%5D=офис",
            ],

            [
                "parent" => "Технический свет, офисные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Гостиная",
                "link" => "/category/texniceskii-svet-ofisnye-svetilniki-168?mesto%5B%5D=гостиная",
            ],

            [
                "parent" => "Технический свет, офисные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Ванная",
                "link" => "/category/texniceskii-svet-ofisnye-svetilniki-168?mesto%5B%5D=ванная",
            ],

            [
                "parent" => "Технический свет, офисные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Спальня",
                "link" => "/category/texniceskii-svet-ofisnye-svetilniki-168?mesto%5B%5D=спальня",
            ],

            [
                "parent" => "Технический свет, офисные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Кухня",
                "link" => "/category/texniceskii-svet-ofisnye-svetilniki-168?mesto%5B%5D=кухня",
            ],

            [
                "parent" => "Технический свет, офисные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Магазин",
                "link" => "/category/texniceskii-svet-ofisnye-svetilniki-168?mesto%5B%5D=магазин",
            ],

            [
                "parent" => "Технический свет, офисные светильники",
                "sub_punct" => "Место применения",
                "order" => 1,
                "title" => "Прихожая",
                "link" => "/category/texniceskii-svet-ofisnye-svetilniki-168?mesto%5B%5D=прихожая",
            ],
        ];
    }
}
