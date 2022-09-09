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
        
        dd($prosuct, $prosuct->first(), $images, $propertys);

        return view("product", ["product" => $prosuct, "images" => $images, "propertys" => $propertys]);
    }
}
