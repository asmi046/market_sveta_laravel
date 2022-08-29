<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PropertyPropertyMultySelect extends Component
{

    public $property_name;

    public $all_list;

    public $param_list = [];

    public $show = false;

    public $listeners = ['filterUpdatet'];

    public function toggleElement() {
        $this->show =! $this->show;
        
    }

    public function filterUpdatet($filterValues) {
        $this->param_list = $filterValues[$this->property_name];
        dd($this->property_name, $this->param_list);
    }

    public function mount() {
        $this->param_list = $this->all_list[$this->property_name];
    }
    
    public function render()
    {
        return view('livewire.property-property-multy-select');
    }


}
