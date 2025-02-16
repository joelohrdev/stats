<?php

namespace App\Livewire\Team;

use Illuminate\View\View;
use Livewire\Component;

class CreateGame extends Component
{
    public function render(): View
    {
        return view('livewire.team.create-game')->title('Create Game')->layout('layouts.app');
    }
}
