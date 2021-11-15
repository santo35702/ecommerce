<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandPage extends Component
{
    public function deleteItem($id, Request $request)
    {
        $brand = Brand::find($id);
        $brand->delete();
        $request->session()->flash('status', 'Brand has been deleted successfully!');
    }

    public function render()
    {
        $brands = Brand::get();
        return view('livewire.admin.brand-page', ['brands' => $brands])->layout('layouts.admin');
    }
}
