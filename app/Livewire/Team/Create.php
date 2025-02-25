<?php

namespace App\Livewire\Team;

use App\Models\Team;
use Flux;
use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Validate('required|string|max:255')]
    public string $name = '';
    #[Validate('required|string|max:255')]
    public string $year = '';

    public function save(): void
    {
        $this->validate();

        Team::create([
            'name' => $this->name,
            'year' => $this->year,
        ]);

        $this->reset(['name', 'year']);

        Flux::toast(
            heading: 'Success.',
            text: 'Team created successfully.',
            variant: 'success',
        );
    }

    public function render(): View
    {
        return view('livewire.team.create');
    }
}
