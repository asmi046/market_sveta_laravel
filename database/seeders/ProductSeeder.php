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
            $first_picture = $xmlObject->shop->offers->offer[$i]->picture;
            $first_picture = (is_array($first_picture))?(string)$first_picture[0]:(string)$first_picture;    
            
            $cat1 = $all_cat[(int)$xmlObject->shop->offers->offer[$i]->categoryId];

            if (!empty($cat1["parentId"]))
                $cat2 = $all_cat[$cat1["parentId"]];
            
            if (!empty($cat2["parentId"]))
                $cat3 = $all_cat[$cat2["parentId"]];
            
            if (!empty($cat3["parentId"]))
                $cat4 = $all_cat[$cat3["parentId"]];
                
            $tmp = [
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
                "quote" => (string)$xmlObject->shop->offers->offer[$i]->name,
                "description" => "Купить по выгодной цене - ".(string)$xmlObject->shop->offers->offer[$i]->name,
                "cat1" => $cat1["name"],
                "cat2" => (!empty($cat2))?$cat2["name"]:"",
                "cat3" => (!empty($cat3))?$cat3["name"]:"",
                "cat4" => (!empty($cat4))?$cat4["name"]:"",
                "img" => basename($first_picture),
                "title_seo" => (string)$xmlObject->shop->offers->offer[$i]->name,
                "description_seo" => "Купить по выгодной цене - ".(string)$xmlObject->shop->offers->offer[$i]->name,
            ];

            for ($j = 0; $j<count($xmlObject->shop->offers->offer->param); $j++) 
            {
                $name = first_upper((string)$xmlObject->shop->offers->offer->param[$j]["name"]);
                $value = (string)$xmlObject->shop->offers->offer->param[$j];
                echo $name." -> ".$value."\n\r";

                if ($name === "Страна происхождения") $tmp["state"] = $value;
                if ($name === "Коллекция") $tmp["collection"] = $value;
                if ($name === "Стиль") $tmp["style"] = $value;
            }

            $result[] = $tmp;

            var_dump($result);

            if ($i == 2) break;
        }

        // dd($result);
    }
}
