<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Player;

class BattingStats extends Component
{
    public $player;

    public function mount(Player $player)
    {
        $this->player = $player;
    }

    public function render()
    {
        return view('livewire.batting-stats');
    }
}
