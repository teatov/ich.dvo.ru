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
            'Профиль' => route('admin.index'),
            'Тексты' => route('admin.texts'),
            'Новости' => route('admin.news-article.index'),
            'Сотрудники' => route('admin.staff.index'),
            'Направления' => route('admin.course.index'),
            'Тематики' => route('admin.theme.index'),
            'Гранты' => route('admin.grant.index'),
            'Вакансии' => route('admin.job.index'),
            'Организации' => route('admin.organization.index'),
            'Мероприятия' => route('admin.event.index'),
            'Оборудование' => route('admin.equipment.index'),
            'Диссертации' => route('admin.dissertation.index'),
            'Патенты' => route('admin.patent.index'),
        ];
    }

    public function render(): View|Closure|string
    {
        return view('components.layout.admin-menu');
    }
}
