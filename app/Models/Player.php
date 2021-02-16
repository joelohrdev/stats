<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'birthdate', 'description'
    ];

    protected $casts = [
        'birthdate' => 'date'
    ];

    public function season()
    {
        return $this->hasOne(Season::class);
    }

    public function battings()
    {
        return $this->hasMany(Batting::class);
    }
}
