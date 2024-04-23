@foreach ($banners as $item)
    <div class="md:flex lg:justify-between lg:items-center w-full md:px-[1em] lg:px-[8.4em]">
        <div class="img-main-banner lg:hidden ml-10">
            {{-- <img src="{{ asset_administrator('assets/media/banners/' . $item->image) }}" alt=""
                class="align-self-center "> --}}
            <img src="{{ asset_administrator('assets/media/banners/' . $item->image) }}" alt="" class="align-self-center"
                style="width: 250px; height: 250px;">>
        </div>
        <div class="lg:flex flex-col" style="margin-left: 3em !important">
            <p class="lg:text-[4.375em] md:text-[3.5em] text-[2.5em] w-[9em] font-bold text-white">{{ $item->title }}
            </p>
            @if ($item->show_button == 1)
                <a href="{{ $item->button_url }}" class="flex items-center relative cursor-pointer"
                    style="margin-top: 3em">
                    <img class="navbar-svg position-absolute" src="frontpage/assets/images/button-bg.png"
                        alt="">
                    <p
                        class="text-white md:text[1em] lg:text-[1em] uppercase font-semibold font-avenir ml-[1.5em]  whitespace-nowrap relative">
                        {{ json_decode($item->button_text)->button_text_get }}
                    </p>
                </a>
            @endif
        </div>
        <div class="img-main-banner mt-10 hidden lg:inline ml-10">
            <img src="{{ asset_administrator('assets/media/banners/' . $item->image) }}" alt=""
                class="align-self-center ">
            <!-- <img src="{{ asset_frontpage('assets/images/main-banner.png') }}" alt="" class="align-self-center"> -->
        </div>
    </div>
@endforeach
