        <p class="font-bold lg:text-[4.375em] md:text-[2em] text-[2em] text-kaero-gold ">News</p>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 lg:gap-8 lg:mt-[2.5em] mt-[1.5em]">
            @if ($artikel != null && $artikel->count() > 0)
                <div class="flex flex-col">
                    @if ($artikel[0]->data_file != null)
                        <img src="{{ asset_administrator('assets/media/news/' . $artikel[0]->data_file) }}" alt=""
                            class="w-full h-[18em] lg:h-[23em] object-center object-cover grayscale">
                    @else
                        <img src="{{ asset_administrator('assets/media/default.jpg') }}" alt=""
                            class="w-full h-[18em] lg:h-[23em] object-center object-cover grayscale">
                    @endif
                    <a href="{{ route('artikel_detail', ['slug' => $artikel[0]->slug]) }}"
                        class="font-playfair text-[2em] hover:text-[#7D7D7D] lg:text-[2.5em] text-[#7D7D7D] font-black lg:w-[10em] break-words overflow-hidden h-[3.2em] leading-[1.6em]">{{ $artikel[0]->title }}</a>
                    <a href="{{ route('artikel_detail', ['slug' => $artikel[0]->slug]) }}"
                        class="text-kaero-gold font-medium text-[1.125em] lg:text-[1.125em] underline hover:text-kaero-gold mt-2 lg:mt-5">Read
                        more</a>
                </div>
            @endif
            @if ($artikel != null && $artikel->count() > 1)
                <div class="flex flex-col">
                    @if ($artikel[1]->data_file != null)
                        <img src="{{ asset_administrator('assets/media/news/' . $artikel[1]->data_file) }}"
                            alt="" class="w-full h-[18em] lg:h-[23em] object-center object-cover grayscale">
                    @else
                        <img src="{{ asset_administrator('assets/media/default.jpg') }}" alt=""
                            class="w-full h-[18em] lg:h-[23em] object-center object-cover grayscale">
                    @endif
                    <a href="{{ route('artikel_detail', ['slug' => $artikel[1]->slug]) }}"
                        class="font-playfair text-[2em] hover:text-[#7D7D7D] lg:text-[2.5em] text-[#7D7D7D] font-black lg:w-[10em] break-words overflow-hidden h-[3.2em] leading-[1.6em]">{{ $artikel[1]->title }}</a>
                    <a href="{{ route('artikel_detail', ['slug' => $artikel[1]->slug]) }}"
                        class="text-kaero-gold font-medium text-[1.125em] lg:text-[1.125em] underline hover:text-kaero-gold mt-2 lg:mt-5">Read
                        more</a>
                </div>
            @endif
            @if ($artikel != null && $artikel->count() > 2)
                <div class="flex flex-col">
                    @if ($artikel[2]->data_file != null)
                        <img src="{{ asset_administrator('assets/media/news/' . $artikel[2]->data_file) }}"
                            alt="" class="w-full h-[18em] lg:h-[23em] object-center object-cover grayscale">
                    @else
                        <img src="{{ asset_administrator('assets/media/default.jpg') }}" alt=""
                            class="w-full h-[18em] lg:h-[23em] object-center object-cover grayscale">
                    @endif
                    <a href="{{ route('artikel_detail', ['slug' => $artikel[2]->slug]) }}"
                        class="font-playfair text-[2em] hover:text-[#7D7D7D] lg:text-[2.5em] text-[#7D7D7D] font-black lg:w-[10em] break-words overflow-hidden h-[3.2em] leading-[1.6em]">{{ $artikel[2]->title }}</a>
                    <a href="{{ route('artikel_detail', ['slug' => $artikel[2]->slug]) }}"
                        class="text-kaero-gold font-medium text-[1.125em] lg:text-[1.125em] underline hover:text-kaero-gold mt-2 lg:mt-5">Read
                        more</a>
                </div>
            @endif
        </div>
