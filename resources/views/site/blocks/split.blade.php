@php
    /** @var \A17\Twill\Services\Blocks\RenderData $renderData */
@endphp

<div class="w-full flex gap-8">
    <div class="w-1/2">
        {!! $renderData->renderChildren('left') !!}
    </div>
    <div class="w-1/2">
        {!! $renderData->renderChildren('right') !!}
    </div>
</div>
