<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function index($slug) {
        $prosuct = Product::where('slug', $slug)->take(1)->get();
        
        if($prosuct->isEmpty()) abort('404');

        $images = $prosuct->first()->product_images;
        $propertys = $prosuct->first()->product_propertys;
        $categories_name = [
            "cat1" => $prosuct->first()->cat_name_cat1,
            "cat2" => $prosuct->first()->cat_name_cat2,
            "cat3" => $prosuct->first()->cat_name_cat3,
            "cat4" => $prosuct->first()->cat_name_cat4,
        ];
        
        
        //  dd($categories_name["cat2"]->slug);

        return view("product", ["product" => $prosuct, "images" => $images, "propertys" => $propertys, "catnames" =>  $categories_name]);
    }
}
