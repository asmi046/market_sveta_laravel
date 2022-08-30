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

    public $filter_zn = [];

    public function get_filter() {
        $requMain = new Request();
        // $requMain->query->add(['style'=>'хай-тек']);

        $pf = new ProductFilter($requMain);
        $catProducts = Product::where('cat1', $this->cat_id)
        ->orWhere('cat2', $this->cat_id)
        ->orWhere('cat3', $this->cat_id)
        ->orWhere('cat4', $this->cat_id)->filter($pf)->get();

        $style = [];
        foreach ($catProducts as $elem) {
            if (!empty($elem->style))
                $style[$elem->style] = (empty($style[$elem->style]))?1:$style[$elem->style]+1; 
        }
        
        $this->filter_zn["style"] = $style;
        
        $this->emit('filterUpdatet', $this->filter_zn);
    }

    public function do_do() {
        $this->emit('filterUpdatet', $this->filter_zn);
    }

    public function render()
    {

        return view('livewire.category-filter');
    }
}
