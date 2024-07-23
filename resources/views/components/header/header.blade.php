@props(['invert' => false, 'panelId' => 'default_panel', 'icon' => 'menu-icon'])

<x-container>
    <div class="flex items-center justify-between">
        <a href="/" aria-label="Home" wire:navigate>
            <x-logo.logomark class="h-8 sm:hidden" invert="{{ $invert }}" />
            <x-logo.logo class="hidden h-8 sm:block" invert="{{ $invert }}" fillOnHover="false" />
        </a>
        <div class="flex items-center gap-x-8">
            <x-button href="{{ route('contact') }}" invert="{{ $invert }}">
                Contact us
            </x-button>
            <button type="button" @click="headerExpanded = !headerExpanded"
                :aria-expanded="headerExpanded ? 'true' : 'false'" aria-controls="{{ $panelId }}"
                class="group -m-2.5 rounded-full p-2.5 transition {{ $invert ? 'hover:bg-white/10' : 'hover:bg-neutral-950/10 ?>' }}"
                aria-label="Toggle navigation">
                <x-header.icon icon="{{ $icon }}"
                    class="h-6 w-6 {{ $invert ? 'fill-white group-hover:fill-neutral-200' : 'fill-neutral-950 group-hover:fill-neutral-700' }}" />
            </button>
        </div>
    </div>
</x-container>
