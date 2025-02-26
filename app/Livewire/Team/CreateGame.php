<?php

namespace App\Livewire\Team;

use App\Livewire\Forms\GameForm;
use App\Models\Opponent;
use App\Models\Team;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Component;

class CreateGame extends Component
{
    public GameForm $form;
    public Team $team;
    public $searchTerm = '';
    public $activeSearch = '';

    // When search term changes, clear opponent if set
    public function updatedSearchTerm($value)
    {
        // Clear current selection when search changes
        $this->form->opponent = null;

        // When search has no results, pre-fill newOpponent
        if (! empty($value) && $this->searchResults()->isEmpty()) {
            $this->form->newOpponent = $value;
        } else {
            $this->form->newOpponent = null;
        }
    }

    public function updatedFormOpponent($value)
    {
        // When user types in the searchable dropdown, this captures the search term
        if (! empty($value)) {
            // Pre-fill the new opponent field with the same value
            $this->form->newOpponent = $value;
        }
    }

    public function captureSearchTerm($value)
    {
        $this->activeSearch = $value;

        // Pre-fill new opponent with the search term when there are no results
        if (! empty($value) && $this->opponentsForSearch($value)->isEmpty()) {
            $this->form->newOpponent = $value;
        }
    }

    public function opponentsForSearch($term)
    {
        if (empty($term)) {
            return collect();
        }

        return Opponent::query()
            ->where('name', 'like', "%{$term}%")
            ->orderBy('name')
            ->get();
    }

    #[Computed]
    public function opponents()
    {
        // Show all opponents when no search term
        if (empty($this->activeSearch)) {
            return Opponent::query()->orderBy('name')->get();
        }

        // Filter by search term
        return $this->opponentsForSearch($this->activeSearch);
    }

    public function updated($field)
    {
        // If opponent is selected, pre-fill the newOpponent field with its value
        if ($field === 'form.opponent' && ! empty($this->form->opponent)) {
            $this->searchTerm = '';
        }

        // If newOpponent is set, clear the opponent selection
        if ($field === 'form.newOpponent' && ! empty($this->form->newOpponent)) {
            $this->form->opponent = null;
        }
    }

    public function createGame()
    {
        // First validate that we have either an existing opponent or a new opponent name
        $this->validate([
            'form.date' => 'required|date',
            // Add validation for other required fields
        ]);

        // Make sure we have either a selected opponent or a new opponent name
        if (empty($this->form->opponent) && empty($this->form->newOpponent)) {
            $this->addError('opponent', 'Please select an existing opponent or add a new one');

            return;
        }

        // Determine the opponent_id to use
        if (! empty($this->form->newOpponent)) {
            // Create new opponent if new opponent name is provided
            $opponent = Opponent::firstOrCreate([
                'name' => $this->form->newOpponent,
            ]);
        } else {
            // Find existing opponent by name
            $opponent = Opponent::where('name', $this->form->opponent)->firstOrFail();
        }

        $game = $this->team->games()->create([
            'opponent_id' => $opponent->id,
            'date' => $this->form->date,
            'gp' => $this->form->gp,
            'pa' => $this->form->pa,
            'ab' => $this->form->ab,
            'avg' => $this->form->avg,
            'obp' => $this->form->obp,
            'ops' => $this->form->ops,
            'slg' => $this->form->slg,
            'h' => $this->form->h,
            'singles' => $this->form->singles,
            'doubles' => $this->form->doubles,
            'triples' => $this->form->triples,
            'hr' => $this->form->hr,
            'rbi' => $this->form->rbi,
            'r' => $this->form->r,
            'bb' => $this->form->bb,
            'so' => $this->form->so,
            'kl' => $this->form->kl,
            'hbp' => $this->form->hbp,
            'sac' => $this->form->sac,
            'sf' => $this->form->sf,
            'roe' => $this->form->roe,
            'fc' => $this->form->fc,
            'sb' => $this->form->sb,
            'sbp' => $this->form->sbp,
            'cs' => $this->form->cs,
            'pik' => $this->form->pik,
        ]);

        $this->reset('form');
        $this->reset('searchTerm');
    }

    // Make this a method instead of a computed property for better reactivity
    public function searchResults()
    {
        if (empty($this->searchTerm)) {
            return collect(); // Empty collection when no search
        }

        return Opponent::query()
            ->where('name', 'like', "%{$this->searchTerm}%")
            ->orderBy('name')
            ->get();
    }

    public function shouldShowNewOpponentField()
    {
        // If opponent is not empty but doesn't match any existing opponents
        if (! empty($this->form->opponent)) {
            $exists = Opponent::where('name', $this->form->opponent)->exists();
            if (! $exists) {
                // Pre-fill new opponent field
                $this->form->newOpponent = $this->form->opponent;

                return true;
            }
        }

        return false;
    }

    public function render(): View
    {
        return view('livewire.team.create-game');
    }
}
