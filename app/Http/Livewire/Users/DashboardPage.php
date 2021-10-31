<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;

class DashboardPage extends Component
{
    public function render()
    {
        return view('livewire.users.dashboard-page')->layout('layouts.base');
    }
}
