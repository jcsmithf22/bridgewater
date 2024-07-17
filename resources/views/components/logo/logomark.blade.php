@props(['invert' => false, 'id' => rand(1000, 9999)])

<svg viewBox="0 0 32 32" aria-hidden="true" {{ $attributes }}>
    <rect clip-path="url(#{{ $id }}-clip)"
        class="h-8 transition-all duration-300 w-0 group-hover/logo:w-8 {{ $invert ? 'fill-white' : 'fill-neutral-950' }}" />
    <use href="#{{ $id }}-path" class="{{ $invert ? 'stroke-white' : 'stroke-neutral-950' }}" fill="none"
        stroke-width="1.5" />
    <defs>
        <path id="{{ $id }}-path"
            d="M3.25 26v.75H7c1.305 0 2.384-.21 3.346-.627.96-.415 1.763-1.02 2.536-1.752.695-.657 1.39-1.443 2.152-2.306l.233-.263c.864-.975 1.843-2.068 3.071-3.266 1.209-1.18 2.881-1.786 4.621-1.786h5.791V5.25H25c-1.305 0-2.384.21-3.346.627-.96.415-1.763 1.02-2.536 1.751-.695.658-1.39 1.444-2.152 2.307l-.233.263c-.864.975-1.843 2.068-3.071 3.266-1.209 1.18-2.881 1.786-4.621 1.786H3.25V26Z" />
        <clipPath id="{{ $id }}-clip">
            <use href="#{{ $id }}-path" />
        </clipPath>
    </defs>
</svg>
