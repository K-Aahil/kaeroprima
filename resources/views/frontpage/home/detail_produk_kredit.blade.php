@extends('frontpage.layouts.main')
@push('styles')

    @section('content')
        <section style="position: relative">
            @include('frontpage.home.page_detail_produk_kredit.produk')
        </section>
    @endsection
