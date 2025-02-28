<?php

namespace App\Livewire\Team;

use App\Models\Team;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;

    public Team $team;
    public $sortBy = 'date';
    public $sortDirection = 'desc';

    public function sort($column)
    {
        if ($this->sortBy === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $column;
            $this->sortDirection = 'asc';
        }
    }

    public function games()
    {
        return $this->team->games()
            ->with('opponent')
            ->orderBy($this->sortBy, $this->sortDirection)
            ->tap(fn ($query) => $this->sortBy ? $query->orderBy($this->sortBy, $this->sortDirection) : $query)
            ->paginate(10);
    }

    public function mount(Team $team): void
    {
        $this->team = $team;
    }

    public function render(): View
    {
        return view('livewire.team.show', [
            'games' => $this->games(),
        ]);
    }
}
