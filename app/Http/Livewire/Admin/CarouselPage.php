<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\HomeSlider;

class CarouselPage extends Component
{
    public function render()
    {
        $carousel = HomeSlider::all();
        return view('livewire.admin.carousel-page', ['carousel' => $carousel])->layout('layouts.admin');
    }
}
