<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Storage;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $all_stok = [
            [
                "slug" => Str::slug("Цены просто космос"),
                "title" => "Цены просто космос",
                "link" => "",
                "img" => "ac1.png",
                "end_data" => "До 30 октября",
                "description" => "",
                "title_seo" => "",
                "description_seo" => "",
            ],
            
            [
                "slug" => Str::slug("Осенняя распродажа до -60%"),
                "title" => "Осенняя распродажа до -60%",
                "link" => "",
                "img" => "ac2.png",
                "end_data" => "До 31 октября",
                "description" => "",
                "title_seo" => "",
                "description_seo" => "",
            ],
            
            [
                "slug" => Str::slug("Уютная осень с ST LUCE"),
                "title" => "Уютная осень с ST LUCE",
                "link" => "",
                "img" => "ac3.png",
                "end_data" => "До 31 октября",
                "description" => "",
                "title_seo" => "",
                "description_seo" => "",
            ],

                        
            [
                "slug" => Str::slug("Тренды за полцены"),
                "title" => "Тренды за полцены",
                "link" => "",
                "img" => "ac4.jpg",
                "end_data" => "До 30 октября",
                "description" => "",
                "title_seo" => "",
                "description_seo" => "",
            ],
        ];

        DB::table("stocks")->insert($all_stok);

        Storage::disk('local')->put("public/stock/ac1.png", file_get_contents("https://www.vamsvet.ru/upload/iblock/ac7/79p0nezr976xjbjjbor0b32v91tnwpk9/stilmob.png"), 'public');
        Storage::disk('local')->put("public/stock/ac2.png", file_get_contents("https://www.vamsvet.ru/upload/iblock/09d/92bsur9umi7cm3s6thhgtg4w8fgyfc0o/denkirs-4%20%281%29.png"), 'public');
        Storage::disk('local')->put("public/stock/ac3.png", file_get_contents("https://www.vamsvet.ru/upload/iblock/2e2/ho1mjuzcsd2uknvlwkdly599vc6950xa/stlgh.png"), 'public');
        Storage::disk('local')->put("public/stock/ac4.jpg", file_get_contents("https://www.vamsvet.ru/upload/iblock/a13/mo1bls6uy1l0p7jgfuu2k6dnnt53ak8d/450x330%20%281%29.jpg"), 'public');
    }
}
