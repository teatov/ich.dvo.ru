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
            [
                'Направление 1' => '/1',
                'Направление 2' => '/2',
                'Направление 3' => '/3',
                'Направление 4' => '/4',
                'Направление 5' => '/5',
                'Направление 6' => '/6',
                'Направление 7' => '/7',
                'Направление 8' => '/8',
            ]
        ],
        'Тематики' => '/themes',
        'Гранты' => '/grants',
        'Вакансии' => '/jobs',
        'Организации' => [
            'Организация 1' => '/1',
            'Организация 2' => '/2',
            'Организация 3' => '/3',
            'Организация 4' => '/4',
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
