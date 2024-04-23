@extends('frontpage.layouts.main')
@push('styles')
<style>
    .error {
        color: #f30e0e !important;
        font-size: 0.7rem !important;
    }
</style>
@endpush

@section('content')
<section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success d-flex align-items-center">
                        <span class="svg-icon svg-icon-2hx svg-icon-success me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.5" d="M12.8956 13.4982L10.7949 11.2651C10.2697 10.7068 9.38251 10.7068 8.85731 11.2651C8.37559 11.7772 8.37559 12.5757 8.85731 13.0878L12.7499 17.2257C13.1448 17.6455 13.8118 17.6455 14.2066 17.2257L21.1427 9.85252C21.6244 9.34044 21.6244 8.54191 21.1427 8.02984C20.6175 7.47154 19.7303 7.47154 19.2051 8.02984L14.061 13.4982C13.7451 13.834 13.2115 13.834 12.8956 13.4982Z" fill="black"/>
                                <path d="M7.89557 13.4982L5.79487 11.2651C5.26967 10.7068 4.38251 10.7068 3.85731 11.2651C3.37559 11.7772 3.37559 12.5757 3.85731 13.0878L7.74989 17.2257C8.14476 17.6455 8.81176 17.6455 9.20663 17.2257L16.1427 9.85252C16.6244 9.34044 16.6244 8.54191 16.1427 8.02984C15.6175 7.47154 14.7303 7.47154 14.2051 8.02984L9.06096 13.4982C8.74506 13.834 8.21146 13.834 7.89557 13.4982Z" fill="black"/>
                            </svg>
                        </span>
                        <div class="d-flex flex-column">
                            <span>{{ $message }}</span>
                        </div>
                        <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                            <span class="svg-icon svg-icon-muted svg-icon-2hx">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="black"/>
                                    <rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="black"/>
                                </svg>
                            </span>
                        </button>
                    </div>
                @endif
                    <div class="ec-common-wrapper">
                        <div class="ec-contact-leftside" style="max-width: 100%;">
                            <div class="ec-contact-container">
                                <div class="ec-contact-form">
                            <h6 class="text-center">Member Dewa Medika</h6>
                            <form id="contact-save" action="{{ route('contact_save') }}" method="post">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <label>Nama<span style="color: red;"> *</span></label>
                                    <input type="text" class="form-control" name="name" />
                                    @if($errors->has('name')) <div class="text-danger"> {{ $errors->first('name')}} </div> @endif
                                </div><br>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" />
                                    @if($errors->has('email')) <div class="text-danger"> {{ $errors->first('email')}} </div> @endif
                                </div><br>
                                <div class="form-group">
                                    <label>No Telepon<span style="color: red;"> *</span></label>
                                    <input type="text" class="form-control" name="phone" />
                                    @if($errors->has('phone')) <div class="text-danger"> {{ $errors->first('phone')}} </div> @endif
                                </div><br>
                                <div class="form-group">
                                    <label>Alamat<span style="color: red;"> *</span></label>
                                    <textarea name="alamat" class="form-control" rows="4" cols="5"></textarea>
                                    @if($errors->has('alamat')) <div class="text-danger"> {{ $errors->first('alamat')}} </div> @endif
                                </div><br>
                                <div class="form-group">
                                    <label>Kota<span style="color: red;"> *</span></label>
                                    <select class="form-select basic-usage" name="kota" id="kota">
                                        <option value="">Pilih Kabupaten/Kota</option>
                                        @foreach($cities as $kota)
                                            <option value="{{$kota->type}} {{ $kota->title }}">
                                                {{$kota->type}} {{ $kota->title }}
                                            </option>
                                        @endforeach 
                                    </select>
                                </div>
                                <span id="error-kota"></span>
                                {{-- <div class="form-group">
                                <label>Kota<span style="color: red;"> *</span></label>
                                    <select name="kota" id="kota" class="form-select @error('kota') is-invalid @enderror">
                                        <option value="">Pilih Kabupaten/Kota</option>
                                            @foreach($cities as $kota)
                                        <option value="{{$kota->type}} {{ $kota->title }}">
                                            {{$kota->type}} {{ $kota->title }} 
                                        </option>
                                            @endforeach 
                                    </select>
                                    @if($errors->has('kota')) 
                                    <div class="text-danger"> 
                                        {{ $errors->first('kota')}} 
                                    </div> 
                                    @endif
                                </div> --}}
                                <div class="form-group mt-3">
                                    <span class="ec-contact-wrap ec-contact-btn">
                                        <button id="member_submit" class="btn btn-secondary" type="submit">Submit</button>
                                    </span>
                                </div>
                            </form>
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
@push('scripts')
<script src="{{ asset_frontpage('assets/js/contact.js') }}"></script>
<script src="{{ asset_frontpage('assets/js/validation.js') }}"></script>
<script>
    $( '.basic-usage' ).select2( {
    // theme: "bootstrap-5",
    // width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
    // placeholder: $( this ).data( 'placeholder' ),
});
</script>
 <!-- <script>
    $('#contact-save').submit(function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();

        const data = $('#contact-save').serialize();
        console.log(data);
        // showLoader();

        $.ajax({
            url: `{{ route('contact_save') }}`,
            type: 'POST',
            data: data,
            success: function(response) {
                // hideLoader();
                console.log(response);
                var url = `{{ route('member') }}`;
                location.href = url;
            },
            error: function (request, status, error) {
                // hideLoader();
                console.log(request);
                console.log(status);
                console.log(error);
                let err_msg = request.responseJSON.errors
                Object.keys(err_msg).forEach(value => {
                    

                    if (value == 'description') {
                        let error = $('#contact-save').find(`textarea[name=description]`);
                        error.attr("placeholder", err_msg[value][0]);
                        error.css("border", "1px solid #f18e8e");
                    } else {
                        let error = $('#contact-save').find(`input[name=${value}]`);
                        error.attr("placeholder", err_msg[value][0]);
                        error.css("border", "1px solid #f18e8e");
                    }

                });
            }
        });
    });
</script> -->

@endpush
