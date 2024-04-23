@extends('frontpage.layouts.main')
@push('styles')

@section('content')
    <section id="karir">
        <div class="container-fluid">
            <div class="deskripsi">
                <div class="text">
                    <h2>Dewa Medika Karir</h2>
                    <h6>Dewa medika karir adalah program dewa medika untuk mencari kandidat kandidat baru untuk bekerja dalam bidang kedokteran maupun berbagai bidang kesehatan</h6>
                </div>
                <img src="{{ asset_frontpage('assets/images/karir.png') }}" alt="Karir">
            </div>
            <div class="row">
                <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12 karir-list">
                            <div class="card karir-item">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h4>{{ $detail->title }}</h4>
                                            <div class="desc">
                                                <span class="pendidikan">{{ $detail->career_path_name }}</span>
                                                <span class="kategori">{{ $detail->career_category_name }}</span>
                                                <span class="lokasi">{{ $detail->location }}</span>
                                            </div>
                                            <h6>{!! html_entity_decode($detail->description) !!}</h6>  
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@endpush
