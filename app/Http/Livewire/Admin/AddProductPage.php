<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;

class AddProductPage extends Component
{
    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.add-product-page', ['categories' => $categories])->layout('layouts.admin');
    }
}
