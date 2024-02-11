<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class Checkout extends Component
{
    public function render()
    {

        $product = Product::all();

        return view('livewire.checkout',[
            'product' => $product
        ])->title('Checkout');    
    }
}
