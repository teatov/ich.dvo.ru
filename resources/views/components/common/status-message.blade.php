@php
    $messages = [
        'saved' => 'Успешно сохранено',
        'deleted' => 'Успешно удалено',
    ];
@endphp

@if (session('status'))
    <div {{ $attributes->twMerge(['class' => 'bg-neutral-lighter border p-4 rounded']) }}>
        {{ $messages[session('status')] ?? $status }}
    </div>
@endif
