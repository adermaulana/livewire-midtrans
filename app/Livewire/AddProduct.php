<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Product;

class AddProduct extends Component
{

    use WithFileUploads;

    public $title = '';
    public $photo = '';
    public $color = '';
    public $size = '';
    public $stock = '';
    public $price = '';

    public function save(){

        $photoname = md5($this->photo . microtime()).'.'.$this->photo->extension();

        $this->photo->storeAs('photos', $photoname);

        Product::create([
            'title' => $this->title,
            'photo' => $photoname,
            'color' => $this->color,
            'size' => $this->size,
            'stock' => $this->stock,
            'price' => $this->price,
        ]);

        $this->redirect('/checkout');

    }

    public function render()
    {
        return view('livewire.add-product');
    }
}
