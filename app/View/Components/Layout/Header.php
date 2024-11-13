<?php

declare(strict_types=1);

namespace App\View\Components\Layout;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    public array $navLinks = [
        'О нас' => [
            'Об институте' => '/about',
            'История' => '/history',
            'Сотрудники' => '/staff',
        ],
        'Направления' => [
            'Направление 1' => '/1',
            'Направление 2' => '/2',
            'Направление 3' => '/3',
        ],
        'Тематики' => '/themes',
        'Гранты' => '/grants',
        'Вакансии' => '/jobs',
        'Организации' => [
            'Организация 1' => '/1',
            'Организация 2' => '/2',
        ],
        'Новости' => [
            'Новости' => '/news',
            'Мероприятия' => '/events',
            'Достижения' => '/achievements',
        ],
        'Контакты' => '/contacts',
    ];

    public function render(): View
    {
        return view('components.layout.header');
    }
}
