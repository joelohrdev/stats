<?php

use App\Models\Game;
use Livewire\Volt\Component;

new class extends Component {
    public array $data = [];

    public function mount()
    {
        $this->data = Game::orderBy('date', 'desc')
            ->get()
            ->map(function ($game) {
                return [
                    'date' => $game->date->format('Y-m-d'),
                    'avg' => Game::whereDate('date', $game->date)->avg('h'),
                ];
            })
            ->toArray();
    }
};

?>

<div>
    <pre class="text-xs">{{ var_export($data) }}</pre>
    <flux:chart wire:model="data" class="aspect-3/1">
        <flux:chart.svg>
            <flux:chart.line field="avg" class="text-pink-500 dark:text-pink-400" />

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
