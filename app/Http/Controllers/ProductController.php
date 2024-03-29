<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function getPriductById($id) {
        $prosuct = Product::with("product_propertys")->where('id', $id)->first();

        $main_img = asset('img/no_photo.jpg');

        if (Storage::disk('public')->exists($prosuct->img))
            $main_img = Storage::url($prosuct->img);

        return ["product" => $prosuct, "main_img" => $main_img];
    }

    public function getPriductsById(Request $request) {
        $ids_list = $request->input('ids');
        $prosuct = Product::with("product_propertys")->whereIn('sku', $ids_list)->get();

        $main_img = asset('img/no_photo.jpg');

        foreach ($prosuct as $elem)
            if (Storage::disk('public')->exists($elem->img))
                $elem->img = Storage::url($elem->img);
            else $elem->img =  $main_img;

        return ["product" => $prosuct];
    }

    public function index($slug) {
        $prosuct = Product::with(['product_propertys', 'product_images'])->where('slug', $slug)->first();

        if($prosuct == null) abort('404');

        $images = $prosuct->product_images;

        $propertys = property_section($prosuct->product_propertys);
        $categories_name = [
            "cat1" => $prosuct->cat_name_cat1,
            "cat2" => $prosuct->cat_name_cat2,
            "cat3" => $prosuct->cat_name_cat3,
            "cat4" => $prosuct->cat_name_cat4,
        ];

        if (!empty($prosuct->collection))
            $up_sale = Product::where('collection', $prosuct->collection)->where('brand', $prosuct->brand)->get();
        else
            $up_sale = [];

        // dd($prosuct, $images,$propertys,$categories_name,$up_sale);

        return view("product", ["product" => $prosuct, "images" => $images, "propertys" => $propertys, "catnames" =>  $categories_name, "upsale" => $up_sale]);
    }
}
