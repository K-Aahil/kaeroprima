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

                <div class="d-flex align-items-center">

                    <img src="{{ asset_bpr('img/logo_bpr.png') }}" alt=""
                        style="width:10vw; height:10vh; object-fit:contain;">

                    <div class="ms-2">

                        <p class="fs-5 text-bold">Simulasi Kredit</p>
                        {{-- 
                        <p class="fs-6">Plafon Kredit : <span class="text-bold-primary" id="pinjaman"></span> Total

                            Angsuran :

                            <span class="text-bold-primary" id="month"></span> Bunga

                            Kredit : <span class="text-bold-primary" id="modal_persen"></span>

                        </p> --}}

                    </div>

                </div>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>

            <div class="modal-body px-5">

                <div class="row ">

                    <div class="text-bold col-md-6 col-sm-6 col-12 ">

                        Plafon Pinjaman bukan tabel

                    </div>

                    <div id="display_pinjaman" class="col-md-6 col-sm-6 col-12 titik_dua">



                    </div>

                </div>

                <div class="row">

                    <div class="text-bold col-md-6 col-sm-6 col-12">

                        Jangka Waktu (bulan)

                    </div>

                    <div id="display_tenor" class="col-md-6 col-sm-6 col-12 titik_dua">

                        50000

                    </div>

                </div>

                <div class="row">

                    <div class="text-bold col-md-6 col-sm-6 col-12">

                        Suku Bunga

                    </div>

                    <div id="display_bunga" class="col-md-6 col-sm-6 col-12 titik_dua">

                        50000

                    </div>

                </div>

                <div class="row">

                    <div class="text-bold col-md-6 col-sm-6 col-12">

                        Angsuran perbulan (pokok + bunga)

                    </div>

                    <div id="display_angsuran" class="col-md-6 col-sm-6col-12 titik_dua">

                        50000

                    </div>

                </div>

                {{-- <div class="row">

                    <div class="text-bold col-md-6 col-sm-6 col-12">

                        Suku Bunga Efektif / Tahun

                    </div>

                    <div id="display_efektif" class="col-md-6 col-sm-6 col-12 titik_dua">

                        50000

                    </div>

                </div>

                <div class="row">

                    <div class="text-bold col-md-6 col-sm-6 col-12">

                        Installment

                    </div>

                    <div id="display_installment" class="col-md-6 col-sm-6 col-12 titik_dua">

                        50000

                    </div>

                </div> --}}

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>

        </div>

    </div>

</div>
<div class="py-5">
    <p class="text-white text-center mt-5">Layanan Kredit BPR Mitra Parahyangan</p>
    <p class="text-bold text-white fs-4 text-center">Menyediakan Solusi untuk Memenuhi Setiap Kebutuhan Anda
    </p>
</div>
<div class="row gy-md-5 gy-sm-5 gy-3 mx-md-0 mx-sm-0 mx-0 my-5 mx-0">
    <div class="col-md-6 col-sm-12 col-12 row gy-2 mx-0">
        <div class="card-product">
            <img src="{{ asset_administrator('assets/media/product/' . $product->image) }}" alt=""
                class="w-100"
                style="padding-top: 1em; height:21em ; width:100% ; object-fit:cover;object-position:0% 50%;">
            <p class="text-blue my-2 text-semibold">Deskripsi Layanan</p>
            <p class="text-bold">{{ $product->name }}</p>
            <p>{!! $product->description !!}</p>
        </div>
    </div>

    @if ($product->flag == 'show')
        <div class="col-md-5 col-sm-12 col-12 ms-md-5 ms-sm-0 ms-0 mt-3">
            <div class="card-contact">
                <div class="d-flex">
                    <div class="">
                        <p class="text-bold fs-5">Simulasi Kalkulator Kredit</p>
                        <p class="text-alternate-grey">Bunga Per tahun mulai sebesar</p>
                    </div>
                    <div class="ms-auto">
                        <p class="persen mx-2 fs-5" id="persen"></p>
                    </div>
                </div>
                <form>
                    <div class="form-group  w-100">
                        <div class="form-group">
                            <select class="form-control" id="selectProduk" disabled>
                                <option id="option" value="{{ $product->interest_rate }}">{{ $product->name }}
                                    {{-- </option> --}}
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleFormControlInput1" class="text-bold ">Plafon
                                Kredit</label>
                            <input type="text" class="form-control format-number withseparator" id="inputNominal"
                                placeholder="0">
                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <label for="inputControlSubjek " class="text-bold">Jangka Waktu Peminjaman (Bulan)</label>
                        <input type="number" class="form-control" id="inputWaktu" placeholder="0">
                    </div>
                </form>
                <button class="btn-blue  w-100 text-bold my-5" id="calculate">
                    Kalkulasi Kredit
                </button>
                <div class="">
                    <p class="text-bold fs-6">Hubungi BPR Mitra Parahyangan</p>
                    <a href="{{ route('produk_kredit') }}" style="text-decoration: none;">
                        <div class="btn-blue text-bold mx-2 w-50 text-center">Hubungi Kami</div>
                    </a>
                </div>
                {{-- <div class="mt-5">
                    <p class="text-bold fs-53">Hubungi BPR Mitra Parahyangan</p>
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
                    </form>
                </div> --}}
            </div>
        </div>
        {{-- <div id="background" style="background-image:url({{ asset_bpr('img/background_pattern.svg') }})"></div> --}}
        <div class="section-product-1" id="background"></div>
    @else
        <div class="col-md-5 col-sm-12 col-12 ms-md-5 ms-sm-0 ms-0 mt-3">
            <div class="card-contact">
                {{-- <div class="mt-5">
                    <p class="text-bold fs-53">Hubungi BPR Mitra Parahyangan</p>
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
                    </form>
                </div> --}}
                <div class="mt-5">
                    <p class="text-bold fs-6">Hubungi BPR Mitra Parahyangan</p>
                    <a href="{{ route('produk_kredit') }}" style="text-decoration: none;">
                        <div class="btn-blue text-bold mx-0 w-50 text-center">Hubungi Kami</div>
                    </a>
                </div>
            </div>
        </div>
        {{-- <div id="background" style="background-image:url({{ asset_bpr('img/background_pattern.svg') }})"></div> --}}
        <div class="section-product-1" id="background"></div>
    @endif




    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jstat@1.9.2/dist/jstat.min.js"></script>
        <script src="{{ asset_bpr('js/formula.js') }}"></script>
        <script>
            $(document).ready(() => {
                $(".format-number").keyup(function(e) {
                    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 || (e.keyCode == 65 && (e
                            .ctrlKey === true || e.metaKey === true)) || (e.keyCode >= 35 && e.keyCode <= 40)) {
                        return;
                    }
                    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode >
                            105)) {
                        e.preventDefault();
                    }
                });

                $('.withseparator').maskMoney({
                    prefix: '',
                    suffix: '',
                    thousands: ',',
                    decimal: '.',
                    precision: '',
                });
                var selectedOption = $('#selectProduk option:selected').val()
                $('#persen').text(`${selectedOption}%`)
                $('#selectProduk').change(function() {
                    selectedOption = $(this).val()
                    $('#persen').text(`${selectedOption}%`)
                })


                $('#calculate').click(function() {
                    var input_nominal = $('#inputNominal').val().replaceAll(',', '')
                    var waktu_angsuran = $('#inputWaktu').val()
                    if (input_nominal.length == 0 && waktu_angsuran.length == 0) {
                        $('#exampleModal').modal('hide')
                        Swal.fire('Kosong', 'Maaf Input Waktu dan plafon nominal tidak boleh kosong', 'error');
                    } else {
                        $('#exampleModal').modal('show')
                    }
                })

                // {{ $product->rate_flag }} == 1 ? console.log('ini efektif') : console.log('ini flat')
                if ({{ $product->rate_flag }} == 1) {
                    // console.log('ini efektif bro')
                    $('#exampleModal').on('shown.bs.modal', function() {
                        var preventModalShow = true
                        var inputNominal = $('#inputNominal').val().replaceAll(',', '')
                        var bungaTahunan = inputNominal * $('#selectProduk').val() / 100
                        var nominal_input = $('#inputNominal').val().replace(/,/g, '')
                        var angsuran_bulan = $('#inputWaktu').val()
                        var angsuran_per_bulan = ((1 + (angsuran_bulan * parseFloat(
                                    selectedOption) / 100)) *
                                inputNominal) /
                            angsuran_bulan
                        // var rate = formulajs.RATE(parseFloat(angsuran_bulan), angsuran_per_bulan,
                        //         parseFloat(
                        //             inputNominal) * -1, 0, 0, 0) *
                        //     12
                        var pmt = formulajs.PMT((selectedOption / 100) / 12, angsuran_bulan, -inputNominal)
                        // var ratePercentage = (rate * 100).toFixed(4).replace('.', ',') + '%';
                        console.log(`suku bunga : ${selectedOption}`)
                        console.log(`pmt : ${pmt}`)

                        $('#pinjaman').text(`Rp. ${$('#inputNominal').val()}`)
                        $('#display_pinjaman').text(`Rp. ${$('#inputNominal').val()}`)
                        $('#display_bunga').text(`Rp. ${$('#inputNominal').val()}`)
                        $('#month').text(`${$('#inputWaktu').val()} Bulan`)
                        $('#modal_persen').text(`${selectedOption}%`)
                        $('#display_bunga').text(`${selectedOption}%`)
                        $('#display_angsuran_per_bulan').text(angsuran_per_bulan)
                        // $('#display_efektif').text(ratePercentage)
                        $('#display_angsuran').text('Rp. ' + new Intl.NumberFormat('en-US', {
                            maximumFractionDigits: 0
                        }).format(pmt))
                        $('#display_tenor').text(`${$('#inputWaktu').val()} Bulan`)
                        // var cicilanPerBulan = inputNominal / $('#inputWaktu').val() + (
                        //     bungaTahunan /
                        //     12)
                        // $('#display_cicilan').text('Rp. ' + new Intl.NumberFormat('en-US', {
                        //     maximumFractionDigits: 0
                        // }).format(Math.ceil(cicilanPerBulan)))
                        // $('#display_installment').text('Rp. ' + new Intl.NumberFormat('en-US', {
                        //     maximumFractionDigits: 0
                        // }).format(pmt))

                    })
                } else {
                    // console.log('ini flat')
                    $('#exampleModal').on('shown.bs.modal', function() {
                        var preventModalShow = true
                        var inputNominal = $('#inputNominal').val().replaceAll(',', '')
                        var bungaTahunan = inputNominal * $('#selectProduk').val() / 100
                        var nominal_input = $('#inputNominal').val().replace(/,/g, '')
                        var angsuran_bulan = $('#inputWaktu').val()
                        var angsuran_per_bulan = ((1 + (angsuran_bulan * parseFloat(
                                    selectedOption) / 100)) *
                                inputNominal) /
                            angsuran_bulan
                        // var rate = formulajs.RATE(parseFloat(angsuran_bulan), angsuran_per_bulan,
                        //         parseFloat(
                        //             inputNominal) * -1, 0, 0, 0) *
                        //     12
                        // var ratePercentage = (rate * 100).toFixed(4).replace('.', ',') + '%';
                        // var pmt = formulajs.PMT(rate / 12, angsuran_bulan, -inputNominal)

                        $('#pinjaman').text(`Rp. ${$('#inputNominal').val()}`)
                        $('#display_pinjaman').text(`Rp. ${$('#inputNominal').val()}`)
                        $('#display_bunga').text(`Rp. ${$('#inputNominal').val()}`)
                        $('#month').text(`${$('#inputWaktu').val()} Bulan`)
                        $('#modal_persen').text(`${selectedOption}%`)
                        $('#display_bunga').text(`${selectedOption}%`)
                        $('#display_angsuran_per_bulan').text(angsuran_per_bulan)
                        // $('#display_efektif').text(ratePercentage)
                        $('#display_angsuran').text('Rp. ' + new Intl.NumberFormat('en-US', {
                            maximumFractionDigits: 0
                        }).format(angsuran_per_bulan))
                        $('#display_tenor').text(`${$('#inputWaktu').val()} Bulan`)
                        // var cicilanPerBulan = inputNominal / $('#inputWaktu').val() + (
                        //     bungaTahunan /
                        //     12)
                        // $('#display_cicilan').text('Rp. ' + new Intl.NumberFormat('en-US', {
                        //     maximumFractionDigits: 0
                        // }).format(Math.ceil(cicilanPerBulan)))
                        // $('#display_installment').text('Rp. ' + new Intl.NumberFormat('en-US', {
                        //     maximumFractionDigits: 0
                        // }).format(pmt))

                    })
                }






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

                            email: 'Mohon Masukkan Email yang valid'

                        },

                        phone: {

                            required: 'Silahkan Masukkan No Hp',

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

                });

                $('#product_submit').on('click', event => {

                    if ($('#contact-save').valid()) {

                        Swal.fire('Sukses', 'Data Berhasil Disimpan', 'success');

                        setTimeout(function() {

                            form_produk.submit();

                        }, 2000);

                    }

                })

            })
        </script>
    @endpush
