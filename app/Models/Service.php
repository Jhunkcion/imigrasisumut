<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // Field yang diizinkan untuk mass assignment
    protected $fillable = [
        'title',
        'category',
        'content',
        'image',
    ];
}
