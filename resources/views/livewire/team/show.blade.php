<div>
    <div class="mb-10 flex items-center justify-between">
        <flux:heading size="xl">{{ $team->year }} {{ $team->name }}</flux:heading>
        <flux:button wire:navigate href="{{ route('team.create-game', $team) }}" variant="primary" size="sm">
            Add game
        </flux:button>
    </div>
    <div>
        <livewire:stats.team :teamId="$team->id" />
    </div>
    <div>
        <flux:table :paginate="$games">
            <flux:table.columns>
                <flux:table.column
                    sortable
                    :sorted="$sortBy === 'date'"
                    :direction="$sortDirection"
                    wire:click="sort('date')"
                >
                    Date
                </flux:table.column>
                <flux:table.column>Opponent</flux:table.column>
                <flux:table.column>PA</flux:table.column>
                <flux:table.column>AB</flux:table.column>
                <flux:table.column>AVG</flux:table.column>
                <flux:table.column>OBP</flux:table.column>
                <flux:table.column>OPS</flux:table.column>
                <flux:table.column>SLG</flux:table.column>
                <flux:table.column>H</flux:table.column>
                <flux:table.column>1B</flux:table.column>
                <flux:table.column>2B</flux:table.column>
                <flux:table.column>3B</flux:table.column>
                <flux:table.column>HR</flux:table.column>
                <flux:table.column>RBI</flux:table.column>
                <flux:table.column>R</flux:table.column>
                <flux:table.column>BB</flux:table.column>
                <flux:table.column>SO</flux:table.column>
                <flux:table.column>K-L</flux:table.column>
                <flux:table.column>HBP</flux:table.column>
                <flux:table.column>SAC</flux:table.column>
                <flux:table.column>SF</flux:table.column>
                <flux:table.column>ROE</flux:table.column>
                <flux:table.column>FC</flux:table.column>
                <flux:table.column>SB</flux:table.column>
                <flux:table.column>SBP</flux:table.column>
                <flux:table.column>CS</flux:table.column>
                <flux:table.column>PIK</flux:table.column>
            </flux:table.columns>

            <flux:table.rows>
                @foreach ($games as $game)
                    <flux:table.row>
                        <flux:table.cell>{{ $game->date->format('M d, Y') }}</flux:table.cell>
                        <flux:table.cell>{{ $game->opponent->name }}</flux:table.cell>
                        <flux:table.cell>{{ $game->pa }}</flux:table.cell>
                        <flux:table.cell>{{ $game->ab }}</flux:table.cell>
                        <flux:table.cell>{{ $game->avg }}</flux:table.cell>
                        <flux:table.cell>{{ $game->obp }}</flux:table.cell>
                        <flux:table.cell>{{ $game->ops }}</flux:table.cell>
                        <flux:table.cell>{{ $game->slg }}</flux:table.cell>
                        <flux:table.cell>{{ $game->h }}</flux:table.cell>
                        <flux:table.cell>{{ $game->singles }}</flux:table.cell>
                        <flux:table.cell>{{ $game->doubles }}</flux:table.cell>
                        <flux:table.cell>{{ $game->triples }}</flux:table.cell>
                        <flux:table.cell>{{ $game->hr }}</flux:table.cell>
                        <flux:table.cell>{{ $game->rbi }}</flux:table.cell>
                        <flux:table.cell>{{ $game->r }}</flux:table.cell>
                        <flux:table.cell>{{ $game->bb }}</flux:table.cell>
                        <flux:table.cell>{{ $game->so }}</flux:table.cell>
                        <flux:table.cell>{{ $game->kl }}</flux:table.cell>
                        <flux:table.cell>{{ $game->hbp }}</flux:table.cell>
                        <flux:table.cell>{{ $game->sac }}</flux:table.cell>
                        <flux:table.cell>{{ $game->sf }}</flux:table.cell>
                        <flux:table.cell>{{ $game->roe }}</flux:table.cell>
                        <flux:table.cell>{{ $game->fc }}</flux:table.cell>
                        <flux:table.cell>{{ $game->sb }}</flux:table.cell>
                        <flux:table.cell>{{ $game->sbp }}</flux:table.cell>
                        <flux:table.cell>{{ $game->cs }}</flux:table.cell>
                        <flux:table.cell>{{ $game->pik }}</flux:table.cell>
                    </flux:table.row>
                @endforeach
            </flux:table.rows>
        </flux:table>
    </div>
</div>
