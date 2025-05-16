<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'beritas'; // nama tabel

    protected $fillable = [
        'judul',
        'konten',
        'gambar',
        'tanggal',
        'status',
    ];

    protected $dates = [
        'tanggal',
    ];

    // Di model Berita.php
    protected $casts = [
        'tanggal' => 'datetime',
    ];

}
