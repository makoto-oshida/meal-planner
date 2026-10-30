<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FamilyMember extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'age_group',
        'allergies',
        'allergy_other',
        'not_like_foods',
        'portion_size',
    ];

    protected function casts(): array
    {
        return [
            'allergies' => 'array',
        ];
    }
}
