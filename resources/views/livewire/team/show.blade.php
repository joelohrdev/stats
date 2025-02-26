<div>
    <div class="mb-10 flex justify-between">
        <flux:heading size="xl">{{ $team->year }} {{ $team->name }}</flux:heading>
        <flux:button wire:navigate href="{{ route('team.create-game', $team) }}" variant="primary" size="sm">
            Add game
        </flux:button>
    </div>
    <div>
        <flux:table>
            <flux:table.columns>
                <flux:table.column>Opponent</flux:table.column>
                <flux:table.column>Date</flux:table.column>
                <flux:table.column>Status</flux:table.column>
                <flux:table.column>Amount</flux:table.column>
            </flux:table.columns>

            <flux:table.rows>
                @foreach ($team->games as $game)
                    <flux:table.row>
                        <flux:table.cell>{{ $game->opponent->name }}</flux:table.cell>
                        <flux:table.cell>{{ $game->date->format('M d, Y') }}</flux:table.cell>
                        <flux:table.cell>
                            <flux:badge color="green" size="sm" inset="top bottom">Paid</flux:badge>
                        </flux:table.cell>
                        <flux:table.cell variant="strong">$49.00</flux:table.cell>
                    </flux:table.row>
                @endforeach
            </flux:table.rows>
        </flux:table>
    </div>
</div>
