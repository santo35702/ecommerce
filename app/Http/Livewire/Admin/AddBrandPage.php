<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Brand;
use Illuminate\Http\Request;

class AddBrandPage extends Component
{
    public $name;
    public $slug;
    public $description;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function addNewItem(Request $request)
    {
        $brand = new Brand();
        $brand->name = $this->name;
        $brand->slug = $this->slug;
        $brand->description = $this->description;
        $brand->save();
        $request->session()->flash('status', 'Brand has been created successful!');
    }

    public function render()
    {
        return view('livewire.admin.add-brand-page')->layout('layouts.admin');
    }
}
