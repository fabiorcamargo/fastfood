<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class GalleryItens extends Component
{
    public $products;

    public function mount($products){
        $this->products =  $products;
    }

    public function render()
    {
        return view('livewire.gallery-itens');
    }
}
