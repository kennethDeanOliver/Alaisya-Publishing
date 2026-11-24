<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'category',
        'author',
        'date',
        'excerpt',
        'content',
        'image',
        'read_time',
        'featured',
    ];

    protected $casts = [
        'featured' => 'boolean',
    ];
}