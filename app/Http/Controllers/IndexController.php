<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class IndexController extends Controller
{
    public function index() {

        $salesElements = Product::where('price_old','!=', 0)->inRandomOrder()->take(10)->get();

        $newTovar = Product::where('new','!=', 0)->inRandomOrder()->take(6)->get();
        if (count($newTovar) == 0)
            $newTovar = Product::where('price','>', 5000)->inRandomOrder()->take(6)->get();
        // dd($salesElements);
        return view('index', ["sale_elements" => $salesElements, 'new_tovar' => $newTovar]);
    }
}
