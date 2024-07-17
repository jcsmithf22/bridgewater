@php
    $studies = [
        [
            "href" => "/",
            "title" => "test title",
            "description" => "test description",
            "time" => "2023",
            "logo" => asset('img/clients/family-fund/logomark-dark.svg'),
            "client" => "Family Fund",
        ],
        [
            "href" => "/",
            "title" => "test title 2",
            "description" => "test 2 description",
            "time" => "2024",
            "logo" => asset('img/clients/unseal/logomark-dark.svg'),
            "client" => "Unseal",
        ],
    ]
@endphp

<x-section-intro
    title="Harnessing technology for a brighter future"
    class="mt-24 sm:mt-32 lg:mt-40"
>
    <p>
        We believe technology is the answer to the world’s greatest
        challenges. It’s also the cause, so we find ourselves in bit of a
        catch 22 situation.
    </p>
</x-section-intro>
<x-container class="mt-16">
    <x-fade-in-stagger-parent class="grid grid-cols-1 gap-8 lg:grid-cols-3">
        @foreach($studies as $study)
            <x-fade-in-stagger-child index="{{ $loop->index }}" class="flex">
                <article
                    class="relative flex w-full flex-col rounded-3xl p-6 ring-1 ring-neutral-950/5 transition hover:bg-neutral-50 sm:p-8">
                    <h3>
                        <a href="{{ $study["href"] }}">
                            <span class="absolute inset-0 rounded-3xl"></span>
                            <img src="{{ $study["logo"] }}" alt="{{ $study["client"] }}" class="h-16 w-16"/>
                        </a>
                    </h3>
                    <p class="mt-6 flex gap-x-2 text-sm text-neutral-950">
                        <time
                            dateTime="{{ $study["time"] }}"
                            class="font-semibold"
                        >
                            {{ $study["time"] }}
                        </time>
                        <span class="text-neutral-300" aria-hidden="true">
                    /
                  </span>
                        <span>Case study</span>
                    </p>
                    <p class="mt-6 font-display text-2xl font-semibold text-neutral-950">
                        {{ $study["title"] }}
                    </p>
                    <p class="mt-4 text-base text-neutral-600">
                        {{ $study["description"] }}
                    </p>
                </article>
            </x-fade-in-stagger-child>
        @endforeach
    </x-fade-in-stagger-parent>
</x-container>
