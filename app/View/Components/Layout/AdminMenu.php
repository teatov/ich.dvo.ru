<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdminMenu extends Component
{
    public array $navLinks;

    public function __construct()
    {
        $this->navLinks = [
            'Профиль' => route('admin'),
            'Тексты' => route('admin.texts'),
        ];
    }

    public function render(): View|Closure|string
    {
        return view('components.layout.admin-menu');
    }
}
