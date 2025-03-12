<?php

declare(strict_types=1);

namespace App\View\Components\Layout;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    public array $navLinks;

    public function __construct()
    {
        $this->navLinks = [
            'О нас' => [
                'Об институте' => route('about'),
                'История' => route('history'),
                'Сотрудники' => route('staff'),
            ],
            'Направления' => [
                [
                    'Направление 1' => 'guideline',
                    'Направление 2' => '2',
                    'Направление 3' => '3',
                    'Направление 4' => '4',
                    'Направление 5' => '5',
                    'Направление 6' => '6',
                    'Направление 7' => '7',
                    'Направление 8' => '8',
                ]
            ],
            'Тематики' => route('themes'),
            'Гранты' => route('grants'),
            'Вакансии' => route('jobs'),
            'Организации' => [
                'ДВЦСИ' => route('dvcsi'),
                'Организация 2' => '2',
                'Организация 3' => '3',
                'Организация 4' => '4',
            ],
            'Новости' => [
                'Новости' => route('news'),
                'Мероприятия' => route('events'),
                'Достижения' => route('achievements'),
            ],
            'Контакты' => route('contacts'),
        ];
    }

    public function render(): View
    {
        return view('components.layout.header');
    }
}
