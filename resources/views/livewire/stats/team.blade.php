<?php

use App\Models\Game;
use App\Models\Team;
use Livewire\Volt\Component;

new class extends Component
{
    public array $data = [];
    public ?Team $team = null;
    public ?int $teamId = null;

    public function mount($teamId = null): void
    {
        $this->teamId = $teamId;

        if ($this->teamId) {
            $this->team = Team::find($this->teamId);
            $games = $this->team ? $this->team->games->unique('date') : collect();
        } else {
            $games = Game::all()->unique('date');
        }

        $sortedGames = $games->sortByDesc('date');

        foreach ($sortedGames as $game) {
            $this->data[] = [
                'date' => $game->date->format('Y-m-d'),
                'avg' => $game->avg,
            ];
        }
    }
};

?>

<div>
    <flux:chart wire:model="data" class="aspect-3/1">
        <flux:chart.svg>
            <flux:chart.line field="avg" class="text-orange-500 dark:text-orange-400" />

            <flux:chart.axis axis="x" field="date">
                <flux:chart.axis.line />
                <flux:chart.axis.tick />
            </flux:chart.axis>

            <flux:chart.axis axis="y">
                <flux:chart.axis.grid />
                <flux:chart.axis.tick />
            </flux:chart.axis>

            <flux:chart.cursor />
        </flux:chart.svg>

        <flux:chart.tooltip>
            <flux:chart.tooltip.heading
                field="date"
                :format="['year' => 'numeric', 'month' => 'numeric', 'day' => 'numeric']"
            />
            <flux:chart.tooltip.value field="avg" label="AVG" />
        </flux:chart.tooltip>
    </flux:chart>
</div>
