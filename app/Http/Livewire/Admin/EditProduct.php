<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;

use Illuminate\Support\Str;
use Livewire\Component;

class EditProduct extends Component
{
    public $product;
    public $categories;

    public $category_id;

    protected $rules = [
        'product.name' => 'required',
        'product.slug' => 'required|unique:products',
        'product.reference' => 'required',
        'product.weight' => 'required',
        'product.price' => 'required',
        'category_id' => 'required',
        'product.quantity' => 'required',
    ];



    public function mount(Product $product)
    {
        $this->product = $product;

        $this->categories = Category::all();

        $this->slug = $this->product->slug;
    }

    public function refreshProduct()
    {
        $this->product = $this->product->fresh();
    }

    public function updatedProductName($value)
    {
        $this->product->slug = Str::slug($value);
    }

    public function save()
    {
        $rules = $this->rules;

        $rules['product.slug'] = 'required|unique:products,slug,' . $this->product->id;

        $this->validate($rules);
        $this->product->slug = $this->slug;
        $this->product->save();
    }

    public function render()
    {
        return view('livewire.admin.edit-product')->layout('layouts.admin');
    }
}
