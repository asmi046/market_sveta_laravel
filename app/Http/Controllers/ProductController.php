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

        if (Storage::disk('local')->exists('public/products_galery/'.$prosuct->img))
            $main_img = Storage::url('public/products_galery/'.$prosuct->img);

        return ["product" => $prosuct, "main_img" => $main_img];
    }

    public function index($slug) {
        $prosuct = Product::where('slug', $slug)->take(1)->get();

        if($prosuct->isEmpty()) abort('404');

        $images = $prosuct->first()->product_images;
        $propertys = property_section($prosuct->first()->product_propertys);
        $categories_name = [
            "cat1" => $prosuct->first()->cat_name_cat1,
            "cat2" => $prosuct->first()->cat_name_cat2,
            "cat3" => $prosuct->first()->cat_name_cat3,
            "cat4" => $prosuct->first()->cat_name_cat4,
        ];

        if (!empty($prosuct[0]->collection))
            $up_sale = Product::where('collection', $prosuct[0]->collection)->where('brand', $prosuct[0]->brand)->get();
        else
            $up_sale = [];


        return view("product", ["product" => $prosuct, "images" => $images, "propertys" => $propertys, "catnames" =>  $categories_name, "upsale" => $up_sale]);
    }
}
