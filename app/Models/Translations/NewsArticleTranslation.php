<?php

namespace App\Models\Translations;

use A17\Twill\Models\Model;
use App\Models\NewsArticle;

class NewsArticleTranslation extends Model
{
    protected $baseModuleModel = NewsArticle::class;
}
