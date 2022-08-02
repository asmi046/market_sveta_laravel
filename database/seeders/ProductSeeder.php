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

        $result = [];
        $all_cat = []; 
        for  ($i = 0; $i < count($xmlObject->shop->categories->category); $i++)
            $all_cat[(string)$xmlObject->shop->categories->category[$i]["id"]] = ["name" => (string)$xmlObject->shop->categories->category[$i], "parentId" => (string)$xmlObject->shop->categories->category[$i]["parentId"]];

        for ($i = 0; $i < count($xmlObject->shop->offers->offer); $i++){
            $result[] = [
                "name" => (string)$xmlObject->shop->offers->offer[$i]->name,
                "price" => 1000,
                "price_old" => 1000,
                "manufacture_status" => "В наличии",
                "insklad" => (int)$xmlObject->shop->offers->offer[$i]->quantity,
                "sku" => (string)$xmlObject->shop->offers->offer[$i]->vendorCode,
                "brand" => (string)$xmlObject->shop->offers->offer[$i]->vendor,
                "state" => "",
                "collection" => "",
                "style" => "",
                "quote" => "",
                "description" => "",
                "cat1" => "",
                "cat2" => "",
                "cat3" => "",
                "img" => "",
                "title_seo" => "",
                "description_seo" => "",
            ];
        }

        dd($result);
    }
}
