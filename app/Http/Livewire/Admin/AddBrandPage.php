<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Brand;
use Illuminate\Http\Request;
use Auth;

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
        // if exiting brand found
            // show error message == brand already apc_exists
        // else (this is new brand)
            // add this brand and show success message;
        $brand->user_id = Auth::user()->id;
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
