<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class CompareProduct extends Component
{
    public function render()
    {
        return view('livewire.frontend.compare-product')->layout('layouts.base');
    }
}
