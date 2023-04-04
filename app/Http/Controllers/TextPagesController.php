<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Stock;
use App\Models\Brand;

class TextPagesController extends Controller
{
    public function opt_sotrudnihestvo() {
        $allBrand = Brand::select('*')->orderBy('brand')->get();
        $allBrandSort = [];

        foreach($allBrand as $element) {
            $allBrandSort[strtoupper(mb_substr($element["brand"], 0, 1))][] = $element;
        }

        return view('opt_sotrudnihestvo', ["all_brands" => $allBrandSort]);
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

    public function garantia() {
        return view('garantia');
    }

    public function podbor_po_foto() {
        return view('podbor_po_foto');
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

    public function for_designers() {
        return view('for-designers');
    }
}
