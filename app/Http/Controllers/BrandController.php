<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Brand;

class BrandController extends Controller
{
    public function index() {
        $allBrand = Brand::select('*')->orderBy('brand')->get();
        $allBrandSort = [];

        foreach($allBrand as $element) {
            $allBrandSort[strtoupper(mb_substr($element["brand"], 0, 1))][] = $element; 
        }

        return view("brands", ["all_brands" => $allBrandSort]);
    }
}
