@props(['eyebrow' => '', 'title', 'centered' => false])

<x-container class="mt-24 sm:mt-32 lg:mt-40 {{ $centered ? 'text-center' : '' }}">
    <x-fade-in>
        <h1>
            <span class="block font-display text-base font-semibold text-neutral-950">
                {{ $eyebrow }}
            </span>
            <span class="sr-only"> - </span>
            <span
                class="mt-6 block max-w-5xl font-display text-5xl font-medium tracking-tight text-neutral-950 [text-wrap:balance] sm:text-6xl {{ $centered ? 'mx-auto' : '' }}">
                {{ $title }}
            </span>
        </h1>
        <div class="mt-6 max-w-3xl text-xl text-neutral-600 {{ $centered ? 'mx-auto' : '' }}">
            {{ $slot }}
        </div>
    </x-fade-in>
</x-container>