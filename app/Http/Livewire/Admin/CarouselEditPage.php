<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Livewire\WithFileUploads;
use App\Models\HomeSlider;

class CarouselEditPage extends Component
{
    use WithFileUploads;

    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $image;
    public $newimage;
    public $status;

    public function mount($id)
    {
        $carousel = HomeSlider::find($id);
        $this->id = $carousel->id;
        $this->title = $carousel->title;
        $this->subtitle = $carousel->subtitle;
        $this->price = $carousel->price;
        $this->link = $carousel->link;
        $this->image = $carousel->image;
        $this->status = $carousel->status;
    }

    public function updateItem(Request $request)
    {
        $carousel = HomeSlider::find($this->id);
        $carousel->title = $this->title;
        $carousel->subtitle = $this->subtitle;
        $carousel->price = $this->price;
        $carousel->link = $this->link;
        if ($this->newimage) {
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('slideshow-banners', $imageName);
            $carousel->image = $imageName;
        }
        $carousel->status = $this->status;
        $carousel->save();
        $request->session()->flash('status', 'Carousel has been updated successful!');
    }

    public function render()
    {
        return view('livewire.admin.carousel-edit-page')->layout('layouts.admin');
    }
}
