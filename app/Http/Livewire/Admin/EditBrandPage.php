<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;

class EditBrandPage extends Component
{
    public $category_slug;
    public $name;
    public $slug;

    public function mount($category_slug)
    {
        $this->category_slug = $category_slug;
        $category = Category::where('slug', $this->category_slug)->first();
        $this->category_id = $category->id;
        $this->name = $category->name;
        $this->slug = $category->slug;
    }
    public function render()
    {
        return view('livewire.admin.edit-brand-page')->layout('layouts.admin');
    }
}
