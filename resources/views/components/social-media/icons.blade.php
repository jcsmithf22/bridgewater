@props(['icon'])

@if($icon == 'github')
    <x-social-media.github-icon {{ $attributes }} />
@elseif($icon == 'facebook')
    <x-social-media.facebook-icon {{ $attributes }} />
@elseif($icon == 'instagram')
    <x-social-media.instagram-icon {{ $attributes }} />
@endif
