@php
    $client = [
        'logo' => asset('/img/logo_light.svg'),
        'name' => 'Bridgewater Marketing Group',
    ];
@endphp

@extends('layouts.root')

@section('content')
{{--    <div class="relative">--}}
        <x-container class="mt-24 sm:mt-32 md:mt-56">
            <div class="pb-24 sm:pb-32 lg:pb-56">
{{--                <div class="absolute -inset-x-4 -bottom-16">--}}
{{--                    <svg--}}
{{--                        id="svg1"--}}
{{--                        viewBox="0 0 60.461536 32"--}}
{{--                        class="fill-zinc-200"--}}
{{--                    >--}}
{{--                        <defs--}}
{{--                            id="defs1"/>--}}
{{--                        <g--}}
{{--                            id="layer1">--}}
{{--                            <path--}}
{{--                                style="stroke-width:0.115972"--}}
{{--                                d="m 0.25365325,20.51355 v 0.714133 L 60.178417,3.6341465 60.210475,0.61533115 Z"--}}
{{--                                id="path1"/>--}}
{{--                            <path--}}
{{--                                style="stroke-width:0.115667"--}}
{{--                                d="m 2.1898661,29.977198 c 0,0 0.9067965,-8.404531 2.9133432,-8.346292 2.006535,0.05824 2.1994771,5.745353 2.1223049,5.822991 -0.077149,0.07761 -0.3887326,-3.403929 -0.6588468,-3.229244 -0.2701142,0.174696 -0.6145408,5.791364 -0.6145408,5.791364 z"--}}
{{--                                id="path2"/>--}}
{{--                            <path--}}
{{--                                style="stroke-width:0.115667"--}}
{{--                                d="m 13.926443,29.898076 -5.01647,-0.03736 c 0,0 5.202262,-12.89715 14.93792,-12.747617 9.735657,0.149532 14.492,10.242959 14.492,10.242959 0,0 -5.313732,-8.934549 -11.965199,-9.084081 -6.651455,-0.149532 -11.928031,8.074735 -12.448251,11.626131 z"--}}
{{--                                id="path3"/>--}}
{{--                            <path--}}
{{--                                style="stroke-width:0.115667"--}}
{{--                                d="m 45.504614,32.009778 c 0,0 1.569865,-20.276662 15.29359,-22.620197"--}}
{{--                                id="path4"/>--}}
{{--                            <path--}}
{{--                                style="stroke-width:0.115667"--}}
{{--                                d="m 53.455255,32.009778 h -8.001289 l 15.040393,-22.2635655 -1.1e-5,7.9985815 c 0,0 -5.823711,0.71324 -7.039093,14.264984 z"--}}
{{--                                id="path5"/>--}}
{{--                        </g>--}}
{{--                    </svg>--}}
{{--                </div>--}}
                <x-fade-in class="max-w-3xl py-12">
                    <h1
                        class="font-display text-5xl font-medium tracking-tight text-neutral-950 [text-wrap:balance] sm:text-7xl">
                        Take your marketing to the next level.
                    </h1>
                    <p class="mt-6 text-xl text-neutral-600">
                        Take the headache out of your online presence. <span class="font-semibold text-background">Bridgewater Marketing
                        Group</span> provides fully customized marketing plans for every
                        service you need.
                    </p>
                </x-fade-in>
            </div>
        </x-container>
{{--    </div>--}}

    <x-index.clients/>

    <x-index.case-studies/>

    <x-index.testimonial class="mt-24 sm:mt-32 lg:mt-40 mb-48" :client="$client">
        We bring the business expertise you need to build yours.
    </x-index.testimonial>

    <x-index.services/>

    <x-contact-section/>

@endsection
