@extends('frontpage.layouts.main')
@push('styles')
    @section('content')
        <section id="main-banner">
            @include('frontpage.home.page_home.main-banner')
        </section>
        <section id="line-our-services"></section>
        <section class="bg-white">
            @include('frontpage.home.page_home.our-services')
        </section>

        <!-- <section id="banner">
                                                                                                                                                                                    @include('frontpage.home.page_home.banner')
                                                                                                                                                                                </section> -->
        <!-- <section id="glance_about" style="margin: 20vh 0px;">
                                                                                                                                                                                    @include('frontpage.home.page_home.sekilas_tentang_kami')
                                                                                                                                                                                </section> -->
        <!-- <section class="testimoni pb-5 my-5 position-relative">
                                                                                                                                                                                    @include('frontpage.home.page_home.testimoni_pelanggan')
                                                                                                                                                                                </section> -->
        <!-- <section id="produk_unggulan" class="mx-md-5 mx-sm-4 mx-0 py-5 ">
                                                                                                                                                                                    @include('frontpage.home.page_home.produk_unggulan')
                                                                                                                                                                                </section>
                                                                                                                                                                                <section id="nasabah_bpr" class="mx-sm-2 mx-md-5 mx-3" style="margin: 10vh 0;">
                                                                                                                                                                                    @include('frontpage.home.page_home.nasabah_bpr')
                                                                                                                                                                                </section>
                                                                                                                                                                                <section id="artikel" class="mx-md-5 mx-sm-3 mx-3">
                                                                                                                                                                                    @include('frontpage.home.page_home.artikel')
                                                                                                                                                                                </section>
                                                                                                                                                                                <section id="list_artikel" class="mx-md-5 mx-sm-3 mx-3 my-5">
                                                                                                                                                                                    @include('frontpage.home.page_home.list_artikel')
                                                                                                                                                                                </section>
                                                                                                                                                                                <section id="list_mitra" class="mx-5 my-5">
                                                                                                                                                                                    @include('frontpage.home.page_home.list_mitra')
                                                                                                                                                                                </section> -->

        <section id="line-article"></section>
        <section id="artikel" class="bg-white px-8 py-5 md:px-[4em] lg:py-[6.875em] lg:px-[8.438em]">
            @include('frontpage.home.page_home.article')
        </section>
        <section id="line-question"></section>
        <section>
            @include('frontpage.home.page_home.got-question')
        </section>
        <!-- <div class="btn-group dropup float">
                                                                                                                                                                                    <a href="javascript:;" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                                                                                                                        <img src="{{ asset_bpr('img/whatsapp.png') }}" alt="whatsapp">
                                                                                                                                                                                    </a>
                                                                                                                                                                                    <ul class="dropdown-menu">
                                                                                                                                                                                        <li class="d-flex">
                                                                                                                                                                                            <img src="{{ asset_bpr('img/whatsapp.png') }}" alt="whatsapp">
                                                                                                                                                                                            <a href="http://wa.me/{{ $settings['whatsapp'] }}" target="blank_" class="dropdown-item"
                                                                                                                                                                                                style="font-family:Arial, Helvetica, sans-serif "> Chat Admin 1</a>
                                                                                                                                                                                        </li>
                                                                                                                                                                                    </ul>
                                                                                                                                                                                </div> -->
    @endsection
@endpush
