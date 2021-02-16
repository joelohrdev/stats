<?php

namespace App\Http\Livewire;

use App\Models\Player;
use Livewire\Component;

class PlayerList extends Component
{
    public function render()
    {
        return view('livewire.player-list', [
            'players' => Player::orderBy('name', 'DESC')->get()
        ]);
    }
}
