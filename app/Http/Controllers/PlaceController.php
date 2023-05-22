<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;


use App\Filters\ProductFilter;

class PlaceController extends Controller
{
    public function index($slug, ProductFilter $request) {

        $placeInfo = Place::where('slug', $slug)->first();

        if($placeInfo == null) abort('404');


        // $subcat_info1 = Category::where('id', $categoryInfo->parentid)->first();
        // $subcat_info2 = null;
        // if (!empty($subcat_info1->parentid))
        //     $subcat_info2 = Category::where('id', $subcat_info1->parentid)->first();

        // $subCat = Category::where('parentid', $categoryInfo->id)->get();


        $placeProducts = $placeInfo->place_product()->filter($request)->orderByRaw("`insklad` DESC, `price` ASC")->paginate(48)->withQueryString();

        return view('place', ["place" => $placeInfo, "cat_product" => $placeProducts]);
    }
}
