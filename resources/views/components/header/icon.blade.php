@props(['icon' => 'menu-icon'])

@if ($icon == 'menu-icon')
    <x-header.menu-icon {{ $attributes }} />
@elseif($icon == 'x-icon')
    <x-header.x-icon {{ $attributes }} />
@endif
