<div>

    <header class="w-full relative">
        <img class=" w-full h-96 object-cover" src="/storage/{{ $player->slug }}-bg.jpg" alt="">
        <div class="absolute inset-0 from-black via-black bg-gradient-to-t opacity-70"></div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 absolute -bottom-14 flex">
            <img class="w-36 h-48 object-cover border-8 border-white" src="/storage/{{ $player->slug }}.jpg" alt="">
            <div class="ml-4 mt-14">
                <h1 class="text-3xl font-bold text-white">{{ $player->name }} #{{ $player->season->number }}</h1>
                <span class="text-white">
                    {{ $player->description }} |
                    {{ \Carbon\Carbon::parse($player->birthdate)->format('m/d/Y') }} |
                    {{ \Carbon\Carbon::parse($player->season->year)->format('Y') }} {{ $player->season->team }}
                </span>
            </div>
        </div>
    </header>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-24">
        <livewire:batting-stats :player="$player"/>
    </div>

</div>
