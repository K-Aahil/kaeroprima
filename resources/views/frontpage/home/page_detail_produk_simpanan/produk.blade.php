<style>
    /* * {
        outline: 1px solid limegreen;
    } */

    #exampleFormControlSelect1 {
        background-color: white;
        border-radius: 5px;
        padding: 10px 5px;
    }

    #exampleFormControlSelect1:active {
        outline: 2px solid #7EBAFF !important;
        padding: 10px 5px;
    }

    #exampleFormControlSelect1:focus {
        outline: 2px solid #7EBAFF !important;
        padding: 10px 5px;
    }

    #card:hover {
        filter: drop-shadow(2px 0px 5px #FF0000);
    }

    #background {
        position: absolute;
        top: 0;
        width: 100vw;
        height: 50vh;
        z-index: -10;

    }
</style>
@section('meta_title')
    {{ $product->meta_title }}
@endsection
{{-- Meta description --}}
@section('meta_description')
    {{ $product->meta_description }}
@endsection
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex ">
                    <img src="{{ asset_bpr('img/logo_bpr.png') }}" alt=""
                        style="width:10vw; height:10vh; object-fit:contain;">
                    <div class="ms-2 d-flex flex-column justify-content-center">
                        <p class="fs-5 text-bold mb-0">Deposito Berjangka</p>
                        <p class="my-0">Simulasi Deposito </p>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5">
                <div class="row ">
                    <div class="text-bold col-md-6 col-sm-6 col-12 ">
                        Penempatan Deposito
                    </div>
                    <div id="display_pinjaman" class="col-md-6 col-sm-6 col-12 titik_dua">

                    </div>
                </div>
                <div class="row ">
                    <div class="text-bold col-md-6 col-sm-6 col-12 ">
                        Jangka Waktu (bulan)
                    </div>
                    <div id="display_bulan" class="col-md-6 col-sm-6 col-12 titik_dua">

                    </div>
                </div>
                <div class="row ">
                    <div class="text-bold col-md-6 col-sm-6 col-12 ">
                        Bunga Deposito
                    </div>
                    <div id="display_bunga" class="col-md-6 col-sm-6 col-12 titik_dua">

                    </div>
                </div>
                <div class="row ">
                    <div class="text-bold col-md-6 col-sm-6 col-12 ">
                        Pajak
                    </div>
                    <div id="display_pajak" class="col-md-6 col-sm-6 col-12 titik_dua">

                    </div>
                </div>
                <div class="row ">
                    <div class="text-bold col-md-6 col-sm-6 col-12 ">
                        Total Akumulasi
                    </div>
                    <div id="display_total" class="col-md-6 col-sm-6 col-12 titik_dua">

                    </div>
                </div>
                {{-- <table>
                    <tr>
                        <td class="text-bold">
                            Total Akumulasi
                        </td>
                        <td>
                            :
                        </td>
                        <td id="display_total">
                            50000
                        </td>
                    </tr>
                </table> --}}
            </div>
            <div class="modal-body px-5 d-flex flex-column">
                <div class="row">
                    <div class="col">
                        Bunga Simulasi diatas dihitung 30 hari, realisasi mengikuti jumlah hari sebenarnya
                    </div>
                </div>
                <button type="button" class="btn btn-secondary ms-auto mt-2" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<div class="py-5">
    <p class="text-white text-center mt-5">Layanan simpanan BPR Mitra Parahyangan</p>
    <p class="text-bold text-white fs-4 text-center">Menyediakan Solusi untuk Memenuhi Setiap Kebutuhan Anda
    </p>
</div>
<div class="row gy-md-5 gy-sm-5 gy-3 mx-md-0 mx-sm-0 mx-0 my-5 mx-0 justify-content-center">
    <div class="col-md-6 col-sm-12 col-12 row gy-2 mx-0 mx-md-3 mx-sm-3 mx-lg-0">
        <div class="card-product">
            <img src="{{ asset_administrator('assets/media/product/' . $product->image) }}" alt=""
                class="w-100 rounded"
                style="padding-top: 1em; height:21em ; width:100% ; object-fit:cover;object-position:0% 50%;">
            <p class="text-blue my-2 text-semibold">Deskripsi Layanan</p>
            <p class="text-bold">{{ $product->name }}</p>
            <p>{!! $product->description !!}</p>
        </div>
    </div>
    @if ($product->flag === 'show')
        <div class="col-md-5 col-sm-12 col-12 ms-md-5 ms-sm-0 ms-0 mt-3">
            <div class="card-contact">
                <div class="d-flex">
                    <div class="">
                        <p class="text-bold fs-53">Simulasi Kalkulator Deposito Berjangka</p>
                        <p class="text-alternate-grey">Bunga Kalkulator simulasi</p>
                    </div>
                </div>
                <div class="form-group  w-100">
                    <div class="form-group">
                        <label for="inputWaktu" class="text-bold">Pilihan Jangka Waktu (Bulan)</label>
                        <select class="form-control" id="selectBulan">
                            <option value="1">1 Bulan</option>
                            <option value="3">3 Bulan</option>
                            <option value="6">6 Bulan</option>
                            <option value="12">12 Bulan</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="exampleFormControlInput1" class="text-bold ">Nominal
                            Simpanan</label>
                        <input type="text" class="form-control format-number withseparator" id="inputNominal"
                            placeholder="0">
                    </div>
                </div>
                <button class="btn-blue  w-100 text-bold mt-5" id="calculate-simpanan">
                    Kalkulasi Simpanan
                </button>
                {{-- <div class="mt-5"> --}}
                {{-- <p class="text-bold fs-53">Hubungi BPR Mitra Parahyangan</p>
                    <p class="text-alternate-grey">Silahkan Isi data diri kamu, agar Account Officer Kami Dapat
                        menghubungi Kamu untuk informasi lebih lanjut</p>
                    <form method="POST" action={{ route('inquiries_save') }} id="contact-save">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="selectProduk" name="product_id"
                                value="{{ $product->id }}">
                        </div>
                        <div class="form-group mt-4 fv-row">
                            <label for="inputControlSubjek " class="text-bold">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" id="inputControlName"
                                placeholder="Silahkan Masukkan Nama Anda">
                            <div class="error-text text-danger" style="display:block; color:red;"></div>
                        </div>
                        <div class="form-group mt-4 fv-row">
                            <label for="inputControlSubjek " class="text-bold">Email</label>
                            <input type="text" name="email" class="form-control" id="inputControlEmail"
                                placeholder="name@example.com">
                            <div class="error-text text-danger" style="display:block; color:red;"></div>
                        </div>
                        <div class="form-group mt-4 fv-row">
                            <label for="inputControlSubjek " class="text-bold">No Telepon</label>
                            <input type="text" name="phone" class="form-control" id="inputControlPhone"
                                placeholder="081XXXXXXX">
                            <div class="error-text text-danger" style="display:block; color:red;"></div>
                        </div>
                        <button class="btn-blue my-5 w-100 text-bold" id="product_submit">
                            Kirim
                        </button>
                    </form> --}}
                <div class="my-5">
                    <p class="text-bold fs-6">Hubungi BPR Mitra Parahyangan</p>
                    <a href="{{ route('produk_simpanan') }}" style="text-decoration: none;">
                        <div class="btn-blue text-bold mx-0 w-50 text-center">Hubungi Kami</div>
                    </a>
                </div>
                {{-- </div> --}}
            </div>
        </div>
        {{-- <div id="background" style="background-image:url({{ asset_bpr('img/background_pattern.svg') }})"></div> --}}
        <div class="section-product-1" id="background"></div>
    @else
        <div class="col-md-5 col-sm-12 col-12 ms-md-5 ms-sm-0 ms-0 mt-3">
            <div class="card-contact">
                <div class="">
                    <div class="mt-5">
                        <p class="text-bold fs-6">Hubungi BPR Mitra Parahyangan</p>
                        <a href="{{ route('produk_simpanan') }}" style="text-decoration: none;">
                            <div class="btn-blue text-bold mx-0 w-50 text-center">Hubungi Kami</div>
                        </a>
                    </div>
                    {{-- <form method="POST" action={{ route('inquiries_save') }} id="contact-save">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="selectProduk" name="product_id"
                                value="{{ $product->id }}">
                        </div>
                        <div class="form-group mt-4 fv-row">
                            <label for="inputControlSubjek " class="text-bold">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" id="inputControlName"
                                placeholder="Silahkan Masukkan Nama Anda">
                            <div class="error-text text-danger" style="display:block; color:red;"></div>
                        </div>
                        <div class="form-group mt-4 fv-row">
                            <label for="inputControlSubjek " class="text-bold">Email</label>
                            <input type="text" name="email" class="form-control" id="inputControlEmail"
                                placeholder="name@example.com">
                            <div class="error-text text-danger" style="display:block; color:red;"></div>
                        </div>
                        <div class="form-group mt-4 fv-row">
                            <label for="inputControlSubjek " class="text-bold">No Telepon</label>
                            <input type="text" name="phone" class="form-control" id="inputControlPhone"
                                placeholder="081XXXXXXX">
                            <div class="error-text text-danger" style="display:block; color:red;"></div>
                        </div>
                        <button class="btn-blue my-5 w-100 text-bold" id="product_submit">
                            Kirim
                        </button>
                    </form> --}}
                </div>
            </div>
        </div>
        {{-- <div id="background" style="background-image:url({{ asset_bpr('img/background_pattern.svg') }})"></div> --}}
        <div class="section-product-1" id="background"></div>
    @endif
    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
        <script>
            $(document).ready(() => {
                var input_nominal
                var select_bulan = 1
                $('#selectBulan').on('change', function() {
                    select_bulan = $(this).val()
                })
                // var select_bulan = $('#selectBulan option:selected').val()

                $(".format-number").keyup(function(e) {
                    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 || (e.keyCode == 65 && (e
                            .ctrlKey === true || e.metaKey === true)) || (e.keyCode >= 35 && e.keyCode <= 40)) {
                        return;
                    }
                    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode >
                            105)) {
                        e.preventDefault()
                    }
                    input_nominal = $(this).val().replaceAll(',', '')
                })

                $('.withseparator').maskMoney({
                    prefix: '',
                    suffix: '',
                    thousands: ',',
                    decimal: '.',
                    precision: '',
                })
                $('#contact-save').validate({
                    rules: {
                        name: {
                            required: true,
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        phone: {
                            required: true,
                        },
                    },
                    messages: {
                        name: {
                            required: 'Silahkan Masukkan Nama',
                        },
                        email: {
                            required: 'Silahkan Masukkan Email',
                            email: 'Mohon Masukkan Email Yang Valid'
                        },
                        phone: {
                            required: 'Silahkan Masukkan Nomor Handphone',
                        },
                    },
                    errorPlacement: function(error, element) {
                        error.appendTo(element.next('.error-text'));
                    },
                    highlight: function(element, errorClass, validClass) {
                        $(element).addClass(errorClass).removeClass(validClass);
                        $(element).next('.error-text').show();
                    },
                    unhighlight: function(element, errorClass, validClass) {
                        $(element).removeClass(errorClass).addClass(validClass);
                        $(element).next('.error-text').hide();
                    }
                })
                $('#product_submit').on('click', () => {
                    if ($('#contact-save').valid()) {
                        Swal.fire('Sukses', 'Data Berhasil Disimpan', 'success');
                        setTimeout(function() {
                            form_produk.submit();
                        }, 2000);
                    }
                })
                $('#calculate-simpanan').on('click', () => {
                    if (input_nominal == undefined) {
                        Swal.fire('Kosong', 'Maaf Input Nominal tidak boleh kosong', 'error');
                    } else {
                        $('#exampleModal').modal('show')
                    }
                    var hasil
                    var pajak = 0
                    var total = 0
                    if (select_bulan == 1) {
                        if (input_nominal <= 7500000) {
                            hasil = input_nominal * 0.035 * 30 / 365
                        }

                        if (input_nominal > 7500000 && input_nominal < 50000000) {
                            hasil = input_nominal * 0.045 * 30 / 365
                        }
                        if (input_nominal >= 50000000 && input_nominal < 250000000) {
                            hasil = input_nominal * 0.05 * 30 / 365
                        }
                        if (input_nominal >= 250000000) {
                            hasil = input_nominal * 0.0525 * 30 / 365
                        }
                        if (input_nominal > 7500000) {
                            pajak = hasil * 0.2
                        }
                        total = parseFloat(input_nominal) + parseFloat(hasil) - parseFloat(pajak)
                    }
                    if (select_bulan == 3) {
                        if (input_nominal <= 7500000) {
                            hasil = input_nominal * 0.04 * 90 / 365
                        }

                        if (input_nominal > 7500000 && input_nominal < 50000000) {
                            hasil = input_nominal * 0.05 * 90 / 365
                        }
                        if (input_nominal >= 50000000 && input_nominal < 250000000) {
                            hasil = input_nominal * 0.0525 * 90 / 365
                        }
                        if (input_nominal >= 250000000) {
                            hasil = input_nominal * 0.055 * 90 / 365
                        }
                        if (input_nominal > 7500000) {
                            pajak = hasil * 0.2
                            console.log(`pajak : ${pajak}`)
                        }
                        total = parseFloat(input_nominal) + parseFloat(hasil) - parseFloat(pajak)
                    }
                    if (select_bulan == 6) {
                        if (input_nominal <= 7500000) {
                            hasil = input_nominal * 0.045 * 180 / 365
                        }

                        if (input_nominal > 7500000 && input_nominal < 50000000) {
                            hasil = input_nominal * 0.0525 * 180 / 365
                        }
                        if (input_nominal >= 50000000 && input_nominal < 250000000) {
                            hasil = input_nominal * 0.0550 * 180 / 365
                        }
                        if (input_nominal >= 250000000) {
                            hasil = input_nominal * 0.0575 * 180 / 365
                        }
                        if (input_nominal > 7500000) {
                            pajak = hasil * 0.2
                        }
                        total = parseFloat(input_nominal) + parseFloat(hasil) - parseFloat(pajak)
                    }
                    if (select_bulan == 12) {
                        if (input_nominal <= 7500000) {
                            hasil = input_nominal * 0.0475 * 365 / 365
                        }

                        if (input_nominal > 7500000 && input_nominal < 50000000) {
                            hasil = input_nominal * 0.0550 * 365 / 365
                        }
                        if (input_nominal >= 50000000 && input_nominal < 250000000) {
                            hasil = input_nominal * 0.0575 * 365 / 365
                        }
                        if (input_nominal >= 250000000) {
                            hasil = input_nominal * 0.06 * 365 / 365
                        }
                        if (input_nominal > 7500000) {
                            pajak = hasil * 0.2
                        }
                        total = parseFloat(input_nominal) + parseFloat(hasil) - parseFloat(pajak)
                    }
                    $('#display_pinjaman').text(`Rp. ${new Intl.NumberFormat('en-US', {
                        maximumFractionDigits: 0
                    }).format(input_nominal)}`)
                    $('#display_bulan').text(`${select_bulan} Bulan`)
                    $('#display_bunga').text(`Rp. ${new Intl.NumberFormat('en-US', {
                        maximumFractionDigits: 0
                    }).format(hasil)}`)
                    $('#display_pajak').text(`Rp. ${new Intl.NumberFormat('en-US', {
                        maximumFractionDigits: 0
                    }).format(pajak)}`)
                    $('#display_total').text(`Rp. ${new Intl.NumberFormat('en-US', {
                        maximumFractionDigits: 0
                    }).format(total)}`)
                })

            })
        </script>
    @endpush
