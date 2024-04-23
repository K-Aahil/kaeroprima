<style>
    #card:hover {
        filter: drop-shadow(2px 0px 5px #FF0000);
    }
</style>
<div class="my-5">
    <p class="text-white text-center">Layanan Kredit BPR Mitra Parahyangan</p>
    <p class="text-bold-title text-white fs-4 text-center mx-auto">Menyediakan Solusi untuk Memenuhi Setiap Kebutuhan
        Anda
    </p>
</div>
<div class=" row gx-md-5 gx-sm-3 gx-5 gy-md-5 gy-sm-5 gy-3 mx-md-5 mx-sm-3 mx-0 justify-content-around mx-auto ">
    @foreach ($product as $item)
        @if ($item->status == 1)
            <a href="/detail-produk-simpanan/{{ $item->slug }}" class="col-md-4 col-sm-12 col-12 "
                style="text-decoration: none" id="card">
                <div class="card-product" style="height: 24em;">
                    <img src="{{ asset_administrator('assets/media/product/' . $item->image) }}" alt=""
                        class="w-100" style="height:12em ; width:100% ; object-fit:cover;object-position:0% 50%;">
                    <div class="product-icon">
                        <p class="text-bold-small fs-6"><img src="{{ asset_bpr('/img/icon_bank1.svg') }}" alt=""
                                height="40" width="40" class="icon-bank my-2">{{ $item->name }}</p>
                        <p class="text-small text-alternate-primary" style="font-size: 1em;">
                            {!! Str::limit($item->description, 90) !!}
                        </p>
                    </div>
                </div>
            </a>
        @endif
    @endforeach
</div>
<div class="row my-5">
    <div class="col-md-6 col-sm-6 col-12 px-5 pt-5">
        <p class="text-white">Hubungi Pengajuan Kredit BPR Mitra Parahyangan </p>
        <p class="text-pink text-bold fs-3">Silahkan tinggalkan data diri Kamu, agar Account Officer Kami Dapat
            menghubungi Kamu
            untuk informasi
            lebih lanjut</p>
    </div>
    <div class="col-md-5 col-sm-5 col-10 mx-auto card-contact">
        <form method="POST" action={{ route('inquiries_save') }} id="contact-save" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlSelect1" class="text-bold">Produk Simpanan</label>
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
@push('scripts')
    <script>
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
        $('#product_submit').on('click', () => {
            if ($('#contact-save').valid()) {
                Swal.fire('Sukses', 'Data Berhasil Disimpan', 'success');
                setTimeout(function() {
                    form_produk.submit();
                }, 2000);
            }
        })
    </script>
@endpush
