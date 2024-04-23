<!-- <div class="carousel position-relative">
    <div class="" style="z-index: 20;">
        <img src="{{ asset_bpr('/img/icon_arrow_left.png') }}" alt=""
            style="position: absolute; z-index: 10; left: 1vw; top: calc(50*1vh);" id="geser-kiri-carousel">
        <img src="{{ asset_bpr('/img/icon_arrow_right.png') }}" alt=""
            style="position: absolute; z-index: 10; right: 1vw; top: calc(50*1vh)" id="geser-kanan-carousel">
    </div>
    <div class=" owl-carousel carousel-one" id="carousel-one">
        @foreach ($banners as $item)
            <div class="position-relative">
                <div class="position-absolute row " id="banner_home" style="left: calc(1vw*10);">
                    <div class="w-100 h-100 mt-md-5 mt-sm-5 mt-0">
                        <p id="title" class="text-white  w-50">{{ $item->title }}</p>
                        <p id="subtitle" class="text-white  mt-md-5 mt-sm-5 mt-0 w-50"> {{ $item->description }}
                        </p>
                    </div>
                    @if ($item->show_button == 1)
                        <a href="http://{{ $item->button_url }}" target="blank_">
                            <button class="button-pink-2 mt-md-5 mt-sm-5 mt-0">
                                {{ json_decode($item->button_text)->button_text_get }}</button>
                        </a>
                    @endif
                </div>
                <img src="{{ asset_administrator('assets/media/banners/' . $item->image) }} " alt=""
                    class="w-100" style="height:100%; object-fit: contain; object-position:left;">
            </div>
        @endforeach
    </div>
</div>