<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Storage;

class CatsStructSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ur1 = DB::table("categorys")->select('*')->where("parentid", "=", 0)->get();

        foreach ($ur1 as $element) {
            echo $element->name."\n\r";
            $ur2 = DB::table("categorys")->select('*')->where("parentid", "=", $element->baseid)->get();

            foreach ($ur2 as $element_u2) {
                echo "    ".$element_u2->name."\n\r";
                $ur3 = DB::table("categorys")->select('*')->where("parentid", "=", $element_u2->baseid)->get();

                foreach ($ur3 as $element_u3) {
                    echo "        ".$element_u3->name."\n\r";

                    $ur4 = DB::table("categorys")->select('*')->where("parentid", "=", $element_u3->baseid)->get();

                    foreach ($ur4 as $element_u4) 
                        echo "           ".$element_u4->name."\n\r";
                }
            }

        }        
    }
}
