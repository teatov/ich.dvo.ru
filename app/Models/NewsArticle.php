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

    public function getCardImageSrc(): string {
        return $this->image('cover') ?? '';
    }

    public function getCardHeading(): string {
        return $this->title;
    }

    public function getCardText(): string {
        return $this->description ?? '';
    }

    public function getCardUrl(): string {
        return route('frontend.news.show', ['slug' => $this->slug]);
    }
}
