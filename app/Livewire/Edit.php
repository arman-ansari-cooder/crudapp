<?php

namespace App\Livewire;
use App\Models\ProductAdd;
use App\Models\Category;

use Livewire\Component;

class Edit extends Component
{

    public $product_name;
    public $category_id;
    public $product;
    public $categories;

    public function mount($id)
    {
        
        $this->product = ProductAdd::findOrFail($id);
        $this->product_name = $this->product->product;
        $this->category_id = $this->product->category_id;

        
        $this->categories = Category::all();
    }

    public function update()
    {
       
        $product = ProductAdd::findOrFail($this->product->id);
        $product->update([
            'product' => $this->product_name,
            'category_id' => $this->category_id,
        ]);

       
        session()->flash('message', 'Product updated successfully.');

      
        return redirect()->to('display');
    }
    public function render()
    {
        return view('livewire.edit');
    }
}
