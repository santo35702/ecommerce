<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Category;
use Illuminate\Http\Request;

class AddCategoryPage extends Component
{
    public $name;
    public $slug;
    public $description;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function addNewItem(Request $request)
    {
        $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->description = $this->description;
        $category->save();
        $request->session()->flash('status', 'Categories has been created successful!');
    }

    public function render()
    {
        return view('livewire.admin.add-category-page')->layout('layouts.admin');
    }
}
