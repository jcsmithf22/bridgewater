@props(['invert' => false, 'href' => ''])

@if ($href == '')
    <button
        {{ $attributes->merge(['class' => 'inline-flex rounded-full px-4 py-1.5 text-sm font-semibold transition ' . ($invert ? 'bg-white text-neutral-950 hover:bg-neutral-200' : 'bg-background text-white hover:bg-hover')]) }}>
        <span class="relative top-px">{{ $slot }}</span>
    </button>
@else
    <a href="{{ $href }}" wire:navigate
        {{ $attributes->merge(['class' => 'inline-flex rounded-full px-4 py-1.5 text-sm font-semibold transition ' . ($invert ? 'bg-white text-neutral-950 hover:bg-neutral-200' : 'bg-background text-white hover:bg-hover')]) }}>
        <span class="relative">{{ $slot }}</span>
    </a>
@endif
