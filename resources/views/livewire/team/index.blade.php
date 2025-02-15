<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                {{ __('Teams') }}
            </h2>
            <livewire:team.create-modal />
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-4 gap-5">
                        @foreach ($teams as $team)
                            <flux:card>
                                <flux:heading size="lg">{{ $team->year }} {{ $team->name }}</flux:heading>

                                <flux:subheading class="mb-4">
                                    <p>This action cannot be undone.</p>
                                </flux:subheading>
                            </flux:card>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
