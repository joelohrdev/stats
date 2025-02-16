<?php

namespace App\Livewire\Team;

use App\Models\Team;
use Illuminate\View\View;
use Livewire\Component;

class Index extends Component
{
    public function render(): View
    {
        return view('livewire.team.index', [
            'teams' => Team::all(),
        ])->title('Teams')->layout('layouts.app');
    }
}
