@extends('frontpage.layouts.main')
@push('styles')

    @section('content')
        <section class="section-product py-5">
            @include('frontpage.home.page_produk_simpanan.produk')
        </section>
        <section class="container row justify-content-center mx-auto my-5 ">
            @include('frontpage.home.page_produk_simpanan.produk_faq')
        </section>
    @endsection
