<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPreference extends Model
{
    protected $fillable = [
        'user_id',
        'adults',
        'children',
        'allergies',
        'not_like_foods',
    ];

    protected function casts(): array
    {
        return [
            'allergies' => 'array',
        ];
    }
}
