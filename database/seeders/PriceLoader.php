<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class PriceLoader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ini_set('max_execution_time', 9000);

        $dir = base_path() . '/public/all_price';
        $files = @scandir($dir,1);

        for ($i = 0; $i<count($files); $i++)
        if (($files[$i] !== ".")&&($files[$i] !== "..")&&(!empty($files[$i]))) {
            $row = 0;

            if (($handle = fopen($dir."/".$files[$i], "r")) !== FALSE) {
                echo  $files[$i]."\n\r";
                while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                    if ($row == 0) {$row++; continue;}

                        if (empty($data) || empty($data[0])) continue;

                        $sku = $data[0];
                        $count = $data[2];
                        $price = str_replace(",",".",$data[1]);

                        if (empty($sku)) continue;

                        $rez = DB::table('products')->where('sku', $sku)->update(['price' => $price, "insklad" => $count, "price_old" => 0]);


                        echo  $row . ": " . $sku." - ".$rez."\n\r";

                    $row++;
                }

            fclose($handle);
            // unlink($dir."/".$files[$i]);
            }
        }

    }
}
