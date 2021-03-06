<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'autori_id',
        'img_slug',
        'post_title',
        'publish_date',
        'excerpt',
        'text',
    ];
}
