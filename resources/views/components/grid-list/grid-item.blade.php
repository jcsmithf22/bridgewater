@props(['title' => '', 'invert' => false, 'index' => 0])

<li {{ $attributes->merge(['class' => 'text-base' . ($invert ? 'text-neutral-300 before:bg-white after:bg-white/10' : 'text-neutral-600 before:bg-neutral-950 after:bg-neutral-100')]) }}>
    <x-fade-in-stagger-child index="{{ $index }}" :faster="false">
        <x-border position="left" invert="{{ $invert }}" class="pl-8">
            <strong class="font-semibold {{ $invert ? 'text-white' : 'text-neutral-950' }}">
                {{ $title }}.
            </strong> {{ $slot }}
        </x-border>
    </x-fade-in-stagger-child>
</li>