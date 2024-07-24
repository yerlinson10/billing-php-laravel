<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category as CategoryModel;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class Category extends Component
{
    public $categories;
    public $categoryCreate = [
        'name' => ''
    ];
    public $name;
    public function mount(){
        $this->categories = CategoryModel::with('user')->get();
    }
    public function refresh(){
        return $this->categories = CategoryModel::with('user')->get();
    }

    public function save(){
        $this->validate([
            'categoryCreate.name' => 'required|min:3|max:255|string',
        ]);
        try {
            // $this->validate();
            CategoryModel::create([
                'name' => $this->categoryCreate['name'],
                'user_id' => Auth::id()
            ]);

            $this->reset(['categoryCreate']);
            $this->refresh();
            $this->dispatch('category-created', ['status' => 'success']);
        } catch (\Throwable $th) {
            $this->dispatch('category-created', ['status' => 'error']);
        }
;
    }

    public function render()
    {

        return view('livewire.Category');
    }
}
