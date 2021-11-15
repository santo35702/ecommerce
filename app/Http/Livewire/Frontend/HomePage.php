<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Brand;
use App\Models\HomeSlider;

class HomePage extends Component
{
    public function render()
    {
        $carousel = HomeSlider::where('status', 1)->inRandomOrder()->get();
        $brands = Brand::inRandomOrder()->limit(10)->get();
        return view('livewire.frontend.home-page', ['brands' => $brands, 'carousel' => $carousel])->layout('layouts.base');
    }
}
