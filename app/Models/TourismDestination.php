<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourismDestination extends Model
{
    protected $fillable = [
        'name',
        'category',
        'short_description',
        'description',
        'cover_image',
        'address',
        'maps_url',
        'opening_hours',
        'entrance_fee',
        'sort_order',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'entrance_fee' => 'decimal:2',
            'sort_order' => 'integer',
            'is_active' => 'boolean',
        ];
    }
}