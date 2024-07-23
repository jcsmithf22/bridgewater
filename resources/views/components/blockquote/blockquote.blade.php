@props(['author', 'image' => ''])

@if (strlen($image))
    <x-blockquote.blockquote-image :author="$author" image="{{ $image }}" {{ $attributes }}>
        {{ $slot }}
    </x-blockquote.blockquote-image>
@else
    <x-blockquote.blockquote-no-image :author="$author" {{ $attributes }}>
        {{ $slot }}
    </x-blockquote.blockquote-no-image>
@endif