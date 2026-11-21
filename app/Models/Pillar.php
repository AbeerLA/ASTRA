<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pillar extends Model
{
    protected $fillable = [
        'name',
        'category',
        'short_description',
        'description',
        'icon',
        'cover_image',
        'activities',
        'achievements',
        'sort_order',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'sort_order' => 'integer',
            'is_active' => 'boolean',
        ];
    }
}