@props(['author'])

<x-border position="left" {{ $attributes->merge(['class' => 'pl-8']) }}>
    <figure class="text-sm">
        <blockquote
            class="text-neutral-600 [&>*]:relative [&>:first-child]:before:absolute [&>:first-child]:before:right-full [&>:first-child]:before:content-['“'] [&>:last-child]:after:content-['”']">
            {{ $slot }}
        </blockquote>
        <figcaption class="mt-6 font-semibold text-neutral-950">
            {{ $author['name'] }}, {{ $author['role'] }}
        </figcaption>
    </figure>
</x-border>
