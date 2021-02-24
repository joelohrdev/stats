<?php

namespace App\Http\Livewire;

use App\Models\Batting;
use App\Models\Player;
use Livewire\Component;

class PlayerStatBar extends Component
{
    public $player;
    public $hitCount;
    public $atBats;
    public $avg;

    public function mount(Player $player)
    {
        $this->player = $player;

        $this->hitCount = Batting::where('player_id', $player->id)->sum('hits');
        $this->atBats = Batting::where('player_id', $player->id)->sum('at_bats');
        $this->avg = $this->hitCount/$this->atBats;
    }

    public function render()
    {
        return view('livewire.player-stat-bar');
    }
}
