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


        if ($request->request->get("order"))
            $catProducts = $categoryInfo->category_tovars()->filter($request)->paginate(48)->withQueryString();
        else
            $catProducts = $categoryInfo->category_tovars()->filter($request)->orderByRaw("price, insklad")->paginate(48)->withQueryString();

        return view('category', ["category" => $categoryInfo, "cat_product" => $catProducts, "sub_cat" => $subCat, "bc1" => $subcat_info1, "bc2" => $subcat_info2]);
    }
}
