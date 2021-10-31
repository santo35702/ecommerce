<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Cart;
use Illuminate\Http\Request;

class ProductListPage extends Component
{
    public $sorting;
    public $pagesize;

    public function mount()
    {
        $this->sorting = "default";
        $this->pagesize = 10;
    }

    public function store($product_id, $product_name, $product_price, Request $request)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        $request->session()->flash('status', 'Product add to Cart successful!');
        return redirect()->route('cart');
    }

    public function render()
    {
        if ($this->sorting == 'name-asc') {
            $products = Product::orderBy('title', 'ASC')->paginate($this->pagesize);
        } else if ($this->sorting == 'name-desc') {
            $products = Product::orderBy('title', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting == 'price-asc') {
            $products = Product::orderBy('regular_price', 'ASC')->paginate($this->pagesize);
        } else if ($this->sorting == 'price-desc') {
            $products = Product::orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting == 'date-asc') {
            $products = Product::orderBy('created_at', 'ASC')->paginate($this->pagesize);
        } else if ($this->sorting == 'date-desc') {
            $products = Product::orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } else {
            $products = Product::paginate($this->pagesize);
        }
        
        $categories = Category::orderBy('name', 'asc')->get();
        $brands = Brand::orderBy('name', 'asc')->get();
        $popular_products = Product::inRandomOrder()->limit(5)->get();
        return view('livewire.frontend.product-list-page', ['products' => $products, 'categories' => $categories, 'brands' => $brands, 'popular_products' => $popular_products])->layout('layouts.base');
    }
}
