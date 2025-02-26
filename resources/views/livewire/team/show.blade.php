<div>
    <div class="mb-10 flex justify-between">
        <flux:heading size="xl">{{ $team->year }} {{ $team->name }}</flux:heading>
        <flux:button wire:navigate href="{{ route('team.create-game', $team) }}" variant="primary" size="sm">
            Add game
        </flux:button>
    </div>
</div>
