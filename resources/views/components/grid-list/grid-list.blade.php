<x-fade-in-stagger-parent>
    <ul role="list" {{ $attributes->merge(['class' => 'grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3']) }}>
        {{ $slot }}
    </ul>
</x-fade-in-stagger-parent>