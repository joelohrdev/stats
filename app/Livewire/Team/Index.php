<?php

namespace App\Livewire\Team;

use App\Models\Team;
use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{
    #[Title('Teams')]
    public function render(): View
    {
        return view('livewire.team.index', [
            'teams' => Team::query()->orderBy('year')->get(),
        ]);
    }
}
