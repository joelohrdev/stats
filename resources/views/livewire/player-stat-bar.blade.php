<div class="mb-10">
    <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
        <div class="bg-white bg-opacity-10 overflow-hidden rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <dt class="text-sm font-medium text-gray-300 truncate">
                    Batting Average
                </dt>
                <dd class="mt-1 text-3xl font-semibold text-white">
                    {{ number_format($avg, 3) }}
                </dd>
            </div>
        </div>

        <div class="bg-white bg-opacity-10 overflow-hidden rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <dt class="text-sm font-medium text-gray-300 truncate">
                    At Bats
                </dt>
                <dd class="mt-1 text-3xl font-semibold text-white">
                    {{ $atBats }}
                </dd>
            </div>
        </div>

        <div class="bg-white bg-opacity-10 overflow-hidden rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <dt class="text-sm font-medium text-gray-300 truncate">
                    Number of Hits
                </dt>
                <dd class="mt-1 text-3xl font-semibold text-white">
                    {{ $hitCount }}
                </dd>
            </div>
        </div>
    </dl>
</div>
