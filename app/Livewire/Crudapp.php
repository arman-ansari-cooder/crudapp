<?php

namespace App\Livewire;

use Livewire\Component;

class Crudapp extends Component
{
    public $category;
    protected $rules = [
        'category' => 'required|string|min:3|max:255',
    ];

    public function submit()
    {
        
        $this->validate();

       
        session()->flash('message', 'Category submitted successfully.');
    }

    public function render()
    {
        return view('livewire.crudapp')->layout('components.layouts.app');
    }
}
