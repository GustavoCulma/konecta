<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;

class ShowProducts extends Component
{

    public $search;
    public function render()
    {
        //hola mundo

        $products = Product::where('name', 'like', '%')->paginate(10);

        return view('livewire.admin.show-products', compact('products'))->layout('layouts.admin');
    }
}
