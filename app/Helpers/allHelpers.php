<?php
use Illuminate\Support\Str;

use Illuminate\Support\Facades\DB;

use App\Helpers\CategoryBase;

if (!function_exists("first_upper")) {

    function first_upper($str, $encoding='UTF-8') {
        $str = mb_ereg_replace('^[\ ]+', '', $str);
        $str = mb_strtoupper(mb_substr($str, 0, 1, $encoding), $encoding).
               mb_substr($str, 1, mb_strlen($str), $encoding);
        return $str;
    }

}

if (!function_exists("property_section")) {
    function property_section($propertys) {
        $result_array = [];

        $partArray = [
            "Основные" => ["Бренд", "Степень защиты ip", "Страна происхождения","Коллекция", "Артикул"],
            "Внешний вид" => ["Стиль", "Форма", "Цвет арматуры","Коллекция", "Цвет плафона"],
            "Материалы" => ["Материал арматуры", "Материал плафона"],
            "Размеры" => ["Ширина/диаметр", "Высота"],
            "Лампы" => ["Тип лампы", "Мощность лампы", "Мощность общая", "Напряжение", "Количество ламп", "Тип цоколя", "Лампы в комплекте", "Подсветка"],
            "Упаковка" => ["Количество грузовых мест", "Объем коробки", "Вес коробки", "Размер коробки (ДхШхВ)"],
        ];

        for ($i = 0; $i<count($propertys); $i++) {

            if (in_array(first_upper($propertys[$i]->name), $partArray["Основные"]))
            {
                $result_array["Основные"][] = $propertys[$i];
                continue;
            }

            if (in_array(first_upper($propertys[$i]->name), $partArray["Внешний вид"]))
            {
                $result_array["Внешний вид"][] = $propertys[$i];
                continue;
            }

            if (in_array(first_upper($propertys[$i]->name), $partArray["Материалы"]))
            {
                $result_array["Материалы"][] = $propertys[$i];
                continue;
            }

            if (in_array(first_upper($propertys[$i]->name), $partArray["Размеры"]))
            {
                $result_array["Размеры"][] = $propertys[$i];
                continue;
            }

            if (in_array(first_upper($propertys[$i]->name), $partArray["Лампы"]))
            {
                $result_array["Лампы"][] = $propertys[$i];
                continue;
            }

            if (in_array(first_upper($propertys[$i]->name), $partArray["Упаковка"]))
            {
                $result_array["Упаковка"][] = $propertys[$i];
                continue;
            }



            $result_array["Другие характеристики"][] = $propertys[$i];

        }

        return $result_array;
    }
}

if (!function_exists("get_cat_img_url")) {
    function get_cat_img_url($slug) {
        $allCatPhoto = [
            // "vlagozashhishhennye-tocecnye-svetilniki-2896" => "vlagozashhishhennye-tocecnye-svetilniki-2896.jpg",
            // "vstraivaemye-tocecnye-svetilniki-2897" => "vstraivaemye-tocecnye-svetilniki-2897.jpg",
            // "nakladnye-tocecnye-svetilniki-2898" => "nakladnye-tocecnye-svetilniki-2898.jpg",
        ];

        return (!empty($allCatPhoto[$slug]))?asset('img/category_img/'.$allCatPhoto[$slug]):asset('img/no_photo.jpg');
    }
}

if (!function_exists("add_category_in_file")) {
    function add_category_in_file($file_url) {
        $xmlFile = file_get_contents($file_url);
        $xmlObject = simplexml_load_string($xmlFile);
        $jsonFormatData = json_encode($xmlObject);
        $result = json_decode($jsonFormatData, false);

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

            echo (string)$xmlObject->shop->categories->category[$i]."\n\r";
        }

        foreach (array_chunk($categories, 1000) as $t)
        {
            DB::table("categorys")->insert($t);
        }

    }
}

if (!function_exists("add_tovar_in_file")) {
    function add_tovar_in_file($file_url, $load_img=true) {
        $xmlFile = file_get_contents($file_url);
        $xmlObject = simplexml_load_string($xmlFile);
        $jsonFormatData = json_encode($xmlObject);
        $result = json_decode($jsonFormatData, false);

        $result = [];
        $params = [];
        $pictures = [];

        $Place = [];
        $Style = [];
        $Material = [];
        $Brand = [];

        $all_cat = [];

        for  ($i = 0; $i < count($xmlObject->shop->categories->category); $i++)
        {
            $all_cat[(string)$xmlObject->shop->categories->category[$i]["id"]] = ["name" => (string)$xmlObject->shop->categories->category[$i], "baseid" => (string)$xmlObject->shop->categories->category[$i]["id"], "parentId" => (string)$xmlObject->shop->categories->category[$i]["parentId"]];

        }

        for ($i = 0; $i < count($xmlObject->shop->offers->offer); $i++)
        {

            $cat1 = $all_cat[(int)$xmlObject->shop->offers->offer[$i]->categoryId];

            $price_to = 1000 + rand(100, 8000);
            $tmp = [
                "name" => (string)trim($xmlObject->shop->offers->offer[$i]->name),
                "slug" => Str::slug($xmlObject->shop->offers->offer[$i]->name, '-'),
                "price" => $price_to,
                "price_old" => !empty(rand(0,1))?$price_to+rand(100, 2800):0,
                "manufacture_status" => "В наличии",
                "insklad" => (int)$xmlObject->shop->offers->offer[$i]->quantity,
                "sku" => (string)trim($xmlObject->shop->offers->offer[$i]->vendorCode),
                "brand" => (string)trim($xmlObject->shop->offers->offer[$i]->vendor),
                "state" => "",
                "collection" => "",
                "style" => "",
                "form" => "",
                "arm_color" => "",
                "plaf_color" => "",
                "arm_material" => "",
                "plaf_material" => "",
                "mesto" => "",
                "quote" => (string)trim($xmlObject->shop->offers->offer[$i]->name),
                "description" => "Купить по выгодной цене - ".(string)trim($xmlObject->shop->offers->offer[$i]->name),
                "cat1" => (int)$cat1["baseid"],
                "img" => "",
                "title_seo" => mb_substr((string)trim($xmlObject->shop->offers->offer[$i]->name), 0, 99),
                "description_seo" => mb_substr("Купить по выгодной цене - ".(string)trim($xmlObject->shop->offers->offer[$i]->name), 0, 299),
                "img_sku" => (string)trim($xmlObject->shop->offers->offer[$i]->vendorCode)."_".(string)trim($xmlObject->shop->offers->offer[$i]->vendor),
            ];

            $Brand[] = [
                "brand" => first_upper((string)trim($xmlObject->shop->offers->offer[$i]->vendor)),
                "slug" => Str::slug((string)trim($xmlObject->shop->offers->offer[$i]->vendor)),
                "title" => "Товары бренда ".(string)trim($xmlObject->shop->offers->offer[$i]->vendor),
                "title_seo" => "Товары бренда ".(string)trim($xmlObject->shop->offers->offer[$i]->vendor),
                "description_seo" => "Купить товары бренда ".(string)trim($xmlObject->shop->offers->offer[$i]->vendor)." в магазине Market-Sveta"
            ];


            for ($j = 0; $j<count($xmlObject->shop->offers->offer[$i]->param); $j++)
            {
                $name = first_upper((string)trim($xmlObject->shop->offers->offer[$i]->param[$j]["name"]));
                $value = (string)trim($xmlObject->shop->offers->offer[$i]->param[$j]);

                $params[] = [
                    "product_sku" => (string)trim($xmlObject->shop->offers->offer[$i]->vendorCode),
                    "name" => $name,
                    "value" => $value,
                    "subcat" => "",
                ];



                if ($name === "Страна происхождения") $tmp["state"] = $value;
                if ($name === "Коллекция") $tmp["collection"] = $value;
                if ($name === "Стиль") {
                    $tmp["style"] = $value;
                    $Style[] = [
                        "style" => first_upper($value),
                        "slug" => Str::slug($value),
                        "title" => "Светильники в стиле: ".first_upper($value),
                        "title_seo" => "Светильники в стиле: ".first_upper($value),
                        "description_seo" => "Купить cветильники в стиле: ".$value." в магазине Market-Sveta"
                    ];
                }
                if ($name === "Форма") $tmp["form"] = $value;
                if ($name === "Цвет арматуры") $tmp["arm_color"] = $value;
                if ($name === "Цвет плафона") $tmp["plaf_color"] = $value;
                if ($name === "Материал арматуры") {
                    $tmp["arm_material"] = $value;
                    $Material[] = [
                        "material" => first_upper($value),
                        "slug" => Str::slug($value),
                        "title" => "Светильники в материале - ".first_upper($value),
                        "title_seo" => "Светильники в материале - ".first_upper($value),
                        "description_seo" => "Купить cветильники в материале - ".first_upper($value)." в магазине Market-Sveta"
                    ];
                }

                if ($name === "Материал плафона") $tmp["plaf_material"] = $value;
                if ($name === "Назначение помещения") {
                    $tmp["mesto"] = $value;

                    $Place[] = [
                        "mesto" => first_upper($value),
                        "slug" => Str::slug($value),
                        "title" => "Светильники для ".first_upper($value),
                        "title_seo" => "Светильники для ".first_upper($value),
                        "description_seo" => "Купить Светильники для ".first_upper($value)." в магазине Market-Sveta"
                    ];
                }
            }

                for ($j = 0; $j<count($xmlObject->shop->offers->offer[$i]->picture); $j++)
                {
                    $ext = pathinfo($xmlObject->shop->offers->offer[$i]->picture[$j], PATHINFO_EXTENSION);
                    $img_name = (string)trim($xmlObject->shop->offers->offer[$i]->vendorCode)."_".(string)trim($xmlObject->shop->offers->offer[$i]->vendor)."_".$j.".".$ext;

                    if ($j == 0) $tmp["img"] = $img_name;
                    $pictures[] = [
                        "product_sku" => (string)trim($xmlObject->shop->offers->offer[$i]->vendorCode),
                        "img_sku" => (string)trim($xmlObject->shop->offers->offer[$i]->vendorCode)."_".(string)trim($xmlObject->shop->offers->offer[$i]->vendor),
                        "img_name" => $img_name,
                        "alt" => (string)trim($xmlObject->shop->offers->offer[$i]->name) . " Изображение №" . ($j + 1),
                        "title" => (string)trim($xmlObject->shop->offers->offer[$i]->name) . " Изображение №" . ($j + 1),
                        "order" => $j,
                    ];

                    if ($load_img)
                        try {
                            // Storage::disk('local')->put("public/products_galery/"  . $img_name, file_get_contents($xmlObject->shop->offers->offer[$i]->picture[$j]), 'public');
                            Storage::disk('public')->put($img_name, file_get_contents($xmlObject->shop->offers->offer[$i]->picture[$j]), 'public');
                        } catch (Exception $e) {
                            echo 'Caught exception: ',  $e->getMessage(), "\n";
                        }
                }



            $result[] = $tmp;

            // var_dump($result);


            echo (string)$file_url."\n\r";
            echo (string)$xmlObject->shop->offers->offer[$i]->name."\n\r";
            echo "sku: ".(string)trim($xmlObject->shop->offers->offer[$i]->vendorCode) ."\n\r";
            echo "Параметров: ".count($xmlObject->shop->offers->offer[$i]->param)."\n\r";
            echo "Картинок: ".count($xmlObject->shop->offers->offer[$i]->picture)."\n\r";
            echo "---------\n\r";

            // if ($i == 2) break;
        }


        foreach (array_chunk($result, 1000) as $t)
        {
            DB::table("products")->insert($t);
        }

        foreach (array_chunk($params, 1000) as $t)
        {
            DB::table("properties")->insert($t);
        }

        foreach (array_chunk($Place, 1000) as $t)
        {
            DB::table("places")->insertOrIgnore($t);
        }

        foreach (array_chunk($Style, 1000) as $t)
        {
            DB::table("styles")->insertOrIgnore($t);
        }

        foreach (array_chunk($Material, 1000) as $t)
        {
            DB::table("materials")->insertOrIgnore($t);
        }

        foreach (array_chunk($Brand, 1000) as $t)
        {
            DB::table("brands")->insertOrIgnore($t);
        }

        foreach (array_chunk($pictures, 1000) as $t)
        {
            DB::table("images")->insert($t);
        }

    }
}

if (!function_exists("add_picture")) {
    function add_picture($file_url) {
        $xmlFile = file_get_contents($file_url);
        $xmlObject = simplexml_load_string($xmlFile);
        $jsonFormatData = json_encode($xmlObject);
        $result = json_decode($jsonFormatData, false);

        $pictures = [];


        for ($i = 0; $i < count($xmlObject->shop->offers->offer); $i++)
        {
                for ($j = 0; $j<count($xmlObject->shop->offers->offer[$i]->picture); $j++)
                {
                    $ext = pathinfo($xmlObject->shop->offers->offer[$i]->picture[$j], PATHINFO_EXTENSION);
                    $img_name = (string)$xmlObject->shop->offers->offer[$i]->vendorCode."_".$j.".".$ext;
                    Storage::disk('local')->put("public/products_galery/"  . $img_name, file_get_contents($xmlObject->shop->offers->offer[$i]->picture[$j]), 'public');
                }


            echo (string)$file_url."\n\r";
            echo (string)$xmlObject->shop->offers->offer[$i]->name."\n\r";
            echo "sku: ".(string)$xmlObject->shop->offers->offer[$i]->vendorCode ."\n\r";
            echo "Картинок: ".count($xmlObject->shop->offers->offer[$i]->picture)."\n\r";
            echo "---------\n\r";

            // if ($i == 2) break;
        }

    }
}



if (!function_exists("get_submenu_puncts")) {
    function get_submenu_puncts($puncts) {
        $reault = [];

        foreach ($puncts as $item) {
            $reault[$item->sub_punct][] = $item;
        }

        return $reault;
    }
}


?>
