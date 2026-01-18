@props(['name' => '', 'label' => '', 'value' => '', 'type' => 'text'])

@if ($type === 'checkbox')
    <div>
        <label for="{{ $name }}" class="inline-flex items-center">
            <input id="{{ $name }}" name="{{ $name }}" type="checkbox"
                class="rounded border-neutral text-primary" {{ $attributes }}>
            <span class="ms-2 text-sm">{{ $label }}</span>
        </label>
    </div>
@else
    <div class="space-y-1">
        <x-input-label :for="$name">{{ $label }}</x-input-label>

        @if ($type === 'textarea')
            <x-textarea :id="$name" :name="$name" :value="$value" {{ $attributes }} />
        @elseif ($type === 'tiptap-editor')
            <x-tiptap-editor :name="$name" :content="$value" />
        @else
            <x-input :id="$name" :name="$name" :type="$type" :value="$value"
                {{ $attributes }} />
        @endif

        @if (!empty($errors))
            <x-input-error :messages="$errors->get($name)" />
        @endif
    </div>
@endif
