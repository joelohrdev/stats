<?php

namespace App\Livewire\Team;

use App\Models\Team;
use Illuminate\View\View;
use Livewire\Component;

class Show extends Component
{
    public Team $team;

    public function mount(Team $team): void
    {
        $this->team = $team->load(['games.opponent']);
    }

    public function render(): View
    {
        return view('livewire.team.show');
    }
}
