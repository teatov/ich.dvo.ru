<?php

namespace App\Models;

use App\Interfaces\CardSerializable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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

    public function setSlug(): void
    {
        $this->slug = Str::slug($this->title);
    }

    public function cardSerialize(): array
    {
        return [
            'imgSrc' => $this->image_url,
            'heading' => $this->title,
            'text' => $this->description,
            'url' => route('news-article.show', ['slug' => $this->slug]),
        ];
    }
}
