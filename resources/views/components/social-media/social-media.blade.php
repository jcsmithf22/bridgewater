@props(['invert' => false])

@php
    $socialMediaProfiles = [
        [ "title" => 'Facebook', "href" => 'https://facebook.com', "icon" => "facebook" ],
        [ "title" => 'Instagram', "href" => 'https://instagram.com', "icon" => "instagram" ],
        [ "title" => 'GitHub', "href" => 'https://github.com', "icon" => "github" ],
    ];
@endphp

<ul
    role="list"
    {{ $attributes->merge(['class' => 'flex gap-x-10 ' . ($invert ? 'text-white' : 'text-neutral-900')]) }}
>
    @foreach($socialMediaProfiles as $profile)
        <li>
            <a
                href="{{ $profile['href'] }}"
                aria-label="{{ $profile['title'] }}"
                class="transition {{ $invert ? 'hover:text-neutral-200' : 'hover:text-neutral-700' }}"
            >
                <x-social-media.icons icon="{{ $profile['icon'] }}" class='h-6 w-6 fill-current'/>
            </a>
        </li>
    @endforeach
</ul>

