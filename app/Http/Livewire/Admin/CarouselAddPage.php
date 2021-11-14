<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class CarouselAddPage extends Component
{
    public function render()
    {
        return view('livewire.admin.carousel-add-page')->layout('layouts.admin');
    }
}
