<div>
    <ul class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">
    @forelse($players as $player)
    <li>
        <a href="/{{ $player->slug }}" class="space-y-4">
            <div class="w-full">
                <img class="w-full h-96 object-cover shadow-lg rounded-lg" src="/images/{{ $player->slug }}.jpg" alt="{{ $player->name }}">
            </div>

            <div class="space-y-2">
                <div class="text-lg leading-6 font-medium space-y-1">
                    <h3>{{ $player->name }} @if($player->season)#{{ $player->season->number }}@endif</h3>
                    @if($player->season)<p class="text-blue-600">{{ \Carbon\Carbon::parse($player->season->year)->format('Y') }} {{ $player->season->team }}</p>@endif
                </div>
            </div>
        </a>
    </li>
    @empty
        <p>No Players Added Yet!</p>
    @endforelse
    </ul>
</div>
