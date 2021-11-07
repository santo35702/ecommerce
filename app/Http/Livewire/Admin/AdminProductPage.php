<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminProductPage extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-product-page')->layout('layouts.admin');
    }
}
