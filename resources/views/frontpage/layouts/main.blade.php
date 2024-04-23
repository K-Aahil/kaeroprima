<!DOCTYPE html>
<html lang="en">

<head>
    @php $navbar = Layout::getLayout() @endphp
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>{{ $navbar['settings']['site_name'] }} @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_title')">


    <!-- Background css -->
    {{-- <link rel="stylesheet" id="bg-switcher-css" href="{{ asset_frontpage('assets/css/backgrounds/bg-4.css') }}"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ img_src($navbar['settings']['favicon'], 'favicon') }}" sizes="32x32" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/style/style.css">
    <link rel="stylesheet" href="{{ asset_bpr('/style/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @stack('styles')
</head>

<body>
    <div id="ec-overlay" style="background-color: #9a9a9b26">
        <span class="loader_img" style="background-color: #9a9a9b26"></span>
    </div>
    @include('frontpage.layouts.header', ['navbar' => $navbar])

    @yield('content')

    @include('frontpage.layouts.foter', ['navbar' => $navbar])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/autonumeric/4.9.0/autoNumeric.min.js"
        integrity="sha512-8gzQcg9kbS4PKtpwg52pfVLjkqSYAc5IWHnd0eLGgxlcAnqYPcVLCh9pgQErFthJvmmxFNvbCAGF6vuHtGfZsQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="{{ asset_bpr('js/sweetalert.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".carousel-one").owlCarousel({
                loop: true, // Set to true for continuous loop
                margin: 10, // Set the spacing between items
                // autoplay: true,
                // autoplayTimeout: 5000,
                autoplayHoverPause: false,
                autoHeight: true,
                responsive: {
                    0: {
                        items: 1 // Number of items to show on different screen sizes
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
            $(".carousel-two").owlCarousel({
                loop: true,
                margin: 10,
                autowidth: true,
                // autoplay: true,
                // autoplayTimeout: 5000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 2 // Number of items to show on different screen sizes
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            })
            $(".carousel-card").owlCarousel({
                loop: true,
                center: true,
                // autoplay: true,
                // autoplayTimeout: 5000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1 // Number of items to show on different screen sizes
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 3
                    }
                }
            })

            var owl = $('#carousel-one')
            $('#geser-kiri-carousel').click(function() {
                owl.trigger('prev.owl.carousel')
            })

            $('#geser-kanan-carousel').click(function() {
                owl.trigger('next.owl.carousel')
            })


            var owl2 = $('#carousel-testimoni')

            $('#geser-kiri-carousel-2').click(function() {
                owl2.trigger('prev.owl.carousel')
            })
            $('#geser-kanan-carousel-2').click(function() {
                owl2.trigger('next.owl.carousel')
            })

            var id = $('#carousel-testimoni').children(".owl-stage-outer").addClass("owl-testimoni")
        })
    </script>
    @stack('scripts')
</body>

</html>
