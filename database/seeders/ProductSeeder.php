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
        dd((string)$xmlObject->shop->categories->category[0]); 
        // dd($result->shop->categories->category[0]); 
    }
}
