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

        [
            'doc_id' => 2872,
            'id' => 30       ,
            'name' => "Светильники",

            'subcat' => [
                [
                    'doc_id' => 2874,
                    'id' => 31,
                    'name'=>'Накладные потолочьные светильники',
                    'pn' => '',
                    'pv' => '',
                    'pn2'=>'',
                    'pv2'=>'',

                    'subcat' => [
                        ['doc_id' => 0, 'id' => 3101, 'name'=>'Накладные светильники с пультом', 'pn' => 'Пульт управления', 'pv' => 'Да', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 0, 'id' => 3102, 'name'=>'Светодиодные накладные светильники', 'pn' => 'Тип лампы', 'pv' => 'LED', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 0, 'id' => 3103, 'name'=>'Накладные светильники для натяжного потолка', 'pn' => 'Способ крепления', 'pv' => 'Крюк', 'pn2'=>'', 'pv2'=>''],
                    ]
                ],

                [
                    'doc_id' => 2875,
                    'id' => 32,
                    'name'=>'Подвесные светильники',
                    'pn' => '',
                    'pv' => '',
                    'pn2'=>'',
                    'pv2'=>'',

                    'subcat' => [
                        ['doc_id' => 0, 'id' => 3201, 'name'=>'Светодиодные подвесные светильники', 'pn' => 'Тип лампы', 'pv' => 'LED', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 0, 'id' => 3202, 'name'=>'Подвесные светильники с абажуром', 'pn'=>'Форма плафона', 'pv'=>'Абажур', 'pn2'=>'', 'pv2'=>''],
                    ]
                ],

                ['doc_id' => 14597, 'id' => 33, 'name'=>'Реечные, линейные светильники', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
            ]
        ],

        [
            'doc_id' => 2876,
            'id' => 34       ,
            'name' => "Детские светильники",

            'subcat' => [
                ['doc_id' => 2877, 'id' => 35, 'name'=>'Детские люстры', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2878, 'id' => 36, 'name'=>'Детские бра', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2879, 'id' => 37, 'name'=>'Детские настольные лампы', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2880, 'id' => 38, 'name'=>'Детские ночники', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2881, 'id' => 39, 'name'=>'Светильники детские', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2882, 'id' => 40, 'name'=>'Детские споты', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2883, 'id' => 41, 'name'=>'Детские торшеры', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 9930, 'id' => 42, 'name'=>'Детские точечные светильники', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
            ]
        ],

        [
            'doc_id' => 2884,
            'id' => 43       ,
            'name' => "Светодиодные ленты и профили",

            'subcat' => [
                ['doc_id' => 2885, 'id' => 44, 'name'=>'Ленты светодиодные', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2886, 'id' => 45, 'name'=>'Драйверы для светодиодных лент', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2887, 'id' => 46, 'name'=>'Усилители для светодиодных лент', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2888, 'id' => 47, 'name'=>'Контроллеры для светодиодных лент', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2889, 'id' => 48, 'name'=>'Блоки питания для светодиодных лент', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2890, 'id' => 49, 'name'=>'Экраны для светодиодных лент', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2891, 'id' => 50, 'name'=>'Профили для светодиодных лент', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                [
                    'doc_id' => 2892,
                    'id' => 51,
                    'name'=>'Комплектующие для светодиодных лент',
                    'pn' => '',
                    'pv' => '',
                    'pn2'=>'',
                    'pv2'=>'',

                    'subcat' => [
                        ['doc_id' => 14107, 'id' => 5101, 'name'=>'Декодеры', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14108, 'id' => 5102, 'name'=>'Заглушки для лент', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14109, 'id' => 5103, 'name'=>'Соединители для лент', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14110, 'id' => 5104, 'name'=>'Пульты управления', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14111, 'id' => 5105, 'name'=>'Панели управления', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14114, 'id' => 5106, 'name'=>'Крепежные элементы для лент', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14115, 'id' => 5107, 'name'=>'Датчики', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14116, 'id' => 5108, 'name'=>'Конвертеры', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],

                    ]
                ],

                [
                    'doc_id' => 11043,
                    'id' => 52,
                    'name'=>'Комплектующие для профилей',
                    'pn' => '',
                    'pv' => '',
                    'pn2'=>'',
                    'pv2'=>'',

                    'subcat' => [
                        ['doc_id' => 14091, 'id' => 5202, 'name'=>'Заглушки для профилей', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14092, 'id' => 5203, 'name'=>'Крепежные элементы для профилей', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14093, 'id' => 5204, 'name'=>'Соединители для профилей', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14094, 'id' => 5205, 'name'=>'Подвесные комплекты для профилей', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14095, 'id' => 5206, 'name'=>'Тубусы для упаковки профилей', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14096, 'id' => 5207, 'name'=>'Рамки к профилю', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14097, 'id' => 5208, 'name'=>'Сальники для профилей', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14098, 'id' => 5209, 'name'=>'Диммеры встраиваемые в профиль', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14099, 'id' => 5210, 'name'=>'Прокладки для профилей', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14100, 'id' => 5211, 'name'=>'Микровыключатели', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14101, 'id' => 5212, 'name'=>'Тросики для профилей', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14102, 'id' => 5213, 'name'=>'Приспособления для монтажа прокладок', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14103, 'id' => 5214, 'name'=>'Подложки для фиксации лент', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14104, 'id' => 5215, 'name'=>'Перфорированные сетки', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14105, 'id' => 5216, 'name'=>'Противоскользящие резиновые вставки', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14106, 'id' => 5217, 'name'=>'Муфты', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],

                    ]
                ],

                ['doc_id' => 11628, 'id' => 53, 'name'=>'Диммеры', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
            ]
        ],

        [
            'doc_id' => 2893,
            'id' => 54,
            'name' => "Споты",

            'subcat' => [
                ['doc_id' => 0, 'id' => 55, 'name'=>'Встраиваемые споты', 'pn' => 'Место установки', 'pv' => 'Врезные', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 56, 'name'=>'Светодиодные споты', 'pn' => 'Тип лампы', 'pv' => 'LED', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 57, 'name'=>'Споты на штанге', 'pn' => 'Тип подвеса', 'pv' => 'Штанга', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 58, 'name'=>'Споты с выключателем', 'pn' => 'Выключатель', 'pv' => 'Да', 'pn2'=>'', 'pv2'=>''],
            ]
        ],

        [
            'doc_id' => 2894,
            'id' => 59,
            'name' => "Торшеры и напольные светильники",

            'subcat' => [
                ['doc_id' => 0, 'id' => 60, 'name'=>'Торшеры с абажуром', 'pn'=>'Форма плафона', 'pv'=>'Абажур', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 61, 'name'=>'Светодиодные', 'pn' => 'Тип лампы', 'pv' => 'LED', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 62, 'name'=>'Торшеры со столиком', 'pn' => 'Особенности', 'pv' => 'Торшер со столиком', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 63, 'name'=>'Торшеры удочка', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],

            ]
        ],

        [
            'doc_id' => 2895,
            'id' => 64,
            'name' => "Точечные светильники",

            'subcat' => [
                ['doc_id' => 2896, 'id' => 65, 'name'=>'Влагозащищенные точечные светильники', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2897, 'id' => 66, 'name'=>'Встраиваемые точечные светильники', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2898, 'id' => 67, 'name'=>'Накладные точечные светильники', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],

            ]
        ],

        [
            'doc_id' => 2899,
            'id' => 68,
            'name' => "Шинные и струнные системы",

            'subcat' => [
                ['doc_id' => 2900, 'id' => 70, 'name'=>'Комплектующие', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2901, 'id' => 71, 'name'=>'Трековые светильники', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 10205, 'id' => 72, 'name'=>'Готовые решения', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 10389, 'id' => 73, 'name'=>'Шинопроводы', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],

                [
                    'doc_id' => 14065,
                    'id' => 74,
                    'name'=>'Комплектующие для трековых светильников',
                    'pn' => '',
                    'pv' => '',
                    'pn2'=>'',
                    'pv2'=>'',

                    'subcat' => [
                        ['doc_id' => 14074, 'id' => 7401, 'name'=>'Линзы', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14078, 'id' => 7402, 'name'=>'Кольца', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14079, 'id' => 7403, 'name'=>'Плафоны', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14083, 'id' => 7404, 'name'=>'Основания для трековых светильников', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14953, 'id' => 7405, 'name'=>'Шторки', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],

                    ]
                ],

                [
                    'doc_id' => 14066,
                    'id' => 75,
                    'name'=>'Комплектующие для шинопроводов',
                    'pn' => '',
                    'pv' => '',
                    'pn2'=>'',
                    'pv2'=>'',

                    'subcat' => [
                        ['doc_id' => 14067, 'id' => 7501, 'name'=>'Коннекторы', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14068, 'id' => 7502, 'name'=>'Крепежные элементы', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14069, 'id' => 7503, 'name'=>'Подвесные комплекты', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14070, 'id' => 7504, 'name'=>'Заглушки', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14071, 'id' => 7505, 'name'=>'Тросики', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14072, 'id' => 7506, 'name'=>'Адаптеры', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14073, 'id' => 7507, 'name'=>'Подводы питания', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14075, 'id' => 7508, 'name'=>'Стойки', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14076, 'id' => 7509, 'name'=>'Накладки', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14077, 'id' => 7510, 'name'=>'Усилители стыков', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14081, 'id' => 7511, 'name'=>'Коробки для драйверов', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14085, 'id' => 7512, 'name'=>'Розетки для шинопроводов', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14086, 'id' => 7513, 'name'=>'Пульты управления для шинопроводов', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14087, 'id' => 7514, 'name'=>'Выключатели для шинопроводов', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14088, 'id' => 7515, 'name'=>'Профили для шинопроводов', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14089, 'id' => 7516, 'name'=>'Соединители профилей для шинопроводов', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14090, 'id' => 7517, 'name'=>'Гибочные устройства', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14559, 'id' => 7518, 'name'=>'Настенные панели управления', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14560, 'id' => 7519, 'name'=>'WI-FI конвертеры', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14620, 'id' => 7520, 'name'=>'Углы профиля', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14957, 'id' => 7521, 'name'=>'Кабели питания', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14994, 'id' => 7522, 'name'=>'Соединители для шинопроводов', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14995, 'id' => 7523, 'name'=>'Экраны для шинопроводов', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],

                    ]
                ],

                ['doc_id' => 14080, 'id' => 76, 'name'=>'Драйверы для шинопроводов', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 14082, 'id' => 78, 'name'=>'Диммеры для шинопроводов', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 14084, 'id' => 79, 'name'=>'Датчики движения для шинопроводов', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 14589, 'id' => 80, 'name'=>'Струнные светильники', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 14592, 'id' => 81, 'name'=>'Струнные шинопроводы', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
            ]
        ],

        [
            'doc_id' => 2902,
            'id' => 82,
            'name' => "Шинные и струнные системы",

            'subcat' => [
                ['doc_id' => 0, 'id' => 83, 'name'=>'Аксессуары', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 84, 'name'=>'Блоки защиты', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 85, 'name'=>'Блоки питания AC', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 86, 'name'=>'Подвесы', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 87, 'name'=>'Рамки декоративные', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 88, 'name'=>'Модули', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 89, 'name'=>'Корпусы светильников', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 90, 'name'=>'Вставки декоративные', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 91, 'name'=>'Коннекторы модульных светильников', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 92, 'name'=>'Базы встраиваемые', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 93, 'name'=>'Базы накладные', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 94, 'name'=>'Линзы для светильников', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 95, 'name'=>'Крепежные элементы для светильников', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 96, 'name'=>'Драйверы для модульных светильников', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 97, 'name'=>'Стойки для светильников', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 98, 'name'=>'Рефлекторы', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 99, 'name'=>'Монтажные коробки', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 100, 'name'=>'Платы для светодиодов', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 101, 'name'=>'Разветвители', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 102, 'name'=>'Клеммы', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 103, 'name'=>'Удлинители кабелей', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 104, 'name'=>'Стекла с наклейками', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 105, 'name'=>'Тубусы картонные', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 106, 'name'=>'Wi-Fi реле', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 107, 'name'=>'Накладки на базу', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 0, 'id' => 108, 'name'=>'Отражатели', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
            ]
        ],


        [
            'doc_id' => 2908,
            'id' => 109,
            'name' => "Лампы",

            'subcat' => [
                ['doc_id' => 2909, 'id' => 110, 'name'=>'Галогеновые лампы', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2911, 'id' => 111, 'name'=>'Металлогалогеновые лампы', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2912, 'id' => 112, 'name'=>'Лампы накаливания', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2913, 'id' => 113, 'name'=>'Светодиодные лампы', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2914, 'id' => 114, 'name'=>'Ретро лампы', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 13905, 'id' => 115, 'name'=>'Люминесцентные лампы', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 14588, 'id' => 116, 'name'=>'Светодиодные модули', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],

            ]
        ],


        [
            'doc_id' => 9794,
            'id' => 117,
            'name' => "Лайтбоксы",

            'subcat' => [

            ]
        ],


        [
            'doc_id' => 2915,
            'id' => 118,
            'name' => "Уличные светильники",

            'subcat' => [
                ['doc_id' => 2916, 'id' => 119, 'name'=>'Грунтовые светильники', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2917, 'id' => 120, 'name'=>'Светильники для стен и ступеней', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2918, 'id' => 121, 'name'=>'Светильники для фонтанов и бассейнов', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2920, 'id' => 122, 'name'=>'Уличные настенные светильники', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],

                [
                    'doc_id' => 2921,
                    'id' => 123,
                    'name'=>'Уличные потолочные светильники',
                    'pn' => '',
                    'pv' => '',
                    'pn2'=>'',
                    'pv2'=>'',

                    'subcat' => [
                        ['doc_id' => 2922, 'id' => 12301, 'name'=>'Встраиваемые уличные светильники', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 2923, 'id' => 12302, 'name'=>'Накладные уличные светильники', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 2924, 'id' => 12303, 'name'=>'Подвесные уличные светильники', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                    ]
                ],

                ['doc_id' => 2925, 'id' => 124, 'name'=>'Прожекторы', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],

                [
                    'doc_id' => 2926,
                    'id' => 125,
                    'name'=>'Садово-парковые светильники',
                    'pn' => '',
                    'pv' => '',
                    'pn2'=>'',
                    'pv2'=>'',

                    'subcat' => [
                        ['doc_id' => 11682, 'id' => 12501, 'name'=>'Низкие уличные фонари', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 11683, 'id' => 12502, 'name'=>'Высокие уличные фонари', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 11684, 'id' => 12503, 'name'=>'Средние уличные фонари', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                    ]
                ],

                ['doc_id' => 2927, 'id' => 126, 'name'=>'Садовые фигуры', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 3064, 'id' => 127, 'name'=>'Уличные настольные светильники', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 9351, 'id' => 128, 'name'=>'Уличные блоки розеток', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 9677, 'id' => 129, 'name'=>'Тротуарные светильники', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 10238, 'id' => 130, 'name'=>'Фонари', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 15000, 'id' => 131, 'name'=>'Штативы', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
            ]
        ],

        [
            'doc_id' => 2928,
            'id' => 132,
            'name' => "Праздничное освещение",

            'subcat' => [
                ['doc_id' => 2929, 'id' => 133, 'name'=>'Светодиодная бахрома', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2930, 'id' => 134, 'name'=>'Светодиодные гирлянды', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2931, 'id' => 135, 'name'=>'LED гирлянды на деревья', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2932, 'id' => 136, 'name'=>'Светодиодные деревья', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2933, 'id' => 137, 'name'=>'Светодиодные нити', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2934, 'id' => 138, 'name'=>'Светодиодные занавесы', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 2935, 'id' => 139, 'name'=>'Светодиодные фигуры', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 9761, 'id' => 140, 'name'=>'Светодиодные сети', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 11029, 'id' => 141, 'name'=>'Дюралайт', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],

                [
                    'doc_id' => 11676,
                    'id' => 142,
                    'name'=>'Комплектующие',
                    'pn' => '',
                    'pv' => '',
                    'pn2'=>'',
                    'pv2'=>'',

                    'subcat' => [
                        ['doc_id' => 14136, 'id' => 14201, 'name'=>'Трансформаторы', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14137, 'id' => 14202, 'name'=>'Контроллеры', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14138, 'id' => 14203, 'name'=>'Силовые провода', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14139, 'id' => 14204, 'name'=>'Шнуры питания', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14140, 'id' => 14205, 'name'=>'Провода питания', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14141, 'id' => 14206, 'name'=>'Выпрямители для гирлянд', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14142, 'id' => 14207, 'name'=>'Разветвители для нитей', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14143, 'id' => 14208, 'name'=>'Удлинители для гирлянд', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14144, 'id' => 14209, 'name'=>'Соединители для гирлянд', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14145, 'id' => 14210, 'name'=>'Заглушки для дюралайта', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14146, 'id' => 14211, 'name'=>'Крепеж для дюралайта', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14147, 'id' => 14212, 'name'=>'Соединители для дюралайта', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14148, 'id' => 14213, 'name'=>'Комплекты подключения для дюралайта', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14149, 'id' => 14214, 'name'=>'Заглушки для гирлянд', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14150, 'id' => 14215, 'name'=>'Комплекты подключения для гирлянд', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14151, 'id' => 14216, 'name'=>'Батареечные блоки', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14949, 'id' => 14217, 'name'=>'Коннектор', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14950, 'id' => 14218, 'name'=>'Крепеж для гирлянд', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14954, 'id' => 14219, 'name'=>'Блоки', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14955, 'id' => 14220, 'name'=>'Переходники для дюралайта', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14956, 'id' => 14221, 'name'=>'Шины для занавесов', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>'']
                    ]
                ],

            ]
        ],

        [
            'doc_id' => 3201,
            'id' => 143,
            'name' => "Электроустановочные изделия",

            'subcat' => [
                ['doc_id' => 3385, 'id' => 144, 'name'=>'Выключатели', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 3386, 'id' => 145, 'name'=>'Клавиши. Накладки', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 3387, 'id' => 146, 'name'=>'Рамки', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 3388, 'id' => 147, 'name'=>'Розетки', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 10447, 'id' => 148, 'name'=>'Радиовыключатели', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 11637, 'id' => 149, 'name'=>'Терморегулятор', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],

                [
                    'doc_id' => 13675,
                    'id' => 150,
                    'name'=>'Комплектующие',
                    'pn' => '',
                    'pv' => '',
                    'pn2'=>'',
                    'pv2'=>'',

                    'subcat' => [
                        ['doc_id' => 2904, 'id' => 15001, 'name'=>'Пульты управления', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 2907, 'id' => 15002, 'name'=>'Датчики движения', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 13676, 'id' => 15003, 'name'=>'Патроны', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 13677, 'id' => 15004, 'name'=>'Шнур с выключателем', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 13760, 'id' => 15005, 'name'=>'Диммеры', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 13878, 'id' => 15006, 'name'=>'Ваттметры', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 13879, 'id' => 15007, 'name'=>'Реле напряжения', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                        ['doc_id' => 14997, 'id' => 15008, 'name'=>'Контроллеры', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>'']

                    ]
                ],

                ['doc_id' => 13683, 'id' => 151, 'name'=>'Стабилизаторы напряжения', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],

            ]
        ],

        [
            'doc_id' => 10207,
            'id' => 168,
            'name' => "Технический свет, офисные светильники",

            'subcat' => [
                ['doc_id' => 6059, 'id' => 152, 'name'=>'Консольные светильники', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 10208, 'id' => 153, 'name'=>'Светильники Downlight', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 10209, 'id' => 154, 'name'=>'Светодиодные панели', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 10210, 'id' => 155, 'name'=>'Пылевлагозащищенные светильники', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 10211, 'id' => 156, 'name'=>'Световые указатели', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 10220, 'id' => 157, 'name'=>'Аварийные светильники', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 10221, 'id' => 158, 'name'=>'Потолочные светильники', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 10222, 'id' => 159, 'name'=>'Купольные светильники', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 10223, 'id' => 160, 'name'=>'Светильники офисные накладные', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 10224, 'id' => 161, 'name'=>'Светильники подвесные промышленные', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 10225, 'id' => 162, 'name'=>'Cветильники потолочные встраиваемые', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 10226, 'id' => 163, 'name'=>'Светильники для потолка грильято', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 10230, 'id' => 164, 'name'=>'Светильники Армстронг', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 10231, 'id' => 165, 'name'=>'Светильники настенно-потолочные', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 10232, 'id' => 166, 'name'=>'Комплектующие', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],
                ['doc_id' => 10250, 'id' => 167, 'name'=>'Светильники модульные', 'pn' => '', 'pv' => '', 'pn2'=>'', 'pv2'=>''],


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

                $add_main_cat_sub =false;
                if (isset($sub_cat['subcat']))
                foreach ($sub_cat['subcat'] as $subsub_cat) {
                    if ($sub_cat['doc_id'] == $category_ID)
                    {
                        $product_cat[] = ["category_id" => $subsub_cat['id'], "product_id" => $prod_id];
                        $add_main_cat_sub =true;
                    }
                }

                if (($sub_cat['doc_id'] == $category_ID)|| $add_main_cat_sub)
                {
                    $product_cat[] = ["category_id" => $sub_cat['id'], "product_id" => $prod_id];
                    $add_main_cat =true;
                }
            }

            if ($add_main_cat || ($category_ID == $top_cat['doc_id']))
                $product_cat[] = ["category_id" => $top_cat['id'], "product_id" => $prod_id];

            // if (!empty($product_cat))
            // foreach ($top_cat['subcat'] as $sub_cat) {
            //     if ((isset($prop[$sub_cat['pn']])  && ($prop[$sub_cat['pn']] == $sub_cat['pv']))||(isset($prop[$sub_cat['pn2']])  && ($prop[$sub_cat['pn2']] == $sub_cat['pv2'])))
            //     {
            //         $product_cat[] = ["category_id" => $sub_cat['id'], "product_id" => $prod_id];
            //         $add_main_cat =true;
            //     }
            // }

            if (!empty($product_cat)){

                foreach ($top_cat['subcat'] as $sub_cat) {

                    if (isset($sub_cat['subcat']))
                    foreach ($sub_cat['subcat'] as $subsub_cat) {
                        if ((isset($prop[$sub_cat['pn']])  &&  ($prop[$subsub_cat['pn']] == $subsub_cat['pv']))||(isset($prop[$subsub_cat['pn2']])  && ($prop[$subsub_cat['pn2']] == $subsub_cat['pv2'])))
                        {
                            $product_cat[] = ["category_id" => $subsub_cat['id'], "product_id" => $prod_id];
                            echo "По фильтру:".$subsub_cat['name']." \n\r";
                        }
                    }

                    if ((isset($prop[$sub_cat['pn']])  && ($prop[$sub_cat['pn']] == $sub_cat['pv']))||(isset($prop[$sub_cat['pn2']])  && ($prop[$sub_cat['pn2']] == $sub_cat['pv2'])))
                    {
                        $product_cat[] = ["category_id" => $sub_cat['id'], "product_id" => $prod_id];
                        echo "По фильтру:".$sub_cat['name']." \n\r";
                    }

                }

                break;
            }
        }




        return $product_cat;
    }

}

?>
