<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class IndexController extends Controller
{
    public function index() {

        $salesElements = Product::where('price_old','!=', 0)->inRandomOrder()->take(8)->get();
        // dd($salesElements);
        return view('index', ["sale_elements" => $salesElements]);
    }
}
