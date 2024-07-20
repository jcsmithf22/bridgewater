<x-container class="mt-24 w-full sm:mt-32 lg:mt-40">
    <x-fade-in>
        <div class="grid grid-cols-1 gap-x-8 gap-y-16 lg:grid-cols-2">
            <x-footer.navigation />
            <div class="flex lg:justify-end">
                <x-footer.newsletter-form />
            </div>
        </div>
        <div class="mb-20 mt-24 flex flex-wrap items-end justify-between gap-x-6 gap-y-4 border-t border-neutral-950/10 pt-12">
            <a href="/" aria-label="Home">
            <x-logo.logo class="h-8" />
            </a>
            <p class="text-sm text-neutral-700">
                © Bridgewater Marketing Group {{ date('Y') }}
            </p>
        </div>
    </x-fade-in>
</x-container>
