@extends('frontpage.layouts.contact')
@push('styles')
    <style>
        body {
            overflow: hidden;
        }
    </style>
@endpush
@section('content')
    <section class="bg-kaero-primary h-screen lg:pt-[12.5em]">
        <div class=" pt-5 lg:pt-[6.938em] px-8 lg:px-[8.4em] lg:grid grid-cols-2">
            <p class="text-kaero-gold uppercase font-bold text-[2.5em] lg:text-[4.375em]">CONTACT US</p>
            <div class="lg:pl-[6.25em] flex flex-col lg:gap-[3.125em] mt-10 lg:mt-0 gap-4">
                <ul>
                    <li class="uppercase text-kaero-gold text-[0.75em] lg:text-[0.8em] font-bold">Contact</li>
                    <li class="text-white lg:w-[16.438em] lg:text-[1.125em]">{{ $settings['email'] }}</li>
                </ul>
                <ul>
                    <li class="uppercase text-kaero-gold text-[0.75em] lg:text-[0.8em] font-bold">Address</li>
                    <li class="text-white lg:w-[16em] lg:text-[1.125em]">{!! $detail_address !!}</li>
                </ul>
            </div>
        </div>
    </section>
@endsection
