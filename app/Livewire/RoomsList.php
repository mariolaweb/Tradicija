<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class RoomsList extends Component
{

    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.rooms-list');
    }
}
