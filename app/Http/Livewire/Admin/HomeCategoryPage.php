<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;

class HomeCategoryPage extends Component
{
    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.home-category-page', ['categories' => $categories])->layout('layouts.admin');
    }
}
