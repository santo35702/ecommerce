<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\HomeSlider;
use App\Models\HomeCategory;

class HomePage extends Component
{
    public function render()
    {
        $carousel = HomeSlider::where('status', 1)->inRandomOrder()->get();
        $new_arrival_all = Product::orderBy('created_at', 'Desc')->get()->take(10);
        $home_category = HomeCategory::find(1);
        $home_category_id = explode(',', $home_category->categories_name);
        $new_categories = Category::whereIn('id', $home_category_id)->get();
        $no_of_products = $home_category->no_of_products;
        $brands = Brand::inRandomOrder()->limit(10)->get();
        return view('livewire.frontend.home-page', ['carousel' => $carousel, 'new_arrival_all' => $new_arrival_all, 'new_categories' => $new_categories, 'no_of_products' => $no_of_products, 'brands' => $brands])->layout('layouts.base');
    }
}
