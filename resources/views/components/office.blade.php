@props(['name', 'invert' => false])

<address
    class="text-sm not-italic {{ $invert ? 'text-neutral-300' : 'text-neutral-600' }}"
>
    <strong class="{{$invert ? 'text-white' : 'text-neutral-950'}}">
        {{ $name }}
    </strong>
    <br/>
    {{ $slot }}
</address>

