<?php
namespace App\Helpers;

class CategoryBase {

    protected static  $cats = [
        [
            'id' => 1,
            'name' => "Светильники для подсветки",

            'subcat' => [
                ['id' => 2, 'name'=>'Светильники для картин и зеркал'],
                ['id' => 3, 'name'=>'Мебельные светильники'],
                ['id' => 4, 'name'=>'Ночники'],
                ['id' => 5, 'name'=>'Подсветка стен и ступеней'],
                ['id' => 6, 'name'=>'Недорогие'],
            ]
        ],

        [
            'id' => 7,
            'name' => "Бра и настенное освещение",

            'subcat' => [
                ['id' => 9, 'name'=>'с выключателем'],
                ['id' => 10, 'name'=>'гибкие'],
                ['id' => 11, 'name'=>'с абажуром'],
                ['id' => 12, 'name'=>'с подсветкой'],
                ['id' => 13, 'name'=>'для чтения'],
                ['id' => 14, 'name'=>'недорогие'],
            ]
        ],

        [
            'id' => 15,
            'name' => "Настольные лампы",

            'subcat' => [
                ['id' => 16, 'name'=>'С абажуром'],
                ['id' => 17, 'name'=>'Светодиодные'],
                ['id' => 18, 'name'=>'На струбцине'],
                ['id' => 19, 'name'=>'Для спальни'],
                ['id' => 20, 'name'=>'Дизайнерские'],
                ['id' => 21, 'name'=>'Недорогие'],

            ]
        ],

        [
            'id' => 22,
            'name' => "Люстры",

            'subcat' => [
                ['id' => 23, 'name'=>'Люстры на штанге'],
                ['id' => 24, 'name'=>'Люстры накладные'],
                ['id' => 25, 'name'=>'Люстры подвесные'],
                ['id' => 26, 'name'=>'Люстры каскадные'],
                ['id' => 27, 'name'=>'Люстры для натяжного потолка'],
                ['id' => 28, 'name'=>'Люстры с пультом'],
                ['id' => 29, 'name'=>'Люстры ветодиодные'],
                ['id' => 30, 'name'=>'Люстры недорогие'],
            ]
        ],

        [
            'id' => 15,
            'name' => "Люстры",

            'subcat' => [
                ['id' => 16, 'name'=>'Люстры на штанге'],
                ['id' => 16, 'name'=>'Люстры накладные'],
                ['id' => 16, 'name'=>'Люстры подвесные'],
                ['id' => 16, 'name'=>'Люстры каскадные'],
                ['id' => 16, 'name'=>'Люстры для натяжного потолка'],
                ['id' => 16, 'name'=>'Люстры с пультом'],
                ['id' => 16, 'name'=>'Люстры ветодиодные'],
                ['id' => 16, 'name'=>'Люстры недорогие'],
            ]
        ]
];

    static public function get_all_cat() {
        return self::$cats;
    }

}

?>
