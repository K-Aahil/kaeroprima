<nav class="bg-white lg:px-[8.4em] md:px-[4em] pl-8 pr-10 py-3 flex lg:items-center justify-between lg:h-24">
    <a href="/">
        <img src="{{ asset_administrator('assets/media/settings/' . $settings['logo_navbar']) }}" alt=""
            class="lg:w-[15em] lg:h-[4em] cursor-pointer">
    </a>
    <div class="lg:hidden" data-drawer-target="drawer-mobile-nav" data-drawer-show="drawer-mobile-nav"
        data-drawer-placement="right" aria-controls="drawer-mobile-nav">
        <button class="text-[#7d7d7d] hover:text-[#AD976E] ">
            <svg class="w-6 h-6 z-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
    </div>
@if (is_array($navbar) && isset($navbar['navbar']) && is_object($navbar['navbar']) && isset($navbar['navbar']->items))
<ul class="lg:flex h-full hidden">
    @foreach ($navbar['navbar']->items as $item)
        @if (count($item->child) <= 0)
            @if ($item->status != 0)
                <li class="h-full">
                    <a class="flex items-center hover-item text-[0.8em] font-bold h-full text-[#7d7d7d] mr-10 hover:text-[#AD976E] {{ url()->full() == url($item->link) ? 'text-bold-primary' : '' }}"
                        aria-current="page" href="{{ $item->link }}">
                        {{ session()->get('locale') == 'en' ? $item->class : $item->label }}
                    </a>
                </li>
            @else
            @endif
        @else
            <li class="flex items-center justify-center h-full">
                <a href="{{ $item->link }}" id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                    class="flex items-center hover-item text-[0.8em] font-bold h-full text-[#7d7d7d] mr-10 hover:text-[#AD976E] {{ url()->full() == url($item->link) ? 'text-bold-primary' : '' }}">
                    {{ $item->label }}
                </a>
                {{-- <div id="dropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 -mb-5">
                    <ul class="py-3" aria-labelledby="dropdownDefaultButton">
                        @foreach ($item->child as $item)
                            @if ($item->status != 0)
                                <li>
                                    <a href="{{ $item->link }}"
                                        class="block px-4 py-2 font-bold text-[#7D7D7D] hover:text-kaero-gold">
                                        {{ $item->label }}
                                    </a>
                                </li>
                            @else
                            @endif
                        @endforeach
                    </ul>
                </div> --}}
            </li>
        @endif
    @endforeach
    <li class="flex items-center justify-center z-10 h-full">
        <svg class="navbar-svg" xmlns="http://www.w3.org/2000/svg" width="140" height="35"
            viewBox="0 0 130 35" fill="none">
            <path
                d="M-1.67132e-07 4.99999C-7.48275e-08 2.23857 2.23857 -7.30298e-06 4.99999 -7.14513e-06L110.22 -1.13065e-06C111.672 -1.04765e-06 113.039 0.482077 113.91 1.30046L129.076 15.547C130.308 16.704 130.308 18.296 129.076 19.453L113.912 33.6995C113.041 34.5179 111.674 35 110.221 35L5 35C2.23858 35 -1.0951e-06 32.7614 -1.00279e-06 30L-1.67132e-07 4.99999Z"
                fill="#AD976E" />
        </svg>
        <a href="{{ route('contact') }}" class="text-white lg:text-[0.8em] font-bold whitespace-nowrap">
            CONTACT US
        </a>
    </li>
</ul>

<div id="drawer-mobile-nav"
    class="fixed top-0 right-0 z-40 h-screen pl-8 pr-6 py-4 overflow-y-auto transition-transform translate-x-full bg-white w-full "
    tabindex="-1" aria-labelledby="drawer-right-label">
    <div class="flex justify-between items-center">
        <a href="/">
            <img src="{{ asset_frontpage('assets/images/logo-navbar.png') }}" alt=""
                class="lg:w-[15em] lg:h-[4em] cursor-pointer">
        </a>
        <button type="button" data-drawer-hide="drawer-mobile-nav" aria-controls="drawer-mobile-nav"
            class=" z-10 text-[#7D7D7D]">

            <svg class="w-5 h-5 text-[#7D7D7D] relative z-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>
    <ul class="mt-5 flex flex-col gap-10 pr-2">
        @foreach ($navbar['navbar']->items as $item)
            <li class="w-full">
                @if ($item->status != 0)
                    <a href="{{ $item->link }}"
                        class="border-b-2 border-[#7D7D7D] pb-[0.5em] focus:border-kaero-gold text-[1em] hover:border-b-kaero-gold hover:text-kaero-gold focus:text-kaero-gold w-full inline-block">
                        {{ $item->label }}
                    </a>
                @else
                @endif
            </li>
        @endforeach
        <li>
            <a href="{{ route('contact') }}"
                class=" text-[1em] w-full inline-block text-center bg-kaero-gold py-3 rounded-md text-white">
                CONTACT US
            </a>
        </li>
    </ul>
</div>
</div>
@else
    
@endif
    

</nav>
