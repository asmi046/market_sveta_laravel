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
}
