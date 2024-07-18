@props(['client' => []])

<div {{ $attributes->merge(['class' => 'relative isolate bg-neutral-50 py-16 sm:py-28 md:py-32']) }}>
    <x-grid.grid-pattern
        class="absolute inset-0 -z-10 h-full w-full fill-neutral-100 stroke-neutral-950/5 [mask-image:linear-gradient(to_bottom_left,white_50%,transparent_60%)]"
        yOffset="-256" />
    <x-container>
        <x-fade-in>
            <figure class="mx-auto max-w-4xl">
                <blockquote
                    class="relative font-display text-3xl font-medium tracking-tight text-neutral-950 sm:text-4xl">
                    <p class="before:content-['“'] after:content-['”'] sm:before:absolute sm:before:right-full">
                        {{ $slot }}
                    </p>
                </blockquote>
                @if (count($client) != 0)
                    <figcaption class="mt-10">
                        <img src="{{ $client['logo'] }}" alt="{{ $client['name'] }}" />
                    </figcaption>
                @endif
            </figure>
        </x-fade-in>
    </x-container>
</div>
