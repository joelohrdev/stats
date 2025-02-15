<div>
    <flux:modal.trigger name="create-store">
        <flux:button variant="primary">Add Team</flux:button>
    </flux:modal.trigger>

    <flux:modal name="create-store" class="w-96 space-y-6">
        <div>
            <flux:heading size="lg">Add team</flux:heading>
        </div>

        <form wire:submit.prevent="save" class="space-y-6">
            <flux:field>
                <flux:label>Team name</flux:label>

                <flux:input wire:model="name" />

                <flux:error name="name" />
            </flux:field>
            <flux:field>
                <flux:label>Year</flux:label>

                <flux:input wire:model="year" type="date" />

                <flux:error name="year" />
            </flux:field>
            <div class="flex">
                <flux:spacer />

                <flux:button size="sm" type="submit" variant="primary">Save</flux:button>
            </div>
        </form>
    </flux:modal>
</div>
