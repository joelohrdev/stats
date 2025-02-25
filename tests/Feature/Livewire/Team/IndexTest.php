<?php

use App\Livewire\Team\Index;
use App\Models\Team;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Index::class)
        ->assertStatus(200);
});

it('displays teams ordered by year', function () {
    $team2023 = Team::factory()->create(['year' => 2023]);
    $team2021 = Team::factory()->create(['year' => 2021]);
    $team2022 = Team::factory()->create(['year' => 2022]);

    Livewire::test(Index::class)
        ->assertSeeInOrder([
            $team2021->name,
            $team2022->name,
            $team2023->name,
        ]);
});
