<div>
    <div class="mb-10 flex justify-between">
        <div>
            <flux:heading size="xl">Add Game</flux:heading>
            <flux:heading>{{ $team->year }} {{ $team->name }}</flux:heading>
        </div>
        <flux:button wire:navigate icon="arrow-left" href="{{ route('team.show', $team) }}">Back</flux:button>
    </div>
    <div class="mx-auto max-w-xl">
        @foreach ($errors->all() as $error)
            <p class="text-red-500">{{ $error }}</p>
        @endforeach

        <form wire:submit="createGame" class="space-y-6">
            @if ($form->opponent && $form->newOpponent)
                <div class="mb-4 rounded-md border border-red-200 bg-red-50 p-4 text-sm text-red-600">
                    Please either select an existing opponent or add a new one, but not both.
                </div>
            @endif

            <div>
                <div class="mt-2">
                    <flux:select
                        placeholder="Select existing opponent"
                        wire:model.live="form.opponent"
                        size="sm"
                        variant="listbox"
                        searchable
                        clearable
                        :filter="false"
                    >
                        @foreach ($this->opponents() as $opponent)
                            <flux:select.option value="{{ $opponent->id }}">{{ $opponent->name }}</flux:select.option>
                        @endforeach
                    </flux:select>
                </div>

                <div class="mt-2">
                    <flux:input wire:model.live="form.newOpponent" size="sm" placeholder="Add new opponent" />
                </div>
            </div>

            <flux:date-picker wire:model="form.date" size="sm" />

            <div class="grid grid-cols-4 gap-5">
                <flux:input wire:model="form.pa" size="sm" type="number" placeholder="PA" />
                <flux:input wire:model="form.ab" size="sm" type="number" placeholder="AB" />
                <flux:input wire:model="form.avg" size="sm" type="string" placeholder="AVG" />
                <flux:input wire:model="form.obp" size="sm" type="string" placeholder="OBP" />
                <flux:input wire:model="form.ops" size="sm" type="string" placeholder="OPS" />
                <flux:input wire:model="form.slg" size="sm" type="string" placeholder="SLG" />
                <flux:input wire:model="form.h" size="sm" type="number" placeholder="H" />
                <flux:input wire:model="form.singles" size="sm" type="number" placeholder="1B" />
                <flux:input wire:model="form.doubles" size="sm" type="number" placeholder="2B" />
                <flux:input wire:model="form.triples" size="sm" type="number" placeholder="3B" />
                <flux:input wire:model="form.hr" size="sm" type="number" placeholder="HR" />
                <flux:input wire:model="form.rbi" size="sm" type="number" placeholder="RBI" />
                <flux:input wire:model="form.r" size="sm" type="number" placeholder="R" />
                <flux:input wire:model="form.bb" size="sm" type="number" placeholder="BB" />
                <flux:input wire:model="form.so" size="sm" type="number" placeholder="SO" />
                <flux:input wire:model="form.kl" size="sm" type="number" placeholder="K-L" />
                <flux:input wire:model="form.hbp" size="sm" type="number" placeholder="HBP" />
                <flux:input wire:model="form.sac" size="sm" type="number" placeholder="SAC" />
                <flux:input wire:model="form.sf" size="sm" type="number" placeholder="SF" />
                <flux:input wire:model="form.roe" size="sm" type="number" placeholder="ROE" />
                <flux:input wire:model="form.fc" size="sm" type="number" placeholder="FC" />
                <flux:input wire:model="form.sb" size="sm" type="number" placeholder="SB" />
                <flux:input wire:model="form.sbp" size="sm" type="number" placeholder="SBP" />
                <flux:input wire:model="form.cs" size="sm" type="number" placeholder="CS" />
                <flux:input wire:model="form.pik" size="sm" type="number" placeholder="PIK" />
            </div>

            <flux:button type="submit">Submit</flux:button>
        </form>
    </div>
</div>
