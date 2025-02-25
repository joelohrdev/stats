<div>
    <flux:table class="mx-auto w-full max-w-3xl">
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
                    <flux:table.cell variant="strong" class="flex justify-end">View</flux:table.cell>
                </flux:table.row>
            @endforeach
        </flux:table.rows>
    </flux:table>
</div>
