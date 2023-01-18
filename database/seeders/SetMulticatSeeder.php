<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

use App\Helpers\CategoryBase;

class SetMulticatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $product = Product::with("product_propertys")->get();
        $product = Product::all();

        echo "Данные загружены. \n\r";

        $i = 1;
        foreach ($product as $prod) {
            echo $i." - ".$prod['name'];
            $propertys = [];
            foreach ($prod->product_propertys as $prop)
                $propertys[$prop->name] = $prop->value;

            // print_r($propertys);

            // echo (isset($propertys["Выключатель"]))?$propertys["Выключатель"]:"-";
            // echo "\n\r";


            $result_cat = CategoryBase::get_cats_to_tovar($prod['cat1'], $prod['id'], $propertys);


            if (!empty($result_cat))
            {
                echo " - Есть категории\n\r";
                    var_dump($result_cat);
                    DB::table("category_product")->insert($result_cat);
            } else echo " - НЕТ категорий\n\r";

            $i++;
        }
    }
}
