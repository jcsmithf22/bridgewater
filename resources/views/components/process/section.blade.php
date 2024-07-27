@props(['title', 'image', 'shape' => 0])

<x-container class="group/section [counter-increment:section]">
    <div class="lg:flex lg:items-center lg:justify-end lg:gap-x-8 lg:group-even/section:justify-start xl:gap-x-20">
        <div class="flex justify-center">
            <x-fade-in class="w-[33.75rem] flex-none lg:w-[45rem]">
                <x-stylized-image shape="{{ $shape }}" src="{{ $image }}"
                    sizes="(min-width: 1024px) 41rem, 31rem"
                    class="justify-center lg:justify-end lg:group-even/section:justify-start" />
            </x-fade-in>
        </div>
        <div class="mt-12 lg:mt-0 lg:w-[37rem] lg:flex-none lg:group-even/section:order-first">
            <x-fade-in>
                <div class="font-display text-base font-semibold before:text-neutral-300 before:content-['/_'] after:text-neutral-950 after:content-[counter(section,decimal-leading-zero)]"
                    aria-hidden="true"></div>
                <h2 class="mt-2 font-display text-3xl font-medium tracking-tight text-background sm:text-4xl">
                    {{ $title }}
                </h2>
                <div class="mt-6">{{ $slot }}</div>
            </x-fade-in>
        </div>
    </div>
</x-container>
