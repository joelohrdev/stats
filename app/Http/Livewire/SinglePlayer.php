<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Player;

class SinglePlayer extends Component
{
    public $player;

    public function mount($slug)
    {
        $this->player = Player::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.single-player')
            ->extends('layouts.app');
    }
}
