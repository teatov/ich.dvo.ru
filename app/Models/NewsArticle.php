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
        'body',
        'image_url',
    ];
}
