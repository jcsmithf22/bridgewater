@php
    $navigation = [
        [
            'title' => 'Work',
            'links' => [
                ['title' => 'Family Fund', 'href' => '/work/family-fund'],
                ['title' => 'Unseal', 'href' => '/work/unseal'],
                ['title' => 'Phobia', 'href' => '/work/phobia'],
                ['title' => "See all <span aria-hidden='true'>&rarr;</span>", 'href' => '/work'],
            ],
        ],
        [
            'title' => 'Company',
            'links' => [
                ['title' => 'About', 'href' => '/about'],
                ['title' => 'Process', 'href' => '/process'],
                ['title' => 'Blog', 'href' => '/blog'],
                ['title' => 'Contact us', 'href' => '/contact'],
            ],
        ],
        [
            'title' => 'Connect',
            'links' => [
                ['title' => 'Facebook', 'href' => 'https://facebook.com', 'icon' => 'facebook'],
                ['title' => 'Instagram', 'href' => 'https://instagram.com', 'icon' => 'instagram'],
                ['title' => 'GitHub', 'href' => 'https://github.com', 'icon' => 'github'],
            ],
        ],
    ];
@endphp

<nav>
    <ul role="list" class="grid grid-cols-2 gap-8 sm:grid-cols-3">
        @foreach ($navigation as $section)
            <li>
                <div class="font-display text-sm font-semibold tracking-wider text-neutral-950">
                    {!! $section['title'] !!}
                </div>
                <ul role="list" class="mt-4 text-sm text-neutral-700">
                    @foreach ($section['links'] as $link)
                        <li key={linkIndex} class="mt-4">
                            <a href="{{ $link['href'] }}" class="transition hover:text-neutral-950" wire:navigate>
                                {!! $link['title'] !!}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</nav>
