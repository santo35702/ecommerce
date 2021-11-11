<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Auth;

class AddProductPage extends Component
{
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $sku;
    public $stock_status;
    public $featured;
    public $quantity;
    public $regular_price;
    public $image;
    public $sale_price;
    public $category_id;
    public $brand_id;

    public function mount()
    {
        $this->stock_status = 'instock';
        $this->featured = 0;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    public function addNewItem(Request $request)
    {
        $product = new Product();
        // if exiting brand found
            // show error message == brand already apc_exists
        // else (this is new brand)
            // add this brand and show success message;
        $product->title = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->sku = $this->sku;
        $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        $product->quantity = $this->quantity;
        $product->regular_price = $this->regular_price;
        $imageName = Carbon::now()->timestamp() . '.' . $this->image->extension();
        $this->image->storeAs('products', $imageName);
        $product->image = $imageName;
        $product->sale_price = $this->sale_price;
        $product->category_id = $this->category_id;
        $product->brand_id = $this->brand_id;
        $product->user_id = Auth::user()->id;
        $product->save();
        $request->session()->flash('status', 'Product has been created successfully!');
    }

    public function render()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('livewire.admin.add-product-page', ['categories' => $categories, 'brands' => $brands])->layout('layouts.admin');
    }
}
