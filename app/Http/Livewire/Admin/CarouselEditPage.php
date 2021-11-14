<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class CarouselEditPage extends Component
{
    public function render()
    {
        return view('livewire.admin.carousel-edit-page')->layout('layouts.admin');
    }
}
