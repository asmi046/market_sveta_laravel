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

                $rez = DB::table('products')->where('sku', $data[4])->where('brand', $data[5])->update(['price' => $data[6], "insklad" => $data[9], "price_old" => $old_pricr]);
                echo  $row . ": " . $data[4] ." ". $data[5]." => ". $data[6] ." - ".$rez."\n\r";

                $row++;

            }

            fclose($handle);
        }

        // $xmlObject = simplexml_load_file($price_patch);
        // $xmlObject = simplexml_load_string(html_entity_decode(file_get_contents($price_patch)));


        // $row = 0;
        // foreach ($xmlObject->Worksheet->Table->Row as $key => $value) {
        //     if ($row === 0) {$row++; continue;}

        //     $old_pricr = empty($value->Cell[3]->Data)?0:$value->Cell[3]->Data;

        //     $rez = DB::table('products')->where('sku', $value->Cell[0]->Data)->update(['price' => $value->Cell[2]->Data, "insklad" => $value->Cell[4]->Data, "price_old" => $old_pricr]);
        //     echo  $row . ": " . $value->Cell[0]->Data ." - ".$rez."\n\r";

        //     // echo (string)$value->Cell[2]->Data ;
        //     $row++;
        // }

    }
}
