@extends('frontpage.layouts.main')
@push('styles')

@section('content')
    {{-- Banner --}}
    <section id="banner">
        <div class="carousel slide">
            <div class="container carousel-indicators d-flex bd-highlight align-items-center mx-auto">
                <div class="flex-grow-1 bd-highlight px-5">
                </div>
                {{-- <div class="p-2 align-items-center buttonchevron ">
                    <div class=" bd-highlight" style=" color: #fff; font-size: 14px; ">Scroll Down <a href="#service"><img src="{{ asset_sinar_gemilang('img/button_chevrondown.png') }}" alt=""></a></div>
                </div> --}}
            </div>
    
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div data-aos="fade-right" class="judul_banner px-5">
                        <h5>{{ $banner->title }}</h5>
                        <p class="subjudul_banner">{!!$banner->description!!}</p>
                        <!-- <a class="btnsubbanner"></a> -->
                    </div>
                    <img src="{{ img_src($banner->banner, "page_banners") }}" class="banner_image d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </section>
    {{-- End Banner --}}
    <!-- sliderlogo -->
    <div data-aos="fade-right" class="container about">
        <div class="row section-content d-flex justify-content-between">
            <div class="col-md-4 col-sm-4 kiri" style="
            border-right: 1px solid #C8C8C8">
                <p class="tittlepartner">PARTNER</p>
                <p class="judulabout mt-5">Leading
                    Companies</p>
                <div class="d-flex flex-row bd-highlight mt-5 buttonslider">
                    <div class="bd-highlight">
                        <div href="#" id="next">
                            <div class="chevron" style="color: #fff;">
                                <button class="buttonpartner">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="btnslider bd-highlight ">
                        <div href="#" id="prev">
                            <button class="buttonpartner" style="rotate: 180deg;">
                            </button>
                        </div>
                    </div>   
                </div>
            </div>


            <div class="col-lg-7 col-md-7 col-sm-7 slider">
                <div class="owl-carousel carousel">
                    @foreach ($our_groups as $our_group)
                        <div class="item">
                            <img class="logopartner" src="{{ asset_administrator("assets/media/items/$our_group->image") }}" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- endsliderlogo -->
@endsection    

@endpush

@push('scripts')
    <script>
        $(document).ready(function () {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                loop: true,
                margin: 90,
                nav: true,
                navText: [
                    "<i class='fa fa-chevron-left'></i>",
                    "<i class='fa fa-chevron-right'></i>"
                ],
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        margin: 20,
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            });

            $('#prev').on('click', function (e) {
                e.preventDefault();
                owl.trigger('prev.owl.carousel');
            });

            $('#next').on('click', function (e) {
                e.preventDefault();
                owl.trigger('next.owl.carousel');
            });
        });
    </script>
@endpush