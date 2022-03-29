<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    // public $products;

    public function mount()
    {
        // $this->products = Product::all();
    }

    public function render()
    {
        return view('livewire.products.index', [
            'products' => Product::paginate(10),
        ])->layoutData(['title' => 'Onze producten']);
    }
}
