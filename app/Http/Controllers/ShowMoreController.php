<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use App\Filters\ProductFilter;

use Illuminate\Support\Facades\Storage;

class ShowMoreController extends Controller
{
    public function index(ProductFilter $request) {
        $catId = $request->request->input('catid');
        $inpage = $request->request->input('inpage');
        $addcount = $request->request->input('addcount');


        $categoryInfo = Category::where('id', $catId)->first();

        if ($request->request->get("order"))
            $cat_product = $categoryInfo->category_tovars()->filter($request)->offset($inpage)->take($addcount)->get();
        else
            $cat_product = $categoryInfo->category_tovars()->filter($request)->orderByRaw("`insklad` DESC, `price` ASC")->offset($inpage)->take($addcount)->get();

        foreach ($cat_product as $item) {
            if(Storage::disk('public')->exists($item->img))
                $item['trueImgSrc'] = Storage::url($item->img);
            else $item['trueImgSrc'] = "";
            $item['trueLnk'] = route('product', $item->slug);
        }

        return ["product" => $cat_product];
    }
}
