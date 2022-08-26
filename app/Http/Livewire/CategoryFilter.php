<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use Illuminate\Http\Request;
use App\Filters\ProductFilter;

use App\Models\Product;

class CategoryFilter extends Component
{
    use WithPagination;
    
    public $cat_id;
    public $cat_name;
    public $sub_cat;

    public function get_filter() {
        $requMain = new Request();
        $requMain->query->add(['style'=>'хай-тек']);

        $pf = new ProductFilter($requMain);
        $catProducts = Product::where('cat1', $this->cat_id)
        ->orWhere('cat2', $this->cat_id)
        ->orWhere('cat3', $this->cat_id)
        ->orWhere('cat4', $this->cat_id)->filter($pf)->paginate(48);

        dd($requMain->query,  $sql, $catProducts);
    }

    public function render()
    {
        return view('livewire.category-filter');
    }
}
