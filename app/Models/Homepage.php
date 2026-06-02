<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Model;

class Homepage extends Model
{
    use HasBlocks, HasMedias, HasRevisions, HasTranslation;

    protected $fillable = [
        'published',
        'title',
        'description',
        'about',
    ];

    public $translatedAttributes = [
        'title',
        'description',
        'about',
    ];
}
