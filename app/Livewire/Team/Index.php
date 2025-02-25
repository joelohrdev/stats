<?php

namespace App\Livewire\Team;

use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{
    #[Title('Teams')]
    public function render(): View
    {
        return view('livewire.team.index');
    }
}
