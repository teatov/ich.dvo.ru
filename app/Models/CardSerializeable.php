<?php

namespace App\Models;

use A17\Twill\Models\Model;
use Illuminate\Database\Eloquent\Collection;

abstract class CardSerializeable extends Model
{
    public function getCardImageSrc(): string {
        return '';
    }

    public function getCardCategory(): string {
        return '';
    }

    public function getCardHeading(): string {
        return '';
    }

    public function getCardText(): string {
        return '';
    }

    public function getCardUrl(): string {
        return '';
    }
}
