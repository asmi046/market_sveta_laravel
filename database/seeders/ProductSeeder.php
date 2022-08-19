<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Str;

use DB;

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
        $params = [];
        $pictures = [];
        $categories = [];

        $all_cat = []; 
        for  ($i = 0; $i < count($xmlObject->shop->categories->category); $i++)
        {
            $all_cat[(string)$xmlObject->shop->categories->category[$i]["id"]] = ["name" => (string)$xmlObject->shop->categories->category[$i], "parentId" => (string)$xmlObject->shop->categories->category[$i]["parentId"]];
            
            $categories[] = [
                "baseid" => (int)$xmlObject->shop->categories->category[$i]["id"],
                "parentid" => (int)$xmlObject->shop->categories->category[$i]["parentId"],
                "name" => (string)$xmlObject->shop->categories->category[$i],
                "slug" => Str::slug((string)$xmlObject->shop->categories->category[$i])."-".(int)$xmlObject->shop->categories->category[$i]["id"],
                "description" => "",
                "title_seo" => (string)$xmlObject->shop->categories->category[$i]." - Купить с доставкой по России",
                "description_seo" => (string)$xmlObject->shop->categories->category[$i]." - Купить с доставкой по России"
            ];

        }

        for ($i = 0; $i < count($xmlObject->shop->offers->offer); $i++)
        {
            
            $cat1 = $all_cat[(int)$xmlObject->shop->offers->offer[$i]->categoryId];

            if (!empty($cat1["parentId"]))
                $cat2 = $all_cat[$cat1["parentId"]];
            
            if (!empty($cat2["parentId"]))
                $cat3 = $all_cat[$cat2["parentId"]];
            
            if (!empty($cat3["parentId"]))
                $cat4 = $all_cat[$cat3["parentId"]];
            
            $price_to = 1000 + rand(100, 8000);    
            $tmp = [
                "name" => (string)$xmlObject->shop->offers->offer[$i]->name,
                "slug" => Str::slug($xmlObject->shop->offers->offer[$i]->name, '-'),
                "price" => $price_to,
                "price_old" => !empty(rand(0,1))?$price_to+rand(100, 2800):0,
                "manufacture_status" => "В наличии",
                "insklad" => (int)$xmlObject->shop->offers->offer[$i]->quantity,
                "sku" => (string)$xmlObject->shop->offers->offer[$i]->vendorCode,
                "brand" => (string)$xmlObject->shop->offers->offer[$i]->vendor,
                "state" => "",
                "collection" => "",
                "style" => "",
                "form" => "",
                "arm_color" => "",
                "plaf_color" => "",
                "arm_material" => "",
                "plaf_material" => "",
                "mesto" => "",
                "quote" => (string)$xmlObject->shop->offers->offer[$i]->name,
                "description" => "Купить по выгодной цене - ".(string)$xmlObject->shop->offers->offer[$i]->name,
                "cat1" => (int)$cat1["parentId"],
                "cat2" => (!empty($cat2))?(int)$cat2["parentId"]:0,
                "cat3" => (!empty($cat3))?(int)$cat3["parentId"]:0,
                "cat4" => (!empty($cat4))?(int)$cat4["parentId"]:0,
                "img" => "",
                "title_seo" => (string)$xmlObject->shop->offers->offer[$i]->name,
                "description_seo" => "Купить по выгодной цене - ".(string)$xmlObject->shop->offers->offer[$i]->name,
            ];

            

            for ($j = 0; $j<count($xmlObject->shop->offers->offer[$i]->param); $j++) 
            {
                $name = first_upper((string)$xmlObject->shop->offers->offer[$i]->param[$j]["name"]);
                $value = (string)$xmlObject->shop->offers->offer[$i]->param[$j];
                
                $params[] = [
                    "product_sku" => (string)$xmlObject->shop->offers->offer[$i]->vendorCode,
                    "name" => $name,
                    "value" => $value,
                    "subcat" => "",
                ];
                if ($name === "Страна происхождения") $tmp["state"] = $value;
                if ($name === "Коллекция") $tmp["collection"] = $value;
                if ($name === "Стиль") $tmp["style"] = $value;
                if ($name === "Форма") $tmp["form"] = $value;
                if ($name === "Цвет арматуры") $tmp["arm_color"] = $value;
                if ($name === "Цвет плафона") $tmp["plaf_color"] = $value;
                if ($name === "Материал арматуры") $tmp["arm_material"] = $value;
                if ($name === "Материал плафона") $tmp["plaf_material"] = $value;
                if ($name === "Назначение помещения") $tmp["mesto"] = $value;
            }

                for ($j = 0; $j<count($xmlObject->shop->offers->offer[$i]->picture); $j++) 
                {
                    $ext = pathinfo($xmlObject->shop->offers->offer[$i]->picture[$j], PATHINFO_EXTENSION);
                    $img_name = (string)$xmlObject->shop->offers->offer[$i]->vendorCode."_".$j.".".$ext;
                    if ($j == 0) $tmp["img"] = $img_name; 
                    $pictures[] = [
                        "product_sku" => (string)$xmlObject->shop->offers->offer[$i]->vendorCode,
                        "img_name" => $img_name,
                        "alt" => (string)$xmlObject->shop->offers->offer[$i]->name . " Изображение №" . ($j + 1),
                        "title" => (string)$xmlObject->shop->offers->offer[$i]->name . " Изображение №" . ($j + 1),
                        "order" => $j,
                    ];

                    //Storage::disk('local')->put("public/products_galery/"  . $img_name, file_get_contents($xmlObject->shop->offers->offer[$i]->picture[$j]), 'public');
                }    

            

            $result[] = $tmp;

            // var_dump($result);

            
            echo (string)$xmlObject->shop->offers->offer[$i]->name."\n\r";
            echo "sku: ".(string)$xmlObject->shop->offers->offer[$i]->vendorCode ."\n\r";
            echo "Параметров: ".count($xmlObject->shop->offers->offer[$i]->param)."\n\r";
            echo "Картинок: ".count($xmlObject->shop->offers->offer[$i]->picture)."\n\r";
            echo "---------\n\r";
            
            // if ($i == 2) break;
        }

        DB::table("products")->insert($result);
        DB::table("properties")->insert($params);
        DB::table("images")->insert($pictures);
        DB::table("categorys")->insert($categories);

        // dd($result);
    }
}
