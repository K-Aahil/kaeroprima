@extends('frontpage.layouts.main')
@section('content')
    <style>
        [aria-selected="true"] {
            border-right-color: #7D7D7D;
            border-color: #7D7D7D;
            background-color: #3C2415;
            color: #ffffff;
            font-weight: 600;
            font-size: 1.125em
        }

        [aria-selected="true"]:hover {
            color: #ffffff
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-button-disabled {
            display: none;
        }

        @media (max-width: 480px) {
            [aria-selected="true"] {
                border-right-color: #7D7D7D;
                border-color: #7D7D7D;
                background-color: #3C2415;
                color: #ffffff;
                font-weight: 600;
                font-size: 0.85em
            }

            [aria-selected="true"]:hover {
                color: #ffffff
            }
        }
    </style>

    @foreach ($shortlist as $key => $item)
        <div id="tab-{{ $item->id }}">
            <div style="background-image: url({{ asset_administrator('assets/media/menus/' . $management->image) }})" alt=""
                class="w-full lg:h-[21.875em] bg-cover px-8 py-5 lg:px-[13em] lg:py-[6.25em] flex flex-col lg:flex-row justify-between items-center">
                <div class="flex items-center w-full gap-4 lg:gap-[8.5em] lg:ml-16">
                    <img src="{{ asset_administrator('assets/media/short/' . $item->image) }}" alt=""
                        class="w-[6.625em] h-[5.938em]">
                    <p class="text-[#AD976E] text-[2em] lg:text-[3em] font-black">
                        {{ $item->name }}
                    </p>
                </div>
                <div
                    class="text-white text-[1.125em] mt-4 lg:mt-0 font-normal w-full text-justify lg:text-left lg:w-[23.625em]">
                    {!! nl2br( $item->description) !!}
                </div>
            </div>
        </div>
    @endforeach

    <ul class="grid grid-cols-4 lg:flex" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
        @foreach ($shortlist_items as $key => $item)
            <li rel="#tab-{{ $item->id }}"
                class="lg:flex-grow flex flex-col lg:flex-row lg:gap-1 text-center h-[5em] justify-center items-center lg:h-auto pl-4 pr-4 lg:w-full text-[0.85em] lg:text-[1.125em] font-extralight text-[#7D7D7D] bg-[#E8E6E6] lg:border-r border-1 border-[#7D7D7D] border-r-[#7D7D7D] hover:border-r-[#7D7D7D] lg:py-[2em]"
                id="testing" data-tabs-target="#tes-{{ $item->id }}" role="tab" aria-controls="test"
                aria-selected="false">
                <span>
                    {{ $item->code }}
                </span>
                <p>
                    {{ $item->name }}
                </p>
            </li>
        @endforeach
    </ul>

    <div id="default-tab-content">
        @foreach ($shortlist_items as $key => $item)
            <div class="hidden" id="tes-{{ $item->id }}" role="tabpanel" aria-labelledby="testing">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($item->list_items as $key => $list_item)
                            @if ($list_item->status == 1)
                                <div class="lg:hidden swiper-slide flex flex-col">
                                    <div class="items-center justify-center flex">
                                        <img src="{{ asset_administrator('assets/media/items/' . $list_item->image) }}"
                                            alt="">
                                        <p class="text-[6em] font-playfair text-white text-center justify-center absolute"
                                            style="-webkit-text-stroke: 0.015em #AD976E">
                                            {{ $list_item->sub_title }}
                                        </p>
                                    </div>
                                    <div class="px-8 py-4">
                                        <p class="text-[1.5em] font-medium text-[#7D7D7D] break-all">
                                            {{ Str::limit($list_item->title, 40) }}
                                        </p>
                                        <p class="break-all mt-2 text-[#7D7D7D] font-normal text-[1em]">
                                            {!! nl2br($list_item->description) !!}
                                        </p>
                                    </div>
                                </div>
                                {{-- <div class="lg:hidden swiper-slide ">
                                    <div class="flex flex-col w-full relative h-fit">

                                        <img src="{{ asset_administrator('assets/media/items/' . $list_item->image) }}"
                                            alt="" class="w-full">
                                        <div class="flex flex-col items-center justify-center absolute inset-0 top-6">
                                            <p class="lg:text-[21.8em] text-[6em] font-playfair text-white text-center"
                                                style="-webkit-text-stroke: 0.015em #AD976E">
                                                {{ $list_item->sub_title }}
                                            </p>
                                        </div>
                                        <div class="px-8 py-4">
                                            <p class="lg:w-[8em] text-[1.5em] font-medium text-[#7D7D7D] break-all">
                                                {{ Str::limit($list_item->title, 40) }}
                                            </p>
                                            <p class="break-all mt-2 text-[#7D7D7D] font-normal text-[1em]">
                                                {!! nl2br($list_item->description) !!}
                                            </p>
                                        </div>
                                    </div>
                                </div> --}}



                                <div class="hidden lg:inline swiper-slide">
                                    <div
                                        class="bg-[#fff] flex flex-row lg:flex-row justify-center items-center h-[15em] lg:h-[28em]">
                                        <img src="{{ asset_administrator('assets/media/items/' . $list_item->image) }}"
                                            alt="" class="w-[50%] h-full object-cover object-center">
                                        <p class="lg:text-[21.8em] text-[7em] font-playfair absolute bottom-14 lg:bottom-2 text-white"
                                            style="-webkit-text-stroke: 0.015em #AD976E">{{ $list_item->sub_title }}
                                        </p>
                                        <div
                                            class="flex-col items-center justify-center py-3 lg:py-0 flex px-48 w-[50%] lg:w-[50%]">
                                            <div class="">
                                                <p
                                                    class="lg:w-[8em] text-[1.5em] lg:text-[2.5em] font-medium  text-[#7D7D7D] break-words ">
                                                    {{ Str::limit($list_item->title, 40) }}
                                                </p>
                                                <p
                                                    class="max-w-full text-[1.125em] font-normal text-[#7D7D7D] break-all break-words mt-14">
                                                    {!! nl2br($list_item->description) !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                            @endif
                        @endforeach
                    </div>
                    <div class="swiper-button-next text-kaero-gold font-black"></div>
                    <div class="swiper-button-prev text-kaero-gold font-black"></div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
@push('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset_administrator('assets/js/our_service/dom/tabs.js') }}"></script>
    <script>
        $('#default-tab').tabs({
            start: 0,
            event: "click",
            delay: 200,
            selected: ".selected",
            callback: $.noop
        });
    </script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@endpush
