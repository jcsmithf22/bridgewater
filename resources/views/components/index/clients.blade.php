@php
    $clients = [
        ['Phobia', asset('img/clients/phobia/logo-light.svg')],
        ['Family Fund', asset('img/clients/family-fund/logo-light.svg')],
        ['Unseal', asset('img/clients/unseal/logo-light.svg')],
        ['Mail Smirk', asset('img/clients/mail-smirk/logo-light.svg')],
        ['Home Work', asset('img/clients/home-work/logo-light.svg')],
        ['Green Life', asset('img/clients/green-life/logo-light.svg')],
        ['Bright Path', asset('img/clients/bright-path/logo-light.svg')],
        ['North Adventures', asset('img/clients/north-adventures/logo-light.svg')],
    ];

@endphp

<div class="mt-24 rounded-4xl bg-neutral-950 py-20 sm:mt-32 sm:py-32 lg:mt-56">
    <x-container>
        <x-fade-in class="flex items-center gap-x-8 flex-row">
            <h2 class="text-center font-display text-sm font-semibold tracking-wider text-white sm:text-left">
                We’ve worked with hundreds of amazing people
            </h2>
            <div class="h-px flex-auto bg-neutral-800"></div>
        </x-fade-in>
        <x-fade-in-stagger-parent>
            <ul role="list" class="pt-10 grid grid-cols-2 gap-x-8 gap-y-10 lg:grid-cols-4">
                @foreach ($clients as $client)
                    <li>
                        <x-fade-in-stagger-child index="{{ $loop->index }}">
                            <img src="{{ $client[1] }}" alt="{{ $client[0] }}" />
                        </x-fade-in-stagger-child>
                    </li>
                @endforeach
            </ul>
        </x-fade-in-stagger-parent>
    </x-container>
</div>
