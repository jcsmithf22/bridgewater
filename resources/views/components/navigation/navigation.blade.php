<nav class="mt-px font-display text-5xl font-medium tracking-tight text-white">
    <x-navigation.navigation-row>
        <x-navigation.navigation-item href="/work" wire:navigate>Our Work</x-navigation.navigation-item>
        <x-navigation.navigation-item href="/about" wire:navigate>About Us</x-navigation.navigation-item>
    </x-navigation.navigation-row>
    <x-navigation.navigation-row>
        <x-navigation.navigation-item href="{{ route('process') }}" wire:navigate>Our Process</x-navigation.navigation-item>
        <x-navigation.navigation-item href="/blog" wire:navigate>Blog</x-navigation.navigation-item>
    </x-navigation.navigation-row>
</nav>
