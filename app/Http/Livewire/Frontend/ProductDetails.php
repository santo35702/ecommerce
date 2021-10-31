<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Product;
use Cart;
use Illuminate\Http\Request;

class ProductDetails extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function store($product_id, $product_name, $product_price, Request $request)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        $request->session()->flash('status', 'Product add to Cart successful!');
        return redirect()->route('cart');
    }

    public function render()
    {
        $product = Product::where('slug', $this->slug)->first();
        $related_products = Product::where('category_id', $product->category_id)->orWhere('brand_id', $product->brand_id)->inRandomOrder()->limit(15)->get();
        return view('livewire.frontend.product-details', ['product' => $product, 'related_products' => $related_products])->layout('layouts.base');
    }
}
