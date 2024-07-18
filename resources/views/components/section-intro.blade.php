@props(['title', 'eyebrow' => '', 'smaller' => false, 'invert' => false])

<x-container {{ $attributes }}>
    <x-fade-in class="max-w-2xl">
        @if(strlen($eyebrow) > 0)
            <span
                class="mb-6 block font-display text-base font-semibold {{ $invert ? 'text-white' : 'text-neutral-950' }}"
            >
            {{ $eyebrow }}
            </span>
            <span class="sr-only"> - </span>
        @endif
        <span
            class="block font-display tracking-tight [text-wrap:balance] {{ $invert ? 'text-white' : 'text-neutral-950' }} {{ $smaller ? 'text-2xl font-semibold' : 'text-4xl font-medium sm:text-5xl' }}">
            {{ $title }}
        </span>
        @if($slot)
            <div class="mt-6 text-xl {{ $invert ? 'text-neutral-300' : 'text-neutral-600' }}">
                {{ $slot }}
            </div>
        @endif
    </x-fade-in>
</x-container>
