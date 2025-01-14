<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;


class Crudapp extends Component
{
    public $category;
    protected $rules = [
        'category' => 'required|string|min:3|max:255',
    ];

    public function save()
    {

        $this->validate([
            'category' => 'required|string|min:3|max:255', 
        ]);
        Category::create([
            'category' => $this->category,  // Save the input value
        ]);

        session()->flash('message', 'Category submitted successfully.');
    }

    public function render()
    {
        return view('livewire.crudapp');
    }

}

