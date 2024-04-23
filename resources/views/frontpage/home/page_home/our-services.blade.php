<div class="md:px-[4em] md:pt-[2em] lg:px-[8.4em] lg:pt-[4em] px-8 py-5">
    <div class="lg:flex lg:justify-between lg:align-top">
        <p class="font-bold lg:text-[4.375em] md:text-[2em] text-[2em] text-kaero-gold ">Our Services</p>
        @if ($management != null)
            <div class="flex flex-col">
                <p class="lg:max-w-[23em] font-normal md:text-[1em] text-[1.25em] text-justify md:text-left md:mt-2 ">
                    {{ Str::words($management->description, '24') }}
                </p>
                <a href="{{ route('service') }}" class="text-[0.8em] md:text-[0.7em]  mt-6 font-bold">
                    READ MORE
                </a>
            </div>
        @else
        @endif
    </div>

    @if ($shortlist != null)
        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 lg:mt-[7.125em] mt-[3em] gap-10">
            @foreach ($shortlist as $key => $item)
                <div class=" w-full h-full items-center justify-center text-center flex flex-col ">
                    @if ($item->image != null)
                        <img src="{{ asset_administrator('assets/media/short/' . $item->image) }}" alt=""
                            class="lg:w-[7em] lg:h-[6.5em]">
                    @else
                        <img src="{{ asset_administrator('assets/media/default.jpg') }}" alt=""
                            class="lg:w-[7em] lg:h-[6.5em]">
                    @endif
                    <p
                        class="lg:text-[2.5em] text-[1.5em] lg:mt-[0.5em] lg:max-w-[6em] lg:h-[6em] text-center font-playfair font-black text-kaero-primary ">
                        {{ $item->name }}
                    </p>
                </div>
            @endforeach
        </div>
    @endif
</div>
