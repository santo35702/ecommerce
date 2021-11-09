<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class EditBrandPage extends Component
{
    public $brand_slug;
    public $name;
    public $slug;
    public $description;

    public function mount($brand_slug)
    {
        $this->brand_slug = $brand_slug;
        $brand = Brand::where('slug', $this->brand_slug)->first();
        $this->brand_id = $brand->id;
        $this->name = $brand->name;
        $this->slug = $brand->slug;
        $this->description = $brand->description;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updateBrand(Request $request)
    {
        $brand = Brand::find($this->brand_id);
        $brand->name = $this->name;
        $brand->slug = $this->slug;
        $brand->description = $this->description;
        $brand->save();
        $request->session()->flash('status', 'Brand has been updated successfully!');
    }

    public function render()
    {
        return view('livewire.admin.edit-brand-page')->layout('layouts.admin');
    }
}
