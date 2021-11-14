<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\HomeSlider;
use Livewire\WithFileUploads;

class CarouselAddPage extends Component
{
    use WithFileUploads;

    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $image;
    public $status;

    public function mount()
    {
        $this->status = 0;
    }

    public function addNewItem(Request $request)
    {
        $carousel = new HomeSlider();
        $carousel->title = $this->title;
        $carousel->subtitle = $this->subtitle;
        $carousel->price = $this->price;
        $carousel->link = $this->link;
        $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('slideshow-banners', $imageName);
        $carousel->image = $imageName;
        $carousel->status = $this->status;
        $carousel->save();
        $request->session()->flash('status', 'Carousel has been created successful!');
    }

    public function render()
    {
        return view('livewire.admin.carousel-add-page')->layout('layouts.admin');
    }
}
