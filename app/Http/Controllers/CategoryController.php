<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;

use App\Filters\ProductFilter;

class CategoryController extends Controller
{
    public function index($slug, ProductFilter $request) {
        // dd($request->request->query);
        $categoryInfo = Category::where('slug', $slug)->take(1)->get();



        if($categoryInfo->isEmpty()) abort('404');

        $categoryInfo = $categoryInfo[0];

        $subcat_info1 = Category::where('id', $categoryInfo->parentid)->first();
        $subcat_info2 = null;
        if (!empty($subcat_info1->parentid))
            $subcat_info2 = Category::where('id', $subcat_info1->parentid)->first();

        $subCat = Category::where('parentid', $categoryInfo->id)->get();


        $catProducts = $categoryInfo->category_tovars()->filter($request)->paginate(48)->withQueryString();

        // $catProducts = Product::where('cat1', $categoryInfo->baseid)
        // ->orWhere('cat2', $categoryInfo->baseid)
        // ->orWhere('cat3', $categoryInfo->baseid)
        // ->orWhere('cat4', $categoryInfo->baseid)->filter($request)->paginate(48)->withQueryString();

        // dd($categoryInfo, $catProducts, $subCat, $categoryInfo->baseid);

        return view('category', ["category" => $categoryInfo, "cat_product" => $catProducts, "sub_cat" => $subCat, "bc1" => $subcat_info1, "bc2" => $subcat_info2]);
    }
}
