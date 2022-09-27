<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Brand;

use App\Models\Product;
use App\Filters\ProductFilter;

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
    
    public function brand_page($slug, ProductFilter $request) {

        $brandInfo = Brand::where('slug', $slug)->take(1)->get();
        
        if($brandInfo->isEmpty()) abort('404');

        $brandInfo = $brandInfo[0];

        $brandProducts = Product::where('brand', $brandInfo->brand)->filter($request)->paginate(48)->withQueryString();


        return view("brandpage", ["brand" => $brandInfo, "brand_product" => $brandProducts]);
    }
}
