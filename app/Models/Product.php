<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'emri',
        'kodi',
        'img_slug',
        'cmimi',
        'kategoria_id',
        'sasia'
    ];
}
