@extends('frontpage.layouts.main')
@push('styles')
    @section('content')
        <img src="frontpage/assets/images/banner-about.png" alt="" class="w-full lg:h-[42em] h-[22em]" />
        @foreach ($about_us as $about)
            <section class="bg-[#3C2415] pt-5 lg:pt-[6.938em]">
                <div class="items-start mx-auto xl:gap-16 md:grid md:grid-cols-2 px-8 lg:px-[8.4em]">
                    <h2 class="lg:text-[4.375em] text-[3em] font-bold text-[#AD976E]">About Us</h2>
                    <div class="mt-4 md:mt-0 text-white text-[1em] lg:text-[1.25em] font-normal">
                        {!! $about->description !!}
                    </div>
                </div>
                <div class="mx-auto px-8 lg:px-[8.4em] lg:flex justify-between items-center mt-[4em] lg:mt-[9.375em]">
                    <div class="mt-4 md:mt-0 w-[35.5em] mb-6 text-[1em] lg:text-[1.25em] font-normal text-white">
                        {!! $about->side_description !!}
                    </div>
                    <img class="lg:w-[437px] w-full h-[18em] lg:h-[590px] right-0"
                        src="{{ asset_administrator("assets/media/about_us/$about->image") }}" alt="dashboard image" />
                </div>
                <div
                    class="items-start mx-auto xl:gap-16 md:grid md:grid-cols-2 px-8 lg:px-[8.4em] pb-5 lg:pb-[7.125em] mt-[3em] lg:mt-[5.375em]">
                    <h2 class="lg:text-[4.375em] text-[3em] font-bold text-[#AD976E]">Our Goal</h2>
                    <div class="mt-4 md:mt-0 text-white text-[1em] lg:text-[1.25em] font-normal">
                        {!! $about->goal_description !!}
                    </div>
                </div>
            </section>
        @endforeach
    @endsection

@endpush
