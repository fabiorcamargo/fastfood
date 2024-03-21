<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class SessionBanner extends Component
{
    public $categories;
    public $search = '';
    public $products;

  

    public function render()
    {
        if ($this->search == '') {
            $this->categories = Category::all();
            $this->products = null; // Defina $products como null para não exibir a seção de pesquisa
        } else {
            $this->products = Product::where('name', 'like', "%{$this->search}%")->get();
        }

        return view('livewire.session-banner');
    }
}
