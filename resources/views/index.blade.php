@php
    $client = [
        'logo' => asset('/img/logo_light.svg'),
        'name' => 'Bridgewater Marketing Group',
    ];
@endphp

<x-layouts.base>
    <x-layouts.root>
        <x-container class="mt-24 sm:mt-32 md:mt-56">
            <x-fade-in class="max-w-3xl py-12">
                <h1
                    class="font-display text-5xl font-medium tracking-tight text-neutral-950 [text-wrap:balance] sm:text-7xl">
                    Take your marketing to the next level.
                </h1>
                <p class="mt-6 text-xl text-neutral-600">
                    Take the headache out of your online presence. <span class="font-semibold">Bridgewater Marketing
                        Group</span> provides fully customized marketing plans for every
                    service you need.
                </p>
            </x-fade-in>
        </x-container>

        <x-index.clients />

        <x-index.case-studies />

        <x-index.testimonial class="mt-24 sm:mt-32 lg:mt-40 mb-48" :client="$client">
            We bring the business expertise you need to build yours.
        </x-index.testimonial>

        <x-index.services />
    </x-layouts.root>
</x-layouts.base>
