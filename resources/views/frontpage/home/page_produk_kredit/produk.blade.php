<style>
    .error {
        color: red;
    }

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
        transition: 0.3s ease-in-out;
        filter: drop-shadow(2px 0px 5px #FF0000);
    }

    .accordion-button:focus {
        border-color: none;
        box-shadow: 0 0 0 0.25rem rgb(13 110 253 / 0%);
    }
</style>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex">
                    <img src="{{ asset_bpr('img/logo_bpr.png') }}" alt=""
                        style="width:10vw; height:10vh; object-fit:contain;">
                    <div class="ms-2">
                        <p class="fs-5 text-bold">Simulasi Kredit</p>
                        <p class="fs-6">Plafon Kredit : <span class="text-bold-primary" id="pinjaman"></span> Total
                            Angsuran :
                            <span class="text-bold-primary" id="month"></span> Bunga
                            Kredit : <span class="text-bold-primary" id="modal_persen"></span>
                        </p>
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
                <div class="row">
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
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="my-5">
    <p class="text-white text-center">Layanan Kredit BPR Mitra Parahyangan</p>
    <p class="text-bold-title text-white fs-4 text-center mx-auto">Menyediakan Solusi untuk Memenuhi Setiap Kebutuhan
        Anda
    </p>
</div>

<div class="row gy-md-5 gy-sm-5 gy-3 justify-content-center">
    <div class="col-md-7 col-sm-12 col-12 row gy-4 mx-0">
        @foreach ($product as $key => $item)
            @if ($item->status == 1)
                <a href="/detail-produk-kredit/{{ $item->slug }}"
                    class="col-md-{{ $loop->last == 1 && $loop->index % 2 == 0 ? '12' : '6' }} col-sm-12 col-12 "
                    style="text-decoration: none" id="card">
                    <div class="card-product" style="height: 24em;">
                        <img src="{{ asset_administrator('assets/media/product/' . $item->image) }}" alt=""
                            class="w-100" style="height:12em ; width:100% ; object-fit:cover;">
                        <div class="product-icon">
                            <p class="text-bold-small" style="font-size: 0.8em;"><img
                                    src="{{ asset_bpr('/img/icon_bank1.svg') }}" alt="" height="40"
                                    width="40" class="icon-bank my-2">{{ $item->name }}</p>
                            <p style="font-size: 0.7em;">
                                {!! Str::limit($item->description, 90) !!}
                            </p>
                        </div>
                    </div>
                </a>
            @endif
        @endforeach
    </div>
    <div class="col-md-4 col-sm-12 col-12">
        <p class="text-bold fs-3 text-white">Hubungi BPR Mitra Parahyangan</p>
        <p class="text-white">Silahkan Isi data diri kamu, agar Account Officer Kami Dapat
            menghubungi Kamu untuk informasi lebih lanjut</p>
        <div class="card-contact">
            <form method="POST" action={{ route('inquiries_save') }} id="contact-save" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlSelect1" class="text-bold">Produk Kredit</label>
                    <select class="form-control" id="selectProduk" name="product_id">
                        @foreach ($product as $item)
                            @if ($item->status == 1)
                                <option id="option" value="{{ $item->id }}">{{ $item->name }}
                                </option>
                            @endif
                        @endforeach
                    </select>

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
        </div>
    </div>
</div>
<div class="row gy-md-5 gy-sm-5 gy-3 mt-0 justify-content-center">
    <div class="col-md-7 col-sm-7 col-12 px-5 pt-5">

    </div>
    <div class="col-md-4 col-sm-4 col-11 mx-md-4 mx-sm-3 mx-auto">

    </div>
</div>

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jstat@1.9.2/dist/jstat.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/gh/formulajs/formulajs@2.9.3/dist/formula.min.js"></script> --}}
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
                var rate = formulajs.RATE(parseFloat(angsuran_bulan), angsuran_per_bulan,
                        parseFloat(
                            inputNominal) * -1, 0, 0, 0) *
                    12
                var ratePercentage = (rate * 100).toFixed(4).replace('.', ',') + '%';
                var pmt = formulajs.PMT(rate / 12, angsuran_bulan, -inputNominal)


                $('#pinjaman').text(`Rp. ${$('#inputNominal').val()}`)
                $('#display_pinjaman').text(`Rp. ${$('#inputNominal').val()}`)
                $('#display_bunga').text(`Rp. ${$('#inputNominal').val()}`)
                $('#month').text(`${$('#inputWaktu').val()} Bulan`)
                $('#modal_persen').text(`${selectedOption}%`)
                $('#display_bunga').text(`${selectedOption}%`)
                $('#display_angsuran_per_bulan').text(angsuran_per_bulan)
                $('#display_efektif').text(ratePercentage)

                $('#display_angsuran').text('Rp. ' + new Intl.NumberFormat('en-US', {
                    maximumFractionDigits: 0
                }).format(angsuran_per_bulan))
                $('#display_tenor').text(`${$('#inputWaktu').val()} Bulan`)
                var cicilanPerBulan = inputNominal / $('#inputWaktu').val() + (
                    bungaTahunan /
                    12)
                $('#display_cicilan').text('Rp. ' + new Intl.NumberFormat('en-US', {
                    maximumFractionDigits: 0
                }).format(Math.ceil(cicilanPerBulan)))
                $('#display_installment').text('Rp. ' + new Intl.NumberFormat('en-US', {
                    maximumFractionDigits: 0
                }).format(pmt))
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
