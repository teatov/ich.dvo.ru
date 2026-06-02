<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasTranslation;

class NewsArticle extends CardSerializeable
{
    use HasBlocks, HasMedias, HasSlug, HasTranslation;

    protected $fillable = [
        'published',
        'title',
        'description',
    ];

    public $translatedAttributes = [
        'title',
        'description',
    ];

    public $slugAttributes = [
        'title',
    ];
    
    public function makeCard(): array {
        return [
            'imgSrc' => $this->image('cover'),
            'heading' => $this->title,
            'text' => $this->description,
            'url' => route('frontend.news.show', ['slug' => $this->slug])
        ];
    }
}
