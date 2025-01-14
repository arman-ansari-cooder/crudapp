<?php

namespace App\Livewire;

use App\Models\ProductAdd;
use App\Models\Category;
use Livewire\Component;

class DisplayInformation extends Component
{

    public $editMode;
    public function render()
    {
        $categories = Category::all(); 
        $product = ProductAdd::all(); 
    
        return view('livewire.display-information', compact('product', 'categories'));
    }

    public function delete($id)
    {
        ProductAdd::findOrFail($id)->delete(); 

        session()->flash('message', 'Product deleted successfully!');
    }
    public function edit($id)
{
    $this->editMode = true; 
    $product = ProductAdd::find($id);

    
    $this->categories = Category::all();

   
    $this->productId = $product->id;
    $this->product = $product->product;
    $this->category = $product->category_id;
}


    public function updateProduct()
    {
        $this->validate([
            'product' => 'required|string|max:255',
            'category' => 'required|exists:categories,id',
        ]);

        $product = ProductAdd::find($this->productId);
        $product->update([
            'product' => $this->product,
            'category_id' => $this->category,
        ]);

        $this->editMode = false;
        session()->flash('message', 'Product updated successfully!');
    }
}
