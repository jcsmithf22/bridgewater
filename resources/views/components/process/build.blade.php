@php
    $author = [
        "name" => "Debra Fiscal",
        "role" => "CEO of Unseal",
    ];
@endphp

<x-process.section title="Build" image="{{ asset('img/laptop.webp') }}" shape="1">
    <div class="space-y-6 text-base text-neutral-600 font-normal">
        <p>
            Based off of the discovery phase, we develop a comprehensive roadmap
            for each product and start working towards delivery. The roadmap is an
            intricately tangled mess of technical nonsense designed to drag the
            project out as long as possible.
          </p>
          <p>
            Each client is assigned a key account manager to keep lines of
            communication open and obscure the actual progress of the project.
            They act as a buffer between the client’s incessant nagging and the
            development team who are hard at work scouring open source projects
            for code to re-purpose.
          </p>
          <p>
            Our account managers are trained to only reply to client emails after
            9pm, several days after the initial email. This reinforces the general
            aura that we are very busy and dissuades clients from asking for
            changes.
          </p>
        </div>

    <x-blockquote.blockquote :author="$author" class="mt-12">
        Studio were so regular with their progress updates we almost began to
        think they were automated!
    </x-blockquote.blockquote>
</x-process.section>
