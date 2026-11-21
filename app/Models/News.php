<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category',
        'excerpt',
        'content',
        'featured_image',
        'author',
        'published_at',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
        ];
    }
}