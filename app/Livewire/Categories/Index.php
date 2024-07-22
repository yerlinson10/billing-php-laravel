<?php

namespace App\Livewire\Categories;

use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public $categories;
    #[Validate('required|unique:categories|max:255')]
    public $name;
    public function mount(){
        $this->categories = Category::with('user')->get();
    }
    public function refresh(){
        return $this->categories = Category::with('user')->get();
    }
    public function save(){
        $category = new Category;
        $category->user_id = Auth::id();
        $category->name = $this->name;
        $category->save();
        session()->flash('message', 'Category created successfully!');
        return $this->refresh();
    }

    public function render()
    {

        return view('livewire.categories.index');
    }
}
