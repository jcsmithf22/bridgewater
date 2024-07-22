@extends('layouts.root')

@section('title')
    Contact Us
@endsection

@section('content')
    <x-page-intro eyebrow="Contact us" title="Help us help you">
        <p>Reach out. We can't wait to hear from you.</p>
    </x-page-intro>

    <x-container class="mt-24 sm:mt-32 lg:mt-40">
        <div class="grid grid-cols-1 gap-x-8 gap-y-24 lg:grid-cols-2">
            <x-contact.contact-form/>
            <x-contact.contact-details/>
        </div>
    </x-container>
@endsection
