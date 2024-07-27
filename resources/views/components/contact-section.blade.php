<x-container class="mt-24 sm:mt-32 lg:mt-40">
    <x-fade-in class="-mx-6 rounded-4xl bg-background px-6 py-20 sm:mx-0 sm:py-32 md:px-12">
        <div class="mx-auto max-w-4xl">
            <div class="max-w-xl">
                <h2 class="font-display text-3xl font-medium text-white [text-wrap:balance] sm:text-4xl">
                    Tell us about your project
                </h2>
                <div class="mt-6 flex">
                    <x-button href="{{ route('contact') }}" invert>
                        Say Hej
                    </x-button>
                </div>
                <div class="mt-10 border-t border-white/10 pt-10">
                    <h3 class="font-display text-base font-semibold text-white">
                        Our offices
                    </h3>
                    <x-offices
                        invert="true"
                        class="mt-6 grid grid-cols-1 gap-8 sm:grid-cols-2"
                    />
                </div>
            </div>
        </div>
    </x-fade-in>
</x-container>
