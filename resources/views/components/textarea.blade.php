@props(['disabled' => false])

<textarea @disabled($disabled) {{ $attributes->merge(['class' => 'p-2 border rounded block w-full']) }}></textarea>
