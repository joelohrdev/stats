<div>
    <flux:heading size="lg">Create Team</flux:heading>
    <form wire:submit.prevent="save" class="mx-auto mt-5 w-full max-w-xl space-y-6">
        <flux:field>
            <flux:label>Team Name</flux:label>

            <flux:input wire:model="name" type="text" />

            <flux:error name="name" />
        </flux:field>

        <flux:field>
            <flux:label>Year</flux:label>

            <flux:input wire:model="year" type="text" />

            <flux:error name="year" />
        </flux:field>

        <flux:button variant="primary" type="submit">Submit</flux:button>
        <flux:button href="{{ route('team.index') }}">Cancel</flux:button>
    </form>
</div>
