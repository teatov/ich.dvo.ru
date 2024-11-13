<?php

declare(strict_types=1);

namespace App\View\Components\Layout;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    public array $navLinks = [
        'О нас' => [
            [
                'Об институте' => '/about',
                'История' => '/history',
                'Сотрудники' => '/staff',
            ],
            [
                'Новости' => '/news',
                'Мероприятия' => '/events',
                'Достижения' => '/achievements',
            ],
        ],
        'Организации' => [
            [
                'Организация 1' => '/1',
                'Организация 2' => '/2',
                'Организация 3' => '/3',
                'Организация 4' => '/4',
            ],
            [
                'Диссертационный пакет' => '/dissertations',
                'Список патентов' => '/patents',
                'Оборудование' => '/equipment',
            ],
        ],
    ];

    public function render(): View
    {
        return view('components.layout.footer');
    }
}
