<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Filters\ProductFilter;
use App\Models\Product;

class ApiIndexController extends Controller
{
    public function index() {
        return ["eee" => "rrrttt"];
    }

    public function get_category_filter($catid, Request $request) {
        $requMain = new Request();
        // $requMain->query->add(['style'=>'хай-тек']);

        $pf = new ProductFilter($requMain);
        $catProducts = Product::where('cat1', $catid)
        ->orWhere('cat2', $catid) 
        ->orWhere('cat3', $catid)
        ->orWhere('cat4', $catid)->filter($pf)->get();

        $brand = [];
        $style = [];
        $state = [];
        $forma = [];
        $arm_color = [];
        $plaf_color = [];
        $arm_material = [];
        $plaf_material = [];

        $max_price = 0;

        foreach ($catProducts as $elem) {
            if (!empty($elem->style))
                $style[$elem->style] = (empty($style[$elem->style]))?1:$style[$elem->style]+1; 
            
            if (!empty($elem->brand))
                $brand[$elem->brand] = (empty($brand[$elem->brand]))?1:$brand[$elem->brand]+1; 
            
            if (!empty($elem->state))
                $state[$elem->state] = (empty($state[$elem->state]))?1:$state[$elem->state]+1; 
            
            if (!empty($elem->forma))
                $forma[$elem->forma] = (empty($forma[$elem->forma]))?1:$forma[$elem->forma]+1; 
            
            if (!empty($elem->arm_color))
                $arm_color[$elem->arm_color] = (empty($arm_color[$elem->arm_color]))?1:$arm_color[$elem->arm_color]+1; 
            
            if (!empty($elem->plaf_color))
                $plaf_color[$elem->plaf_color] = (empty($plaf_color[$elem->plaf_color]))?1:$plaf_color[$elem->plaf_color]+1; 
            
            if (!empty($elem->arm_material))
                $arm_material[$elem->arm_material] = (empty($arm_material[$elem->arm_material]))?1:$arm_material[$elem->arm_material]+1; 
            
            if (!empty($elem->plaf_material))
                $plaf_material[$elem->plaf_material] = (empty($plaf_material[$elem->plaf_material]))?1:$plaf_material[$elem->plaf_material]+1; 
        
            if ($max_price < $elem->price) {
                $max_price = $elem->price;
            } 
        }
        
        $filter_zn["style"] = $style;
        $filter_zn["brand"] = $brand;
        $filter_zn["state"] = $state;
        $filter_zn["forma"] = $forma;
        $filter_zn["arm_color"] = $arm_color;
        $filter_zn["plaf_color"] = $plaf_color;
        $filter_zn["arm_material"] = $arm_material;
        $filter_zn["plaf_material"] = $plaf_material;
        $filter_zn["max_price"] = $max_price;

        return $filter_zn;
    }
}
