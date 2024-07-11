@props(['index' => 1])

<div
    class="transition opacity-0 translate-y-6 transform-gpu duration-500"
    :class="{ '!opacity-100 !translate-y-0': fade_parent_show }"
    style="transition-delay: {{ ($index - 1) * 200 }}ms"
>
    {{ $slot }}
</div>
