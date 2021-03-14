<?php

namespace App\Http\Livewire;

use App\Models\Batting;
use Livewire\Component;
use App\Models\Player;

class BattingStats extends Component
{
    public $player;
    public $battingStats;

    public function mount(Player $player)
    {
        $this->player = $player;

        $this->battingStats = Batting::orderBy('date', 'desc')->get()->where('player_id', $player->id)->groupBy(function($date) {
            return $date->date->format('Y');
        })->toArray();
    }

    public function render()
    {
        return view('livewire.batting-stats');
    }
}
