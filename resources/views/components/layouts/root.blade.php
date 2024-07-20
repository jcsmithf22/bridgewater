<header x-data="{ headerExpanded: false, expandableMenuHeight: $refs.expandableMenu.getBoundingClientRect().height }"
        x-init="$watch('headerExpanded', () => expandableMenuHeight = $refs.expandableMenu.getBoundingClientRect().height)">
    <div class="absolute left-0 right-0 top-2 z-40 pt-14" :aria-hidden="headerExpanded ? 'true' : undefined"
         :inert="headerExpanded ? '' : undefined">
        <!-- Add header -->
        <x-header.header icon="menu-icon"/>
    </div>

    <div id="default_panel" class="relative z-50 overflow-hidden bg-neutral-950 pt-2 h-2 transition-all duration-500"
         :aria-hidden="headerExpanded ? undefined : 'true'" :inert="headerExpanded ? undefined : ''"
         :style="{ height: headerExpanded ? expandableMenuHeight + 'px' : '0.5rem' }">
        <div class="bg-neutral-800" x-ref="expandableMenu">
            <div class="bg-neutral-950 pb-16 pt-14">
                <x-header.header invert="true" icon="x-icon"/>
            </div>
            <x-navigation.navigation/>
            <div
                class="relative bg-neutral-950 before:absolute before:inset-x-0 before:top-0 before:h-px before:bg-neutral-800">
                <x-container>
                    <div class="grid grid-cols-1 gap-y-10 pb-16 pt-10 sm:grid-cols-2 sm:pt-16">
                        <div>
                            <h2 class="font-display text-base font-semibold text-white">
                                Our offices
                            </h2>
                            <x-offices invert="true" class="mt-6 grid grid-cols-1 gap-8 sm:grid-cols-2"/>
                        </div>
                        <div class="sm:border-l sm:border-transparent sm:pl-16">
                            <h2 class="font-display text-base font-semibold text-white">
                                Follow us
                            </h2>
                        </div>
                    </div>

                </x-container>
            </div>
        </div>
    </div>
</header>

<div style="border-top-left-radius: 40px; border-top-right-radius: 40px;"
     class="relative flex flex-auto overflow-hidden bg-white pt-14">
    <div class="relative isolate flex w-full flex-col pt-9">
        <x-grid.grid-pattern
            class="absolute inset-x-0 -top-14 -z-10 h-[1000px] w-full fill-neutral-50 stroke-neutral-950/5 [mask-image:linear-gradient(to_bottom_left,white_40%,transparent_50%)]"
            yOffset="-96"/>

        <main class="w-full flex-auto">{{ $slot }}</main>

        <x-footer.footer/>
    </div>
</div>
