@extends('frontpage.layouts.main')
@push('styles')

    <style type="text/css">
        :root{
            --bg-color: #F9D93F;
            --bg-color-rad: #F9D93F;
            --bg-img: url('../images/homecare 1 1.png');
            }
    </style>

@section('content')
    <section id="banner-custom">
        <div class="container-fluid">
            <div class="deskripsi">
                <div class="text">
                    <img src="{{ asset_frontpage('assets/images/homecare 1.png') }}" alt="Homecare">
                    <h2>Homecare</h2>
                    <h6>Layanan home care dewa medicals ini menjadi solusi bagi pasien yang sulit ke rumah sakit. pelayanan diperuntukan bagi pasien dengan kondisi tertentu yang membutuhkan perawatan di rumah kunjungan bersama dengan dokter dan juga perawat ahli</h6>
                </div>
            </div>
        </div>
    </section>
    <section id="kontak-kami-du">
        <div class="card">
            <div class="card-body">
                <h3>Kontak Kami</h3>
                <div class="row">
                    <div class="col-md-6">
                        <h6>Whatsapp</h6>
                        <p><a href="#">0817-132-015</a> (Dewa Medika Home Care Jakarta)</p>
                    </div>
                    <div class="col-md-6">
                        <h6>Instagram</h6>
                        <p><a href="#">@dewamedicals_homecare</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services-du">
        <div class="container-fluid">
            <h2>Layanan Homecare</h2>
            <h6>9 pelayanan yang berada dilayanan homecare<br/>dewa medika yang siap membantu anda</h6>
            <div class="row service-lists">
                <div class="col-md-6 col-sm-6 col-lg-4 service-item">
                    <div class="card" style="background-image: url('images/visit-dokter.png');">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="title">Visit Dokter</h4>
                                    <h6 class="desc">Pelayanan Visit Dokter Dewa Medika</h6>
                                    <a href="#">Pesan Layanan <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-4 service-item">
                    <div class="card" style="background-image: url('images/swab-antigen.png');">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="title">Swab Antigen</h4>
                                    <h6 class="desc">Pelayanan Swab Antigen Dewa Medika</h6>
                                    <a href="#">Pesan Layanan <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-4 service-item">
                    <div class="card" style="background-image: url('images/laboratorium.png');">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="title">Laboratorium</h4>
                                    <h6 class="desc">Pelayanan Laboratorium Dewa Medika Homecare</h6>
                                    <a href="#">Pesan Layanan <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-4 service-item">
                    <div class="card" style="background-image: url('images/medical-check.png');">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="title">Medical Check Up</h4>
                                    <h6 class="desc">Pelayanan Medical Check Up Dewa Medika</h6>
                                    <a href="#">Pesan Layanan <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-4 service-item">
                    <div class="card" style="background-image: url('images/vaksinasi.png');">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="title">Vaksinasi</h4>
                                    <h6 class="desc">Pelayanan Vaksinasi Dewa Medika</h6>
                                    <a href="#">Pesan Layanan <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-4 service-item">
                    <div class="card" style="background-image: url('images/infus.png');">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="title">Infus / Injeksi</h4>
                                    <h6 class="desc">Pelayanan Infus / Injeksi Dewa Medika</h6>
                                    <a href="#">Pesan Layanan <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-4 service-item">
                    <div class="card" style="background-image: url('images/diabetes.png');">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="title">Perawatan Luka Diabetes</h4>
                                    <h6 class="desc">Pelayanan Perawatan Luka Diabetes Dewa Medika</h6>
                                    <a href="#">Pesan Layanan <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-4 service-item">
                    <div class="card" style="background-image: url('images/akupuntur2.png');">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="title">Akupuntur</h4>
                                    <h6 class="desc">Pelayanan Akupuntur Dewa Medika</h6>
                                    <a href="#">Pesan Layanan <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-4 service-item">
                    <div class="card" style="background-image: url('images/mom-and-baby.png');">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="title">Mom & Baby</h4>
                                    <h6 class="desc">Pelayanan Mom & Baby Dewa Medika</h6>
                                    <a href="#">Pesan Layanan <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="promo" class="custom">
        <div class="container-fluid">
            <h4>Our Promo</h4>
            <div class="promo-content">
                <img src="{{ asset_frontpage('assets/images/promo2.png') }}" alt="promo">
                <div class="text text-start">
                    <h2>This Is Our Promo Special</h2>
                    <h6>Haii semua kami dari dewa medika mempunyai berbagi promo lohh yang pastinya akan membuat anda senang dan juga menjadi anda lebih happy untuk mengunjungi kamii terus...</h6>
                </div>
            </div>
            <div class="promo-list-custom">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 promo-item">
                        <div class="card">
                            <img src="{{ asset_frontpage('assets/images/promo.png') }}" alt="promo">
                            <div class="card-body text-center">
                                <h3>Paket 1</h3>
                                <p class="title">Visit Perawat</p>
                                <div class="desc">
                                    <ul class="text-start">
                                        <li>Pelayanan datang ke rumah</li>
                                        <li>Tenaga Kesehatan Profesional</li>
                                        <li>Melayani jabodetabek</li>
                                    </ul>
                                </div>
                                <p class="price">Rp 150.000</p>
                                <button class="btn btn-kontak">Hubungi Kami</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 promo-item">
                        <div class="card">
                            <img src="{{ asset_frontpage('assets/images/promo.png') }}" alt="promo">
                            <div class="card-body text-center">
                                <h3>Paket 2</h3>
                                <p class="title">Paket Medical Ekslusif</p>
                                <div class="desc">
                                    <ul class="text-start">
                                        <li>Darah Lengkap</li>
                                        <li>Urine lengkap</li>
                                        <li>Liver : SGOT / SGPT</li>
                                        <li>Ginjal : Ureum, Kreatinin, asam urat</li>
                                        <li>Lemak : Kolesterol total, HDL, LDL</li>
                                        <li>CRP Kuantitatif</li>
                                        <li>HBA1C</li>
                                        <li>D-dmer</li>
                                    </ul>
                                </div>
                                <p class="price">Rp 249.000</p>
                                <button class="btn btn-kontak">Hubungi Kami</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 promo-item">
                        <div class="card">
                            <img src="{{ asset_frontpage('assets/images/promo.png') }}" alt="promo">
                            <div class="card-body text-center">
                                <h3>Paket 3</h3>
                                <p class="title">Paket Medical Platinum</p>
                                <div class="desc">
                                    <ul class="text-start">
                                        <li>Darah Lengkap</li>
                                        <li>Urine lengkap</li>
                                        <li>Liver : SGOT / SGPT</li>
                                        <li>Ginjal : Ureum, Kreatinin, asam urat</li>
                                        <li>Lemak : Kolesterol total, HDL, LDL</li>
                                        <li>CRP Kuantitatif</li>
                                        <li>D-dmer</li>
                                    </ul>
                                </div>
                                <p class="price">Rp 299.000</p>
                                <button class="btn btn-kontak">Hubungi Kami</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 promo-item">
                        <div class="card">
                            <img src="{{ asset_frontpage('assets/images/promo.png') }}" alt="promo">
                            <div class="card-body text-center">
                                <h3>Paket 4</h3>
                                <p class="title">Paket Medical Basic</p>
                                <div class="desc">
                                    <ul class="text-start">
                                        <li>Hematologi lengkap</li>
                                        <li>Uine lengkap</li>
                                        <li>Fungsi hati : SGOT / SGPT</li>
                                        <li>Fungsi GInjal : Ureum, Creatinin</li>
                                        <li>Kolestrol total</li>
                                        <li>Asam urat</li>
                                        <li>Glukosa puasa </li>
                                    </ul>
                                </div>
                                <p class="price">Rp 299.000</p>
                                <button class="btn btn-kontak">Hubungi Kami</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@endpush
