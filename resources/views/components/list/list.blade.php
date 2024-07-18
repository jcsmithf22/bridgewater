<x-fade-in-stagger-parent>
    <ul role="list" {{ $attributes->merge(['class' => 'text-base text-neutral-600']) }}>
        {{ $slot }}
    </ul>
</x-fade-in-stagger-parent>
