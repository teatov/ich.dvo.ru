<?php

namespace App\Models;

use App\Interfaces\CardSerializable;
use Illuminate\Database\Eloquent\Model;

class NewsArticle extends Model implements CardSerializable
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

    public function cardSerialize(): array {
        return [
            'imgsrc' => $this->image_url,
            'heading' => $this->title,
            'text' => $this->description,
            'url' => route('news-article.show', ['id' => $this->id]),
        ];
    }
}
