<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;

    protected $fillable = [
        'player_id', 'year', 'team'
    ];

    protected $casts = [
        'year' => 'date'
    ];

    public function player()
    {
        $this->belongsTo(Player::class);
    }
}
