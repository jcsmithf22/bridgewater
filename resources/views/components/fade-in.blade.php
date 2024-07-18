<div x-data="{ fade_single_show: false }" x-intersect.once.margin.0.0.-200px.0="fade_single_show = true">
    <div {{ $attributes->merge(['class' => 'transition opacity-0 translate-y-6 transform-gpu duration-500']) }}
        :class="{ '!opacity-100 !translate-y-0': fade_single_show }">
        {{ $slot }}
    </div>
</div>