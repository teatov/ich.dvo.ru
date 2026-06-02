<ul class="flex gap-8">
  @foreach ($block->children as $child)
    <li class="block w-full space-y-5">
        <img src="{{ $child->image('image', 'desktop') }}"
            alt="{{ $child->imageAltText('image') }}" />
        <x-h4>{!! $child->input('header') !!}</x-h4>
        <x-p>{!! $child->input('description') !!}</x-p>
    </li>
  @endforeach
</ul>
