@extends('frontpage.layouts.main')
@push('styles')

@section('content')
    <section id="kontak-kami">
        <div class="container-fluid">
            <div class="deskripsi">
                <div class="text">
                    <h2>Kontak Kami</h2>
                    <h6>Ini adalah kumpulan Beberapa list kontak dewa medika yang anda dapat hubungi untuk menanyakan atau memesan layanan agar anda dapat lebih jelas mengetahui layanan kami</h6>
                </div>
                <img src="{{ asset_frontpage('assets/images/kontak-kami.png') }}" alt="Kontak Kami">
            </div>
            <div class="row kontak-list">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h6>List Wa Dewa Medika</h6>
                            @foreach($contact_lists as $item)
                            <div class="kontak-item">
                                <h6>{{ $item->name}}</h6>
                                <h6>{{ $item->whatsapp_number }}</h6>
                                <h6>{{ $item->location }}</h6>
                                <a href="https://wa.me/{{$item->whatsapp_number}}" target="_blank" class="btn btn-kontak"><i class="bi bi-whatsapp"></i> Direction To Whatsapp</a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@endpush
