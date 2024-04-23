@extends('frontpage.layouts.main')

@section('content')
    {{-- <div style="background-image: url({{ asset_administrator('assets/media/menus/' . $management->image) }})" alt=""
        class="w-full h-[15em] lg:h-[21em] bg-cover lg:px-[8.4em] px-8 py-5 lg:py-[7em]">
        <p class="text-[#AD976E] text-[3em] lg:text-[4.375em] font-bold lg:mt-10">Careers</p>
    </div> --}}

    <div x-data="{ expanded: 0 }">
        @foreach ($job_title as $key => $job)
            <div>
                <h2
                    :class="expanded === {{ $key }} ? 'bg-kaero-primary text-white' : 'bg-[#D9D9D9] text-[#7d7d7d]'">
                    <button type="button" @click="expanded = (expanded === {{ $key }} ? null : {{ $key }})"
                        :aria-expanded="expanded === {{ $key }}"
                        aria-controls="accordion-collapse-body-{{ $key }}"
                        class="flex items-center w-full lg:h-[6.25em] px-8 py-2 lg:px-[9.6em] lg:py-[1em] gap-2 lg:gap-[1.5em] font-bold border border-black"
                        data-accordion-target="#accordion-collapse-body-{{ $key }}"
                        aria-controls="accordion-collapse-body-{{ $key }}">
                        <img id="plus-icon" :class="expanded === {{ $key }} ? 'hidden' : ''"
                            src="{{ asset_frontpage('assets/icons/plus.svg') }}" alt="">
                        <img id="plus-icon" :class="expanded === {{ $key }} ? '' : 'hidden'"
                            src="{{ asset_frontpage('assets/icons/minus.svg') }}" alt="">
                        <span class="font-avenir font-bold">
                            <p>{{ $key + 1 }}. {{ $job->name }}</p>
                        </span>
                    </button>
                </h2>
                <div id="faqs-text-{{ $key }}" role="region" aria-labelledby="faqs-title-{{ $key }}"
                    class="grid transition-all duration-300 ease-in-out"
                    :class="expanded === {{ $key }} ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'">
                    <div class="grid grid-cols-1 lg:grid-cols-2 overflow-hidden">
                        <div>
                            <img src="{{ asset_administrator('assets/media/job_titles/' . $job->image) }}" alt=""
                                class="w-full lg:w-[85%] h-[85%] lg:h-full object-cover object-center" />
                        </div>
                        <div class="flex flex-col justify-center lg:-mt-0 lg:pt-8 pb-5 lg:pb-0 px-8 lg:px-10">
                            <p class="text-[#AD976E] lg:text-[4.375em] text-[3.5em] font-bold font-avenir break-words">
                                {{ $job->title }}
                            </p>
                            <div class="lg:w-[31.25em] lg:mt-[2em] font-avenir">
                                {!! nl2br($job->description) !!}
                            </div>
                            <a href=""
                                class="underline font-semibold hover:cursor-pointer mt-8 font-avenir hover:text-red-500">Apply
                                now</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@push('script')
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endpush
