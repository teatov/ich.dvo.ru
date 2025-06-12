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
            'Админ-панель' => '/admin',
            'Тексты' => '/admin/texts',
        ];
    }

    public function render(): View|Closure|string
    {
        return view('components.layout.admin-menu');
    }
}
