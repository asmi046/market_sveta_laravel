<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;

use App\Filters\ProductFilter;

class SalesController extends Controller
{
    public function index(ProductFilter $request) {


        if ($request->request->get("order"))
            $catProducts = Product::where("price_old", "!=", 0)->filter($request)->paginate(48)->withQueryString();
        else
            $catProducts = Product::where("price_old", "!=", 0)->filter($request)->orderByRaw("`insklad` DESC, `price` ASC")->paginate(48)->withQueryString();

        return view('sales', ["cat_product" => $catProducts]);
    }
}
