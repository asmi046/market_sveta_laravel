<?php
namespace App\Helpers;

class CategoryBase {

    protected static  $cats = [
        [
            'doc_id' => 0,
            'id' => 1,
            'name' => "Светильники для подсветки",

            'subcat' => [
                ['doc_id' => 2862, 'id' => 2, 'name'=>'Светильники для картин и зеркал', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2863, 'id' => 3, 'name'=>'Мебельные светильники', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2866, 'id' => 4, 'name'=>'Ночники', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2867, 'id' => 5, 'name'=>'Подсветка стен и ступеней', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
            ]
        ],

        [
            'doc_id' => 2864,
            'id' => 7,
            'name' => "Бра и настенное освещение",

            'subcat' => [
                ['doc_id' => 0, 'id' => 9, 'name'=>'Бра с выключателем', 'pn'=>'Выключатель', 'pv'=>'Да', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 10, 'name'=>'Бра гибкие', 'pn'=>'Особенности', 'pv'=>'Гнущиеся ', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 11, 'name'=>'Бра с абажуром', 'pn'=>'Форма плафона', 'pv'=>'Абажур', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 12, 'name'=>'Бра с подсветкой', 'pn'=>'Подсветка', 'pv'=>'Да', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 13, 'name'=>'Бра для чтения', 'pn'=>'', 'pv'=>'', 'pn2'=>'', 'pv2'=>'']
            ]
        ],

        [
            'doc_id' => 2865,
            'id' => 15,
            'name' => "Настольные лампы",

            'subcat' => [
                ['doc_id' => 0, 'id' => 16, 'name'=>'Настольные лампы c абажуром', 'pn'=>'Форма плафона', 'pv'=>'Абажур', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 17, 'name'=>'Светодиодные настольные лампы', 'pn' => 'Тип лампы', 'pv' => 'LED', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 18, 'name'=>'Настольные лампы на струбцине', 'pn' => 'Особенности', 'pv' => 'Крепление к столу', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 19, 'name'=>'Настольные лампы для спальни', 'pn' => 'Назначение помещения', 'pv' => 'спальня', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 20, 'name'=>'Дизайнерские настольные лампы', 'pn' => 'Особенности', 'pv' => 'Дизайнерская настольная лампа', 'pn2'=>'', 'pv2'=>'']

            ]
        ],

        [
            'doc_id' => 2868,
            'id' => 22,
            'name' => "Люстры",

            'subcat' => [
                ['doc_id' => 2870, 'id' => 23, 'name'=>'Люстры потолочные, накладны', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2871, 'id' => 24, 'name'=>'Люстры подвесные', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 13902, 'id' => 25, 'name'=>'Люстры каскадные', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 27, 'name'=>'Люстры для натяжного потолка', 'pn' => 'Способ крепления', 'pv' => 'Крюк', 'pn2' => 'Способ крепления', 'pv2' => 'Монтажная пластина'],
                ['doc_id' => 0, 'id' => 28, 'name'=>'Люстры с пультом', 'pn' => 'Пульт управления', 'pv' => 'Да', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 29, 'name'=>'Люстры светодиодные', 'pn' => 'Тип лампы', 'pv' => 'LED', 'pn2'=>'', 'pv2'=>'']
            ]
        ],

];

    static public function get_all_cat() {
        return self::$cats;
    }

    static public function get_cats_to_tovar ($category_ID = -1, $prod_id = 0, $prop = []) {

        $product_cat = [];

        foreach(self::$cats as $top_cat) {

            $add_main_cat = false;
            foreach ($top_cat['subcat'] as $sub_cat) {
                if ($sub_cat['doc_id'] == $category_ID)
                {
                    $product_cat[] = ["category_id" => $sub_cat['id'], "product_id" => $prod_id];
                    $add_main_cat =true;
                }
            }

            if ($add_main_cat || ($category_ID == $top_cat['doc_id']))
                $product_cat[] = ["category_id" => $top_cat['id'], "product_id" => $prod_id];

            if (!empty($product_cat))
            foreach ($top_cat['subcat'] as $sub_cat) {
                if ((isset($prop[$sub_cat['pn']])  && ($prop[$sub_cat['pn']] == $sub_cat['pv']))||(isset($prop[$sub_cat['pn2']])  && ($prop[$sub_cat['pn2']] == $sub_cat['pv2'])))
                {
                    $product_cat[] = ["category_id" => $sub_cat['id'], "product_id" => $prod_id];
                    $add_main_cat =true;
                }
            }

            if (!empty($product_cat)) break;
        }




        return $product_cat;
    }

}

?>
