<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;

class AdminProductPage extends Component
{
    public function render()
    {
        $products = Product::get();
        return view('livewire.admin.admin-product-page', ['products' => $products])->layout('layouts.admin');
    }
}
