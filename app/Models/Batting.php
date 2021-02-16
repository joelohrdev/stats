<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batting extends Model
{
    use HasFactory;

    protected $fillable = [
        'date', 'against', 'plate_appearances', 'at_bats', 'hits', 'singles', 'doubles',
        'triples', 'home_runs', 'runs_batted_in', 'runs', 'hit_by_pitch', 'reached_on_error',
        'hit_into_fielders_choice','batter_advances_on_catchers_interference', 'walks', 'strikeouts'
    ];

    protected $casts = [
        'date' => 'date'
    ];

    public function player()
    {
        $this->belongsTo(Player::class);
    }
}
