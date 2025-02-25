<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'uuid',
        'name',
        'year',
    ];

    protected function casts(): array
    {
        return [
            'uuid' => 'string',
            'name' => 'string',
            'year' => 'string',
        ];
    }
}
