<div
    x-data="{ fade_single_show: false }"
    x-intersect.once.margin.0.0.-200px.0="fade_single_show = true"
    :class="{ '!opacity-100 !translate-y-0': fade_single_show }"
    {{ $attributes->merge(['class' => 'transition ease-[cubic-bezier(0.4,0,0.4,1)] opacity-0 translate-y-6 transform-gpu duration-500']) }}
>
    {{ $slot }}
</div>
