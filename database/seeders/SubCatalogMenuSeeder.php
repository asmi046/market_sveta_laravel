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
                "title" => "Потолочьные",
                "link" => "#",
            ],
            
            [
                "parent" => "Люстры",
                "sub_punct" => "Виды",
                "order" => 2,
                "title" => "Подвесные",
                "link" => "#",
            ],
            
            [
                "parent" => "Люстры",
                "sub_punct" => "Виды",
                "order" => 3,
                "title" => "Каскадные",
                "link" => "#",
            ],
        ];

        DB::table("sub_catalog_menus")->insert($all_punkt);

        $all_punkt = [
            [
                "parent" => "Люстры",
                "sub_punct" => "Место использования",
                "order" => 1,
                "title" => "Для спальни",
                "link" => "#",
            ],
            
            [
                "parent" => "Люстры",
                "sub_punct" => "Место использования",
                "order" => 2,
                "title" => "Для гостинной",
                "link" => "#",
            ],
            
            [
                "parent" => "Люстры",
                "sub_punct" => "Место использования",
                "order" => 3,
                "title" => "Для кухни",
                "link" => "#",
            ],
        ];

        DB::table("sub_catalog_menus")->insert($all_punkt);

        $all_punkt = [
            [
                "parent" => "Люстры",
                "sub_punct" => "Стили",
                "order" => 1,
                "title" => "Классика",
                "link" => "#",
            ],
            
            [
                "parent" => "Люстры",
                "sub_punct" => "Место использования",
                "order" => 2,
                "title" => "Арт-деко",
                "link" => "#",
            ],
            
            [
                "parent" => "Люстры",
                "sub_punct" => "Место использования",
                "order" => 3,
                "title" => "Современный",
                "link" => "#",
            ],
            
            [
                "parent" => "Люстры",
                "sub_punct" => "Место использования",
                "order" => 4,
                "title" => "Кантри",
                "link" => "#",
            ],
            
            [
                "parent" => "Люстры",
                "sub_punct" => "Место использования",
                "order" => 5,
                "title" => "Тифани",
                "link" => "#",
            ],
        ];

        DB::table("sub_catalog_menus")->insert($all_punkt);

        $all_punkt = [
            [
                "parent" => "Люстры",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Хрустальные",
                "link" => "#",
            ],
            
            [
                "parent" => "Люстры",
                "sub_punct" => "Материалы",
                "order" => 2,
                "title" => "Деревянные",
                "link" => "#",
            ],
            
            [
                "parent" => "Люстры",
                "sub_punct" => "Материалы",
                "order" => 3,
                "title" => "Стеклянные",
                "link" => "#",
            ],
            
            [
                "parent" => "Люстры",
                "sub_punct" => "Материалы",
                "order" => 4,
                "title" => "Пластиковые",
                "link" => "#",
            ],
            
        ];

        DB::table("sub_catalog_menus")->insert($all_punkt);

        $all_punkt = [
            [
                "parent" => "Светильники",
                "sub_punct" => "Материалы",
                "order" => 1,
                "title" => "Хрустальные",
                "link" => "#",
            ],
            
            [
                "parent" => "Светильники",
                "sub_punct" => "Материалы",
                "order" => 2,
                "title" => "Деревянные",
                "link" => "#",
            ],
            
            [
                "parent" => "Светильники",
                "sub_punct" => "Материалы",
                "order" => 3,
                "title" => "Стеклянные",
                "link" => "#",
            ],
            
            [
                "parent" => "Светильники",
                "sub_punct" => "Материалы",
                "order" => 4,
                "title" => "Пластиковые",
                "link" => "#",
            ],
            
        ];

        DB::table("sub_catalog_menus")->insert($all_punkt);
    }
}
