<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TextLine extends Model
{
    public $incrementing = false;

    protected $table = 'text_lines';

    protected $keyType = 'string';

    protected $fillable = ['id', 'text'];
}
