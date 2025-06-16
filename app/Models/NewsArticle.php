<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsArticle extends Model
{
    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'body',
        'image_url',
    ];
}
