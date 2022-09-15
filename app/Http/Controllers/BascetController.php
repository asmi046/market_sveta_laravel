<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cart;

class BascetController extends Controller
{
    public function index() {
        return view("bascet");
    }

    public function add(Request $request) {
        $product_id = $request->input('product_id');
        $_token = $request->input('_token');
        
        Cart::add($product_id);

        return array($product_id, $_token);
    }

    public function get_all() {
        $cart_product = Cart::select("carts.*", "products.img", "products.name", "products.state", "products.brand")->leftJoin("products", "products.sku", "=", "carts.product_sku")->where("carts.session_id", session()->getId())->get(); 
        return $cart_product;
    }

    public function clear() { 
        return Cart::where("session_id", session()->getId())->delete(); 
    }
}
