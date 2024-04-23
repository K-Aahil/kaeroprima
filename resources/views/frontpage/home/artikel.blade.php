@extends('frontpage.layouts.main')
@push('styles')

    @section('content')
        @if (!empty($list_data) && !empty($list_data[0]) && $list_data[0]->data_file != null)
            <img src="{{ asset_administrator('assets/media/news/' . $list_data[0]->data_file) }}" alt=""
                class="w-full lg:h-[50em] object-cover" />
        @else
            <img src="{{ asset_administrator('assets/media/default.jpg') }}" alt=""
                class="w-full lg:h-[50em] object-cover" />
        @endif

        <section class="px-8 lg:px-[8.4em]">
            @if ($list_data != null)
                <div class="lg:flex justify-between lg:mt-[4.625em] mt-[2em] pb-11 lg:pb-0">
                    <p class="text-[3em] lg:w-[60%] lg:text-[4.375em] font-bold text-[#7D7D7D]">
                        @if ($list_data[0] != null)
                            {{ $list_data[0]->title }}
                        @endif
                    </p>
                    @if ($list_data[0] != null)
                        <div class="mt-4 md:mt-0 flex flex-col justify-around h-full">
                            <div
                                class="lg:mb-14 mb-8 text-[1em] text-justify lg:text-[1.25em] font-normal lg:w-[23em] break-words overflow-hidden h-[6.4em] leading-[1.6em]">
                                {!! Str::limit($list_data[0]->description, 140) !!}
                            </div>
                            <div class="flex items-center relative">
                                <img class="navbar-svg position-absolute" src="frontpage/assets/images/button-bg.png"
                                    alt="">
                                <a href="{{ route('artikel_detail', ['slug' => $list_data[0]->slug]) }}"
                                    class="text-white font-semibold ml-[1.5em] whitespace-nowrap z-10 relative">
                                    READ MORE
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            @else
            @endif

            @if ($list_data != null)
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 lg:gap-8  lg:pt-16 mb-[7.75em]">
                    <div class="flex flex-col">
                        @if (!empty($list_data) && !empty($list_data[1]) && $list_data[1]->data_file != null)
                            <img src="{{ asset_administrator('assets/media/news/' . $list_data[1]->data_file) }}" alt=""
                                class="w-full h-[18em] lg:h-[23em] object-center object-cover grayscale">
                        @else
                            <img src="{{ asset_administrator('assets/media/default.jpg') }}" alt=""
                                class="w-full h-[18em] lg:h-[23em] object-center object-cover grayscale">
                        @endif
                        @if ($list_data[1] != null)
                            <a href="{{ route('artikel_detail', ['slug' => $list_data[1]->slug]) }}"
                                class="font-playfair text-[2em] hover:text-[#7D7D7D] lg:text-[2.5em] text-[#7D7D7D] font-black lg:w-[10em] break-words overflow-hidden h-[3.2em] leading-[1.6em]">
                                {{ $list_data[1]->title }}
                            </a>
                            <a href="{{ route('artikel_detail', ['slug' => $list_data[1]->slug]) }}"
                                class="text-kaero-gold text-[1.125em] font-medium lg:text-[1.125em] hover:text-kaero-gold underline mt-2 lg:mt-5">Read
                                more</a>
                        @endif
                    </div>
                    <div class="flex flex-col">
                        @if (!empty($list_data) && !empty($list_data[2]) && $list_data[2]->data_file != null)
                            <img src="{{ asset_administrator('assets/media/news/' . $list_data[2]->data_file) }}" alt=""
                                class="w-full h-[18em] lg:h-[23em] object-center object-cover grayscale">
                        @else
                            <img src="{{ asset_administrator('assets/media/default.jpg') }}" alt=""
                                class="w-full h-[18em] lg:h-[23em] object-center object-cover grayscale">
                        @endif
                        @if ($list_data[2] != null)
                            <a href="{{ route('artikel_detail', ['slug' => $list_data[2]->slug]) }}"
                                class="font-playfair text-[2em] hover:text-[#7D7D7D] lg:text-[2.5em] text-[#7D7D7D] font-black lg:w-[10em] break-words overflow-hidden h-[3.2em] leading-[1.6em]">
                                {{ $list_data[2]->title }}
                            </a>
                            <a href="{{ route('artikel_detail', ['slug' => $list_data[2]->slug]) }}"
                                class="text-kaero-gold text-[1.125em] font-medium lg:text-[1.125em] hover:text-kaero-gold underline mt-2 lg:mt-5">Read
                                more</a>
                        @endif
                    </div>
                    <div class="flex flex-col">
                        @if (!empty($list_data) && !empty($list_data[3]) && $list_data[3]->data_file != null)
                            <img src="{{ asset_administrator('assets/media/news/' . $list_data[3]->data_file) }}"
                                alt="" class="w-full h-[18em] lg:h-[23em] object-center object-cover grayscale">
                        @else
                            <img src="{{ asset_administrator('assets/media/default.jpg') }}" alt=""
                                class="w-full h-[18em] lg:h-[23em] object-center object-cover grayscale">
                        @endif
                        @if ($list_data[3] != null)
                            <a href="{{ route('artikel_detail', ['slug' => $list_data[3]->slug]) }}"
                                class="font-playfair text-[2em] hover:text-[#7D7D7D] lg:text-[2.5em] text-[#7D7D7D] font-black lg:w-[10em] break-words overflow-hidden h-[3.2em] leading-[1.6em]">
                                {{ $list_data[3]->title }}
                            </a>
                            <a href="{{ route('artikel_detail', ['slug' => $list_data[3]->slug]) }}"
                                class="text-kaero-gold text-[1.125em] font-medium lg:text-[1.125em] hover:text-kaero-gold underline mt-2 lg:mt-5">Read
                                more</a>
                        @endif
                    </div>
                </div>
            </div>
            @else
            @endif
        </section>
    @endsection
