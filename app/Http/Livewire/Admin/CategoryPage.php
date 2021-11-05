<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;

class CategoryPage extends Component
{
    public function render()
    {
        $categories = Category::get();
        return view('livewire.admin.category-page', ['categories' => $categories])->layout('layouts.admin');
    }
}
