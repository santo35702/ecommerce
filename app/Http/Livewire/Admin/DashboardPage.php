<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class DashboardPage extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard-page')->layout('layouts.base');
    }
}
