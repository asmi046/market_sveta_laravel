<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index($slug) {
        $categoryInfo = Category::where('slug', $slug)->take(1)->get();
        
        if($categoryInfo->isEmpty()) abort('404');

        $categoryInfo = $categoryInfo[0];

        $subCat = Category::where('parentid', $categoryInfo->baseid)->get();

        $catProducts = Product::where('cat1', $categoryInfo->baseid)
        ->orWhere('cat2', $categoryInfo->baseid)
        ->orWhere('cat3', $categoryInfo->baseid)
        ->orWhere('cat4', $categoryInfo->baseid)->paginate(48);

        // dd($categoryInfo, $catProducts, $subCat, $categoryInfo->baseid);

        return view('category', ["category" => $categoryInfo, "cat_product" => $catProducts, "sub_cat" => $subCat]);
    }
}
