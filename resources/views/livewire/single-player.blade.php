<div>

    <header class="w-full relative">
        <img class=" w-full h-96 object-cover" src="/images/{{ $player->slug }}-bg.jpg" alt="">
        <div class="absolute inset-0 from-blue-900 via-blue-900 bg-gradient-to-t opacity-70"></div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 absolute -bottom-14 flex">
            <img class="w-36 h-48 object-cover border-8 border-white" src="/images/{{ $player->slug }}.jpg" alt="">
            <div class="ml-4 mt-14">
                <h1 class="text-3xl font-bold text-white">{{ $player->name }} @if($player->season)#{{ $player->season->number }}@endif</h1>
                <span class="text-white">
                    {{ $player->description }} |
                    {{ \Carbon\Carbon::parse($player->birthdate)->format('m/d/Y') }}
                    @if($player->season)|
                    {{ \Carbon\Carbon::parse($player->season->year)->format('Y') }} {{ $player->season->team }}@endif
                </span>
            </div>
        </div>
    </header>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-24">
        <livewire:player-stat-bar :player="$player"/>
        <livewire:batting-stats :player="$player"/>
    </div>

</div>
