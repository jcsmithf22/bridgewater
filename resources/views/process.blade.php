@extends('layouts.root')

@section('title')
Our Process
@endsection

@section('content')
<x-page-intro eyebrow="Our process" title="How we work">
    <p> We believe in efficiency and maximizing our resources to provide the
        best value to our clients. The primary way we do that is by re-using
        the same five projects we’ve been developing for the past decade.
    </p>
</x-page-intro>

<div class="mt-24 space-y-24 [counter-reset:section] sm:mt-32 sm:space-y-32 lg:mt-40 lg:space-y-40">
    <x-process.discover />
    <x-process.build />
    <x-process.deliver />
  </div>


<x-process.values />

<x-contact-section />

@endsection