<?php

namespace App\View\Components\Common;

use App\Models\TextLine;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Editable extends Component
{
    public function __construct(
        public string $key,
        public string $text,
        public string $tag = 'div',
    ) {
        $textLine = TextLine::firstWhere('id', $key);
        if ($textLine) {
            $this->text = $textLine->text;
        }
    }

    public function render(): View|Closure|string
    {
        return view('components.common.editable');
    }
}
