<footer class="bg-kaero-gold lg:px-[9.688em] lg:py-[5.313em]">
    <div class="container px-6 py-12 mx-auto">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 sm:gap-y-10 lg:grid-cols-6">
            <div class="sm:col-span-2">
                <img src="{{ asset_administrator('assets/media/settings/' . $settings['logo_footer']) }}" alt=""
                    class="lg:w-[20em] lg:h-[8em] object-contain">
            </div>

            <div class="sm:col-span-2">
                <div class="flex flex-col space-y-3 lg:gap-[2.2em]">
                    <ul class="text-white ">
                        <li class="font-bold lg:text-[0.750em]">CONTACT</li>
                        <li class="lg:text-[1em]">{{ $settings['email'] }}</li>
                    </ul>
                    <ul class="text-white">
                        <li class="font-bold lg:text-[0.750em] ">ADDRESS</li>
                        <li class="lg:text-[1em] lg:w-[14em]">{!! $detail_address !!}</li>
                    </ul>
                </div>
            </div>
            <div class="flex flex-col space-y-4 text-uppercase">
                @foreach ($menu_footer as $index => $item)
                    @if ($item->status != 0 && $index < 5)
                        <a href="{{ $item->link }}" class="text-white lg:text-[0.8em] font-semibold">
                            {{ $item->label }}
                        </a>
                    @else
                    @endif
                @endforeach
            </div>
            <div class="flex flex-col space-y-4 text-uppercase">
                @foreach ($menu_footer as $index => $item)
                    @if ($item->status != 0 && $index > 4)
                        <a href="{{ $item->link }}" class="text-white lg:text-[0.8em] font-semibold">
                            {{ $item->label }}
                        </a>
                    @else
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    </div>
</footer>
