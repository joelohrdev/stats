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

    #[Computed]
    public function opponents()
    {
        return Opponent::query()->orderBy('name')->get();
    }

    public function createGame(): void
    {
        if ($this->form->newOpponent && ! $this->form->opponent) {
            $newOpponent = Opponent::firstOrCreate(['name' => $this->form->newOpponent]);
        }

        $this->team->games()->create([
            'opponent_id' => $newOpponent->id ?? $this->form->opponent,
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
    }

    public function render(): View
    {
        return view('livewire.team.create-game');
    }
}
