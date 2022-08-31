<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Support\Str;

use Livewire\Component;

class CreateProduct extends Component
{
    public $name;
    public $slug;
    public $reference;
    public $weight;
    public $price;
    public $categories;
    public $category_id;
    public $quantity;


    protected $rules = [
        'name' => 'required',
        'slug' => 'required|unique:products',
        'reference' => 'required',
        'weight' => 'required',
        'price' => 'required',
        'category_id' => 'required',
        'quantity' => 'required',
    ];

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function updatedName($value)
    {
        $this->slug = Str::slug($value);
    }


    public function save()
    {
        $rules = $this->rules;

        $this->validate($rules);
        $product = new Product();

        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->reference = $this->weight;
        $product->weight = $this->weight;
        $product->price = $this->price;
        $product->category_id = $this->category_id;
        $product->quantity = $this->quantity;

        $product->save();

        $this->reset([
            'name', 'slug', 'reference', 'weight','price','category_id', 'quantity'
        ]);

        return redirect()->route('admin.products.edit', $product);
    }


    public function render()
    {
        return view('livewire.admin.create-product')->layout('layouts.admin');
    }
}
