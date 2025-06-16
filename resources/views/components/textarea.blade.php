@props(['disabled' => false, 'value' => ''])

<textarea @disabled($disabled) {{ $attributes->merge(['class' => 'p-2 border rounded block w-full']) }}>{{ $value ? $value : $slot }}</textarea>
