@extends('administrator.layouts.main')
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Settings</h1>
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Overview</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <form id="form_add" class="form d-flex flex-column flex-lg-row"
                action="{{ route('admin.settings.updateOverview') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Overview</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            {{-- <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#default_language">Default Language</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#another_language">Another Language</a>
                            </li>
                        </ul> --}}
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="default_language" role="tabpanel">
                                <div class="fv-row py-4">
                                <label class="form-label">BPR Mitra Parahyangan Overview</label>
                                <textarea type="text" name="overview" placeholder="BPR Mitra Parahyangan Overview" class="ckeditor mb-2">{{ array_key_exists("overview",$settings)?$settings["overview"]:"" }}</textarea>
                                <div class="text-muted fs-7"></div></textarea>
                            </div>
                        </div>                         
                    
                    <div class="tab-pane fade" id="another_language" role="tabpanel">
                        <div class="mb-10 fv-row">
                            <div class="d-flex">
                                <div class="form-check form-check-custom form-check-solid form-check-sm">
                                    <input class="form-check-input" type="checkbox" name="same_as_default"
                                        value="1" id="sameasdefault" {{($settings["same_as_default"]) == "1" ? "checked" : "" }}>
                                    <label class="form-check-label" for="sameasdefault" >
                                        Same as default
                                    </label>   
                                </div>
                            </div>
                        </div>
                        <div class="fv-row py-4">
                            <label class="form-label">BPR Mitra Parahyangan Overview (an)</label>
                                <textarea type="text" name="overview_an" placeholder="BPR Mitra Parahyangan Overview (an)" class="ckeditor mb-2">{{ array_key_exists("overview_an",$settings)?$settings["overview_an"]:"" }}</textarea>
                                <div class="text-muted fs-7"></div></textarea>
                        </div> 
                    </div>
                </div>                         
            </div>
        </div>
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <div class="card-header">
        <div class="card-title">
            <h2>Contact Us Link</h2>
            </div>
            <div class="mb-10 fv-row">
                <input type="text" name="factory_link" class="form-control mb-2" placeholder="Contact Us Link" value="{{ array_key_exists("factory_link",$settings)?$settings["factory_link"]:"" }}" />
                <div class="text-muted fs-7"></div>
            </div>
        </div>
    </div>
                    {{-- <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                                    <div class="card-header">
                                    <div class="card-title">
                                        <h2>Services</h2>
                                    </div>
                                <div class="mb-10 fv-row">
                                    <label class="form-label">Services Overview</label>
                                    <textarea type="text" name="services_overview" placeholder="Services Overview" class="ckeditor mb-2">{{ array_key_exists("services_overview",$settings)?$settings["services_overview"]:"" }}</textarea>
                                    <div class="text-muted fs-7"></div></textarea>
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="form-label">Services Link</label>
                                    <input type="text" name="services_link" class="form-control mb-2" placeholder="Services Link" value="{{ array_key_exists("services_link",$settings)?$settings["services_link"]:"" }}" />
                                    <div class="text-muted fs-7"></div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="form-label">Services Background</label><br>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 150px;">
                                            <img src="{{ array_key_exists("services_background", $settings)? img_src($settings["services_background"], "services_background"):"" }}">
                                        </div>
                                        <div>
                                            <a href="#" class="btn btn-light fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            <span class="btn btn-light btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="services_background">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-muted fs-7">
                                    </div>
                                </div>
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Factory Facility</h2>
                                    </div>
                                <div class="mb-10 fv-row">
                                    <label class="form-label">Factory Facility Overview</label>
                                    <textarea type="text" name="factory_overview" placeholder="Factory Facility Overview" class="ckeditor mb-2">{{ array_key_exists("factory_overview",$settings)?$settings["factory_overview"]:"" }}</textarea>
                                    <div class="text-muted fs-7"></div></textarea>
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="form-label">Factory Facility Title</label>
                                    <input type="text" name="factory_title" class="form-control mb-2" placeholder="Factory Facility Title" value="{{ array_key_exists("factory_title",$settings)?$settings["factory_title"]:"" }}" />
                                    <div class="text-muted fs-7"></div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="form-label">Factory Facility Link</label>
                                    <input type="text" name="factory_link" class="form-control mb-2" placeholder="Factory Facility Link" value="{{ array_key_exists("factory_link",$settings)?$settings["factory_link"]:"" }}" />
                                    <div class="text-muted fs-7"></div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="form-label">Factory Facility Image</label><br>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 150px;">
                                            <img src="{{ array_key_exists("factory_image", $settings)? img_src($settings["factory_image"], "factory_image"):"" }}">
                                        </div>
                                        <div>
                                            <a href="#" class="btn btn-light fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            <span class="btn btn-light btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="factory_image">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-muted fs-7">
                                </div>
                            </div> --}}
                    <div class="d-flex justify-content-end">
                        <button type="submit" id="overview_submit" class="btn btn-primary">
                            <span class="indicator-label">Save Changes</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
    const url = `{!! url('/') !!}`;
    $(document).ready(function() {
        CKEDITOR.replace('address');
    });
</script>
<script>

    (function($) {
        $.fn.inputFilter = function(callback, errMsg) {
            return this.on("input keydown keyup mousedown mouseup select contextmenu drop focusout", function(e) {
            if (callback(this.value)) {
                // Accepted value
                if (["keydown","mousedown","focusout"].indexOf(e.type) >= 0){
                    $(this).removeClass("input-error");
                    this.setCustomValidity("");
                }
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
            } else if (this.hasOwnProperty("oldValue")) {
                // Rejected value - restore the previous one
                $(this).addClass("input-error");
                this.setCustomValidity(errMsg);
                this.reportValidity();
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
            } else {
                // Rejected value - nothing to restore
                this.value = "";
            }
            });
        };
    }(jQuery));


    // Install input filters.
    $(".number_only").inputFilter(function(value) {
        return /^-?\d*$/.test(value);
    }, "Masukan angka");

    $('.add-email').click(function (e) {
        console.log(e);
        e.preventDefault();
        addEmail()
    });

    function addEmail(name = '', email = '') {
        var tr_clone = $(".add-email-list").clone();
        tr_clone.removeClass('add-email-list');
        tr_clone.addClass('list-email');
        tr_clone.find('.name_receive').val(name);
        tr_clone.find('.email_receive').val(email);
        $("#kt_ecommerce_add_email_options").append(tr_clone);
        resetIndex();
    }

    function resetIndex (){
        var index = 0;
        $(".list-email").each(function () {
            var another = this;
            search_index = $(this).attr("childidx");
            $(this).find('input,select').each(function () {
                this.name = this.name.replace('[' + search_index + ']', '[' + index + ']');
                $(another).attr("childidx", index);
            });
            index++;
        });
    }
    $('#kt_ecommerce_add_email_options').on('click', '.delete-answer', function (e) {
        e.preventDefault();
        Swal.fire({
            title: 'Konfirmasi',
            text: "Hapus row yang dipilih ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya!'
        }).then((result) => {
            if (result.isConfirmed) {
                $(this).closest('.list-email').remove();
                resetIndex();
                Swal.fire( 'Berhasil!', 'Row berhasil dihapus !', 'success' )
            }
        })
    });

    $('.add-social_media').click(function (e) {
        console.log(e);
        e.preventDefault();
        addSocialMedia()
    });

    function addSocialMedia(title = '', icon = '', link = '') {
        var tr_clone = $(".add-social_media-list").clone();
        tr_clone.removeClass('add-social_media-list');
        tr_clone.addClass('list-social_media');
        tr_clone.find('.title_social_media').val(title);
        tr_clone.find('.icon_social_media').val(icon);
        tr_clone.find('.link_social_media').val(link);
        $("#kt_ecommerce_add_social_media_options").append(tr_clone);
        resetIndexSocialMedia();
    }

    function resetIndexSocialMedia (){
        var index = 0;
        $(".list-social_media").each(function () {
            var another = this;
            search_index = $(this).attr("childidx");
            $(this).find('input,select').each(function () {
                this.name = this.name.replace('[' + search_index + ']', '[' + index + ']');
                $(another).attr("childidx", index);
            });
            index++;
        });
    }
    $('#kt_ecommerce_add_social_media_options').on('click', '.delete-answer', function (e) {
        e.preventDefault();
        Swal.fire({
            title: 'Konfirmasi',
            text: "Hapus row yang dipilih ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya!'
        }).then((result) => {
            if (result.isConfirmed) {
                $(this).closest('.list-social_media').remove();
                resetIndexSocialMedia();
                Swal.fire( 'Berhasil!', 'Row berhasil dihapus !', 'success' )
            }
        })
    });
</script>
<script>
function getCity(params, current_id = null) {
    let province_id = params;
    let actionUrl = `{{ route('getCities') }}`;
    $("#city-id").find('option').not(':first').remove();
    if (province_id != "") {
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: {
                "_token": "{{ csrf_token() }}",
                "_method": 'POST',
                province_id: province_id
            },
            success: function(data) {
                const list = (typeof data == "string") ? jQuery.parseJSON(data) : data;
                const cities = list.rajaongkir.results;
                cities.forEach(index => {
                    if (current_id != null && index.city_id == current_id) {
                        let city_option = `<option selected value="${index.city_id}">${index.type} ${index.city_name}</option>`;
                        $("#city-id").append(city_option);

                    } else {
                        let city_option = `<option value="${index.city_id}">${index.type} ${index.city_name}</option>`;
                        $("#city-id").append(city_option);

                    }
                });

                $("#city-id").attr("disabled", false);
                $("#city-id").css("background-color", "#FFFF").css("cursor", "pointer");

                $("#subdistrict-id").attr("disabled", true);
                $("#subdistrict-id").css("background-color", "#e9e7e7").css("cursor", "not-allowed");

            }
        });
    } else {

        $("#city-id").attr("disabled", true);
        $("#city-id").css("background-color", "#e9e7e7").css("cursor", "not-allowed");

        $("#subdistrict-id").attr("disabled", true);
        $("#subdistrict-id").css("background-color", "#e9e7e7").css("cursor", "not-allowed");

    }
}

function getKecamatan(params, current_id = null) {
    let city_id = params;
    let actionUrl = `{{ route('getKecamatan') }}`;
    $("#subdistrict-id").find('option').not(':first').remove();
    if (city_id != "") {
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: {
                "_token": "{{ csrf_token() }}",
                "_method": 'POST',
                city_id: city_id
            },
            success: function(data) {
                const subdistrict = (typeof data == "string") ? jQuery.parseJSON(data) : data;
                const subdistricts = subdistrict.rajaongkir.results;
                subdistricts.forEach(index => {
                    if (current_id != null && index.subdistrict_id == current_id) {
                        let subdistrict_option = `<option selected value="${index.subdistrict_id}">${index.subdistrict_name}</option>`;
                        $("#subdistrict-id").append(subdistrict_option);

                    } else {
                        let subdistrict_option = `<option value="${index.subdistrict_id}">${index.subdistrict_name}</option>`;
                        $("#subdistrict-id").append(subdistrict_option);

                    }
                });

                $("#subdistrict-id").attr("disabled", false);
                $("#subdistrict-id").css("background-color", "#FFFF").css("cursor", "pointer");

            }
        });
    } else {

        $("#subdistrict-id").attr("disabled", true);
        $("#subdistrict-id").css("background-color", "#e9e7e7").css("cursor", "not-allowed");

    }
}

$('#provinsi-id').on('change', function (e) {
    e.stopImmediatePropagation();
    let province_id = $(this).val();
    getCity(province_id);
});

$('#city-id').on('change', function (e) {
    e.stopImmediatePropagation();
    let city_id = $(this).val();
    getKecamatan(city_id);
});
</script>
@if(!empty($settings['email_receive']))
    @php
        $email_receive = json_encode($settings['email_receive']);
    @endphp
    <script>
        let email_receive = {!! $email_receive !!};
        var email_receives = JSON.parse(email_receive)
        console.log(typeof email_receives);
        email_receives.forEach(index => {
            addEmail(index.name, index.email)
        });
    </script>
@endif
@if(!empty($settings['social_media']))
    @php
        $social_media = json_encode($settings['social_media']);
    @endphp
    <script>
        let social_media = {!! $social_media !!};
        var social_medias = JSON.parse(social_media)
        console.log(typeof social_medias);
        social_medias.forEach(index => {
            addSocialMedia(index.title, index.icon, index.link)
        });
    </script>
@endif
@if(!empty($address))
<script>
    let current_province_id = `{!! $address->provinsi !!}`;
    let current_city_id = `{!! $address->kota !!}`;
    let current_subdistrict_id = `{!! $address->kecamatan !!}`;
    getCity(current_province_id, current_city_id);
    getKecamatan(current_city_id, current_subdistrict_id);
</script>
@endif
{{-- <script>
    CKEDITOR.replace( 'overview_an' );
    $("form").submit( function(e) {
        var messageLength = CKEDITOR.instances['overview_an'].getData().replace(/<[^>]*>/gi, '').length;
        if( !messageLength ) {
            alert( 'Please enter a message' );
            e.preventDefault();
        }
    });
</script> --}}
<script src="{{ asset_administrator('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
<script src="{{ asset_administrator('assets/js/custom/settings.js') }}"></script>
<script src="{{ asset_administrator('assets/js/custom/documentation/documentation.js') }}"></script>
<script src="{{ asset_administrator('assets/js/custom/documentation/search.js') }}"></script>
<script src="{{ asset_administrator('assets/js/custom/documentation/forms/select2.js') }}"></script>
<script src="{{ asset_administrator('assets/plugins/custom/form-jasnyupload/fileinput.min.js') }}"></script>
@endpush