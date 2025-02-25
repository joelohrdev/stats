<div class="mx-auto w-full max-w-3xl">
    <div class="mb-10 flex justify-end">
        <flux:button wire:navigate href="{{ route('team.create') }}" variant="primary" size="sm">Add team</flux:button>
    </div>
    <flux:table>
        <flux:table.columns>
            <flux:table.column>Team Name</flux:table.column>
            <flux:table.column>Year</flux:table.column>
            <flux:table.column></flux:table.column>
        </flux:table.columns>

        <flux:table.rows>
            @foreach ($teams as $team)
                <flux:table.row>
                    <flux:table.cell>{{ $team->name }}</flux:table.cell>
                    <flux:table.cell>{{ $team->year }}</flux:table.cell>
                    <flux:table.cell variant="strong" class="flex justify-end">
                        <a wire:navigate href="{{ route('team.show', $team) }}">View</a>
                    </flux:table.cell>
                </flux:table.row>
            @endforeach
        </flux:table.rows>
    </flux:table>
</div>
