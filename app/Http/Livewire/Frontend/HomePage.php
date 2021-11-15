<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Brand;
use App\Models\Product;
use App\Models\HomeSlider;

class HomePage extends Component
{
    public function render()
    {
        $carousel = HomeSlider::where('status', 1)->inRandomOrder()->get();
        $new_arrival_all = Product::orderBy('created_at', 'Desc')->get()->take(10);
        $brands = Brand::inRandomOrder()->limit(10)->get();
        return view('livewire.frontend.home-page', ['carousel' => $carousel, 'new_arrival_all' => $new_arrival_all, 'brands' => $brands])->layout('layouts.base');
    }
}
