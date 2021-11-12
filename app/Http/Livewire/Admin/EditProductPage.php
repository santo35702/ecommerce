<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;

class EditProductPage extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $product_slug;
    public $short_description;
    public $description;
    public $sku;
    public $stock_status;
    public $featured;
    public $quantity;
    public $regular_price;
    public $image;
    public $newimage;
    public $sale_price;
    public $category_id;
    public $brand_id;

    public function mount($product_slug)
    {
        $product = Product::where('slug', $product_slug)->first();
        $this->name = $product->title;
        $this->slug = $product->slug;
        $this->short_description = $product->short_description;
        $this->description = $product->description;
        $this->sku = $product->sku;
        $this->stock_status = $product->stock_status;
        $this->featured = $product->featured;
        $this->quantity = $product->quantity;
        $this->regular_price = $product->regular_price;
        $this->image = $product->image;
        $this->sale_price = $product->sale_price;
        $this->category_id = $product->category_id;
        $this->brand_id = $product->brand_id;
        $this->product_id = $product->id;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    public function UpdateProduct(Request $request)
    {
        $product = Product::find($this->product_id);
        $product->title = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->sku = $this->sku;
        $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        $product->quantity = $this->quantity;
        $product->regular_price = $this->regular_price;
        if ($this->newimage) {
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('product-images', $imageName);
            $product->image = $imageName;
        }
        $product->sale_price = $this->sale_price;
        $product->category_id = $this->category_id;
        $product->brand_id = $this->brand_id;
        $product->save();
        $request->session()->flash('status', 'Product has been updated successfully!');
    }

    public function render()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('livewire.admin.edit-product-page', ['categories' => $categories, 'brands' => $brands])->layout('layouts.admin');
    }
}
