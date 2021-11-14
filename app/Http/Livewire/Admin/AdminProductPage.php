<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductPage extends Component
{
    public function deleteItem($id, Request $request)
    {
        $product = Product::find($id);
        $product->delete();
        $request->session()->flash('status', 'Product has been deleted successfully!');
    }
    
    public function render()
    {
        $products = Product::get();
        return view('livewire.admin.admin-product-page', ['products' => $products])->layout('layouts.admin');
    }
}
