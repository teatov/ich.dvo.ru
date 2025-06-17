<?php

declare(strict_types=1);

namespace App\View\Components\Layout;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    public array $navLinks;

    public function __construct()
    {
        $this->navLinks = [
            'О нас' => [
                [
                    'Об институте' => route('about'),
                    'История' => route('history'),
                    'Сотрудники' => route('staff'),
                ],
                [
                    'Новости' => route('news-articles.index'),
                    'Мероприятия' => route('events'),
                    'Достижения' => route('achievements'),
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
                    'Диссертационный совет' => route('dissertations'),
                    'Список патентов' => route('patents'),
                    'Оборудование' => route('equipment'),
                ],
            ],
        ];
    }

    public function render(): View
    {
        return view('components.layout.footer');
    }
}
