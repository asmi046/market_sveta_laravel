<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $xmlFile = file_get_contents('https://marketsveta.su/product_base/xml/119047.xml');
        $xmlObject = simplexml_load_string($xmlFile);
        $jsonFormatData = json_encode($xmlObject);
        $result = json_decode($jsonFormatData, false);

        // for ($i = 0;  $i < count($result["shop"]["categories"]); $i++)
        // var_dump($result["shop"]["offers"]["offer"][0]["name"]);

        $all_cat = []; 
        for  ($i = 0; $i < count($xmlObject->shop->categories->category); $i++)
            $all_cat[(string)$xmlObject->shop->categories->category[$i]["id"]] = ["name" => (string)$xmlObject->shop->categories->category[$i], "parentId" => (string)$xmlObject->shop->categories->category[$i]["parentId"]];

        for ($i = 0; $i < count($xmlObject->shop->offers->offer); $i++){
            echo (string)$xmlObject->shop->offers->offer[$i]->picture;
        }
    }
}
