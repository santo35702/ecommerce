<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class SalePage extends Component
{
    public function render()
    {
        return view('livewire.admin.sale-page')->layout('layouts.admin');
    }
}
