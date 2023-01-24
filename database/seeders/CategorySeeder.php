<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

use DB;

use App\Helpers\CategoryBase;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $all_cats = CategoryBase::get_all_cat();

        $categories = [];

        foreach($all_cats as $top_cat) {

            $categories[] = [
                "id" => $top_cat['id'],
                "parentid" => 0,
                "name" => $top_cat['name'],
                "slug" => Str::slug((string)$top_cat['name'])."-".$top_cat['id'],
                "description" => "",
                "title_seo" => $top_cat['name']." - Купить с доставкой по России",
                "description_seo" => $top_cat['name']." - Купить с доставкой по России"
            ];

            foreach ($top_cat['subcat'] as $sub_cat) {
                $categories[] = [
                    "id" => $sub_cat['id'],
                    "parentid" => $top_cat['id'],
                    "name" => $sub_cat['name'],
                    "slug" => Str::slug((string)$sub_cat['name'])."-".$sub_cat['id'],
                    "description" => "",
                    "title_seo" => $sub_cat['name']." - Купить с доставкой по России",
                    "description_seo" => $sub_cat['name']." - Купить с доставкой по России"
                ];

                if (isset($sub_cat['subcat']))
                foreach ($sub_cat['subcat'] as $subsub_cat) {
                    $categories[] = [
                        "id" => $subsub_cat['id'],
                        "parentid" => $sub_cat['id'],
                        "name" => $subsub_cat['name'],
                        "slug" => Str::slug((string)$subsub_cat['name'])."-".$subsub_cat['id'],
                        "description" => "",
                        "title_seo" => $subsub_cat['name']." - Купить с доставкой по России",
                        "description_seo" => $subsub_cat['name']." - Купить с доставкой по России"
                    ];
                }

            }

        }


        foreach (array_chunk($categories, 1000) as $t)
        {
            DB::table("categories")->insert($t);
        }
    }
}
