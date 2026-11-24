<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name',
        'field',
        'bio',
        'books',
        'initials',
        'image',
    ];
}