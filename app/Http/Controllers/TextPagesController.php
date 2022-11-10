<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Stock;

class TextPagesController extends Controller
{
    public function opt_sotrudnihestvo() {
        return view('opt_sotrudnihestvo');
    }

    public function pay() {
        return view('pay');
    }

    public function aktsii() {
        $all_stick = Stock::all();
        return view('aktsii', ["stocks" => $all_stick]);
    }

    public function brands() {
        return view('brands');
    }

    public function about() {
        return view('about');
    }
    
    public function dostavka() {
        return view('dostavka');
    }
    
    public function vozvrat() {
        return view('vozvrat');
    }
    
    public function policy() {
        return view('policy');
    }
}
