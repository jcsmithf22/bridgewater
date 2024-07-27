<a
    {{ $attributes->merge(['class' => 'group relative isolate -mx-6 bg-background px-6 py-10 even:mt-px sm:mx-0 sm:px-0 sm:py-16 sm:odd:pr-16 sm:even:mt-0 sm:even:border-l sm:even:border-divider sm:even:pl-16']) }}>
    {{ $slot }}
    <span
        class="absolute inset-y-0 -z-10 w-screen bg-hover opacity-0 transition group-odd:right-0 group-even:left-0 group-hover:opacity-100" />
</a>
