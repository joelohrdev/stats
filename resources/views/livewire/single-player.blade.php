<div class="bg-gray-800">
    <header class="w-full relative border-b-4 border-white">
        <img class=" w-full h-96 object-cover" src="/images/{{ $player->slug }}-bg.jpg" alt="">
        <div class="absolute inset-0 from-gray-900 via-gray-900 bg-gradient-to-t opacity-70"></div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 absolute -bottom-14 flex">
            <img class="w-36 h-48 object-cover border-4 border-white" src="/images/{{ $player->slug }}.jpg" alt="{{ $player->name }}">
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

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-24 bg-gray-800">
        <livewire:player-stat-bar :player="$player"/>
        <livewire:batting-stats :player="$player"/>
    </div>
</div>
