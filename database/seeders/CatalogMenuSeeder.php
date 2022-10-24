<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatalogMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $all_banners = [
            [
                "order" => 1,
                "title" => "Люстры",
                "link" => "/category/potolocnye-liustry-2868",
            ],
            
            [
                "order" => 2,
                "title" => "Светильники",
                "link" => "/category/potolocnye-svetilniki-2872",
            ],

            [
                "order" => 3,
                "title" => "Бра",
                "link" => "/category/nastennye-bra-2864",
            ],
        ];

        DB::table("catalog_menus")->insert($all_banners);
    }
}
