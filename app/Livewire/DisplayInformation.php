<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\ProductAdd;
use Livewire\Component;

class DisplayInformation extends Component
{

    public $editMode;
    public function render()
    {
        $product = ProductAdd::all();
        $Category = Category::all();

        return view('livewire.display-information', compact('product', 'Category'));
    }

    public function delete($id)
    {
        ProductAdd::findOrFail($id)->delete();

        session()->flash('message', 'Product deleted successfully!');
    }
    public function edit($id)
    {
        
        return redirect()->route('edit', ['id' => $id]);
    }
    


}
