@php
    $emails = [
        ['Careers', 'careers@studioagency.com'],
        ['Press', 'press@studioagency.com'],
    ];
@endphp

<x-fade-in>
    <h2 class="font-display text-base font-semibold text-neutral-950">
        Our offices
    </h2>
    <p class="mt-6 text-base text-neutral-600">
        Prefer doing things in person? We don’t but we have to list our
        addresses here for legal reasons.
    </p>

    <x-offices class="mt-10 grid grid-cols-1 gap-8 sm:grid-cols-2" />

    <x-border class="mt-16 pt-16">
        <h2 class="font-display text-base font-semibold text-neutral-950">
            Email us
        </h2>
        <dl class="mt-6 grid grid-cols-1 gap-8 text-sm sm:grid-cols-2">
            @foreach ($emails as $email)
                <div>
                    <dt class="font-semibold text-neutral-950">{{ $email[0] }}</dt>
                    <dd>
                        <a href="mailto:{{ $email[1] }}" class="text-neutral-600 hover:text-neutral-950">
                            {{ $email[1] }}
                        </a>
                    </dd>
                </div>
            @endforeach
        </dl>
    </x-border>

        <x-border class="mt-16 pt-16">
            <h2 class="font-display text-base font-semibold text-neutral-950">
                Follow us
            </h2>
            <x-social-media.social-media class="mt-6" />
        </x-border>
</x-fade-in>