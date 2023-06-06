<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Filters\ProductFilter;

class SearchController extends Controller
{
    public function index(ProductFilter $request) {

        $search_str = $request->request->input('search');

        $s_reault = Product::where("name", "LIKE", "%".$search_str."%")
        ->orWhere("description", "LIKE", "%".$search_str."%")
        ->orWhere("brand", "LIKE", "%".$search_str."%")
        ->orWhere("sku", "LIKE", "%".$search_str."%")
        ->orWhere("collection", "LIKE", "%".$search_str."%")
        ->filter($request)->paginate(48)->withQueryString();

        return view('search-page', ['search_str' => $search_str, "cat_product" => $s_reault]);
    }
}
