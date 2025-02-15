<?php

namespace App\Livewire\Team;

use App\Models\Team;
use Exception;
use Flux;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateModal extends Component
{
    #[Validate('required|min:3|max:255')]
    public string $name = '';

    #[Validate('required')]
    public $year;

    public function save()
    {
        $this->validate();

        try {
            Team::create([
                'name' => $this->name,
                'year' => (int) $this->year,
            ]);
        } catch (Exception $e) {
            Log::error($e->getMessage());
        }

        Flux::modals()->close();

        Flux::toast(
            heading: 'Team saved.',
            text: 'Team successfully added.',
            variant: 'success',
        );
    }

    public function render()
    {
        return view('livewire.team.create-modal');
    }
}
