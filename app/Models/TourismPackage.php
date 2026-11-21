<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourismPackage extends Model
{
    protected $fillable = [
        'name',
        'category',
        'short_description',
        'description',
        'itinerary',
        'price_per_person',
        'min_participants',
        'max_participants',
        'duration',
        'included',
        'excluded',
        'cover_image',
        'booking_contact',
        'is_available',
        'is_active',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'price_per_person' => 'decimal:2',
            'min_participants' => 'integer',
            'max_participants' => 'integer',
            'is_available' => 'boolean',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ];
    }
}