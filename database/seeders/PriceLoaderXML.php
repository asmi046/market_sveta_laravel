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

        $price_patch = public_path('all_price/divine.xml');

        $xmlObject = simplexml_load_file($price_patch);

        $row = 0;
        foreach ($xmlObject->Worksheet->Table->Row as $key => $value) {
            if ($row === 0) {$row++; continue;}

            $old_pricr = empty($value->Cell[3]->Data)?0:$value->Cell[3]->Data;

            $rez = DB::table('products')->where('sku', $value->Cell[0]->Data)->update(['price' => $value->Cell[2]->Data, "insklad" => $value->Cell[4]->Data, "price_old" => $old_pricr]);
            echo  $row . ": " . $value->Cell[0]->Data ." - ".$rez."\n\r";

            // echo (string)$value->Cell[2]->Data ;
            $row++;
        }

    }
}
