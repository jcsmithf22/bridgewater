@props(['index' => 0, 'faster' => true])

<div {{ $attributes->merge(['class' => 'transition opacity-0 translate-y-6 transform-gpu duration-500']) }}
    :class="{ '!opacity-100 !translate-y-0': fade_parent_show }"
    style="transition-delay: {{ $index * ($faster ? 120 : 200) }}ms">
    {{ $slot }}
</div>
