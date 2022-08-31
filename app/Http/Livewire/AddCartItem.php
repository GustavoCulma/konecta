<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddCartItem extends Component
{

    //inicializando el contador
    public $product;
    public $quantity;
    public $qty = 1;
   

    //recuperar la propiedad quantity
    public function mount()
    {
        //cantidad del producto
        $this->quantity = $this->product->quantity;
    }

    // aumentar y disminuir el boton
    public function decrement()
    {
        $this->qty = $this->qty - 1;
    }

    public function increment()
    {
        $this->qty = $this->qty + 1;
    }
    public function render()
    {
        return view('livewire.add-cart-item');
    }
}
