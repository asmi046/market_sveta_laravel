<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class PriceLoaderXML extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ini_set('max_execution_time', 9000);

        $price_patch = public_path('all_price/18-stock.csv');

        if (($handle = fopen($price_patch, "r")) !== FALSE) {
            echo  $price_patch."\n\r";
            $row = 0;
            while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                if ($row == 0) {$row++; continue;}


                $old_pricr = empty($data[7])?0:$data[7];

                $rez = DB::table('products')->where('sku', $data[4])->where('brand', $data[5])->update(['price' => $data[6], "insklad" => $data[9], "price_old" => $old_pricr, "update" => true, "update_at" => date('Y-m-d')]);
                echo  $row . ": " . $data[4] ." ". $data[5]." => ". $data[6] ." - ".$rez."\n\r";

                $row++;

            }

            fclose($handle);
        }

    }
}
