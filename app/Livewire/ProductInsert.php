<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\ProductAdd;

class ProductInsert extends Component
{

    public $product;
   

    public function save()
    {
        $this->validate([
            'product' =>'required|string|min:3|max:255',
            'category' => 'required|string', 
        ]);
        ProductAdd::create([
            'product' => $this->product,
            'category_id' => $this->category,
        ]);
        session()->flash('message', 'Data Store successfully.');
    }
    public function render()
    {
           $categories = Category::all();
           return view('livewire.product-insert', compact('categories'));
    }

}

