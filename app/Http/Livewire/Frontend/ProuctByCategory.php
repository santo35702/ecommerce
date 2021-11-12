<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Cart;
use Illuminate\Http\Request;

class ProuctByCategory extends Component
{
    public $sorting;
    public $pagesize;
    public $slug;

    public function mount($slug)
    {
        $this->sorting = "default";
        $this->pagesize = 20;
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
        $category = Category::where('slug', $this->slug)->first();
        $category_id = $category->id;

        if ($this->sorting == 'name-asc') {
            $products = Product::where('category_id', $category_id)->orderBy('title', 'ASC')->paginate($this->pagesize);
        } else if ($this->sorting == 'name-desc') {
            $products = Product::where('category_id', $category_id)->orderBy('title', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting == 'price-asc') {
            $products = Product::where('category_id', $category_id)->orderBy('regular_price', 'ASC')->paginate($this->pagesize);
        } else if ($this->sorting == 'price-desc') {
            $products = Product::where('category_id', $category_id)->orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting == 'date-asc') {
            $products = Product::where('category_id', $category_id)->orderBy('created_at', 'ASC')->paginate($this->pagesize);
        } else if ($this->sorting == 'date-desc') {
            $products = Product::where('category_id', $category_id)->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } else {
            $products = Product::where('category_id', $category_id)->paginate($this->pagesize);
        }

        $categories = Category::orderBy('name', 'asc')->get();
        $brands = Brand::orderBy('name', 'asc')->get();
        $popular_products = Product::inRandomOrder()->limit(5)->get();
        return view('livewire.frontend.prouct-by-category', ['products' => $products, 'categories' => $categories, 'brands' => $brands, 'popular_products' => $popular_products, 'category' => $category])->layout('layouts.base');
    }
}
