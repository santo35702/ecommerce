<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class CarouselPage extends Component
{
    public function render()
    {
        return view('livewire.admin.carousel-page')->layout('layouts.admin');
    }
}
