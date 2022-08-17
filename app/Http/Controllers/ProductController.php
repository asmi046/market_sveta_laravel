<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function index($slug) {
        $prosuct = Product::where('slug', $slug)->take(1)->get();

        if($prosuct->isEmpty()) abort('404');

        return view("product", ["product" => $prosuct]);
    }
}
