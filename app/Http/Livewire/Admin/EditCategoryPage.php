<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class EditCategoryPage extends Component
{
    public function render()
    {
        return view('livewire.admin.edit-category-page')->layout('layouts.admin');
    }
}
