<?php

namespace Database\Factories;

use App\Models\Game;
use App\Models\Opponent;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class GameFactory extends Factory
{
    protected $model = Game::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'team_id' => Team::factory(),
            'opponent_id' => Opponent::factory(),
        ];
    }
}
