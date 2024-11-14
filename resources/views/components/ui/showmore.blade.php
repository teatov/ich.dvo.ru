<div class="inline-block">
    <button {{ $attributes->twMerge(['class' => 'text-primary font-semibold hover:text-primary-lighter active:text-primary-darker']) }}>{{ $slot }}</button>
    <div class="border-b-2 border-primary opacity-20"></div>
</div>