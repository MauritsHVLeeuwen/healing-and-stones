<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class Show extends Component
{
    public $product;

    public function mount(Product $product)
    {
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.products.show')->layoutData(['title' => 'Product ' . $this->product->name]);
    }
}
