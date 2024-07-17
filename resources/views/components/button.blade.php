@props(['invert' => false, 'href' => ''])

@if ($href == '')
    <button
        {{ $attributes->merge(['class' => 'inline-flex rounded-full px-4 py-1.5 text-sm font-semibold transition ' . ($invert ? 'bg-white text-neutral-950 hover:bg-neutral-200' : 'bg-neutral-950 text-white hover:bg-neutral-800')]) }}>
        <span class="relative top-px">{{ $slot }}</span>
    </button>
@else
    <a href="{{ $href }}"
        {{ $attributes->merge(['class' => 'inline-flex rounded-full px-4 py-1.5 text-sm font-semibold transition ' . ($invert ? 'bg-white text-neutral-950 hover:bg-neutral-200' : 'bg-neutral-950 text-white hover:bg-neutral-800')]) }}>
        <span class="relative">{{ $slot }}</span>
    </a>
@endif
