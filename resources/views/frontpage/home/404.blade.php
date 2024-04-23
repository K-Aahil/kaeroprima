@extends('frontpage.layouts.main')
@push('styles')

@section('content')
    <section id="not-found">
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="text-center row page-not-found">
                <div class="col-md-6">
                    <img src="{{ asset_frontpage('assets/images/404.png') }}" alt="Page Not Found">
                </div>
                <div class="col-md-6">
                    <div class="text">
                        <p class="fs-3"> 
                            <span class="text-danger">Opps!</span> Page not found.
                        </p>
                        <p class="lead">
                            Halaman Layanan yang Anda Cari Belum Tersedia.
                        </p>
                        <a href="{{ route('home') }}" class="btn btn-home">Go Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@endpush
