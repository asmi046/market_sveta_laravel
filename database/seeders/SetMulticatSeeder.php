<?php


namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

use App\Helpers\CategoryBase;

use DB;

ini_set('memory_limit', '2048M');
ini_set('max_execution_time', '66000');


class SetMulticatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $product = Product::all();
        // $product = Product::where("id", "<", 10000)->get();
        $product = Product::where("id", ">", 10000)->get();


        echo "Данные загружены. ".count($product). "\n\r";

        $i = 1;
        foreach ($product as $prod) {
            echo $i." - id:".$prod['id']." - ".$prod['name'];
            $propertys = [];

            foreach ($prod->product_propertys as $prop)
                $propertys[$prop->name] = $prop->value;




            $result_cat = CategoryBase::get_cats_to_tovar($prod['cat1'], $prod['id'], $propertys);


            if (!empty($result_cat))
            {
                echo " - Есть категории\n\r";
                    DB::table("category_product")->insert($result_cat);

            } else echo " - НЕТ категорий\n\r";

            $i++;


        }
    }
}
