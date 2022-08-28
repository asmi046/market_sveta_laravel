<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PropertyPropertyMultySelect extends Component
{

    public $property_name;

    public $show = false;

    public function toggleElement() {
        $this->show =! $this->show;
        
    }

    public function render()
    {
        return view('livewire.property-property-multy-select');
    }


}
