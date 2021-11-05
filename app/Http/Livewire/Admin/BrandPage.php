<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Brand;

class BrandPage extends Component
{
    public function render()
    {
        $brands = Brand::paginate();
        return view('livewire.admin.brand-page', ['brands' => $brands])->layout('layouts.admin');
    }
}
