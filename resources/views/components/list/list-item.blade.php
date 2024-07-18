@props(['index' => 0, 'faster' => false, 'title' => ''])

<li class="group mt-10 first:mt-0">
    <x-fade-in-stagger-child faster="{{ $faster }}" index="{{ $index }}">
        <x-border class="pt-10 group-first:pt-0 group-first:before:hidden group-first:after:hidden">
            @if (strlen($title) > 0)
                <strong class="font-semibold text-neutral-950">{{ $title }}. </strong>
            @endif
            {{ $slot }}
        </x-border>
    </x-fade-in-stagger-child>
</li>
