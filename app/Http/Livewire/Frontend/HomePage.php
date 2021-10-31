<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Brand;

class HomePage extends Component
{
    public function render()
    {
        $brands = Brand::inRandomOrder()->limit(10)->get();
        return view('livewire.frontend.home-page', ['brands' => $brands])->layout('layouts.base');
    }
}
