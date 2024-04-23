@extends('administrator.layouts.main')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Store</h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <!--end::Separator-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">Dashboard</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('admin.store') }}" class="text-muted text-hover-primary">Store
                            </a>
                        </li>
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">Add</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <form id="form_add" class="form d-flex flex-column flex-lg-row" action="{{ route('admin.store.save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>General</h2>
                                </div>
                            </div>

                            <div class="card-body pt-0">
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Nama Store</label>
                                    <input type="text" name="name" class="form-control mb-2" placeholder="Nama Store" value="" />
                                    <div class="text-muted fs-7"></div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control mb-2" placeholder="Email" value="" />
                                    <div class="text-muted fs-7"></div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="form-label">No Telphone / HP</label>
                                    <input type="text" name="phone" class="form-control mb-2" placeholder="No Telphone / HP" value="" />
                                    <div class="text-muted fs-7"></div>
                                </div>
                                <h4 class="mb-10 fv-row">Detail Alamat Store</h4>
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Provinsi</label>
                                    <select name="province_id" id="provinsi-id" class="form-select">
                                        <option value="">Pilih Provinsi</option>
                                        @foreach ($provinces as $province)
                                            <option value="{{ $province->province_id }}">{{ $province->title }}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-muted fs-7"> </div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Kabupaten / Kota</label>
                                    <select name="city_id" id="city-id" class="form-select">
                                        <option value="">Pilih Kabupaten / Kota</option>
                                    </select>
                                    <div class="text-muted fs-7"> </div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Kecamatan</label>
                                    <select id="subdistrict-id" name="subdistrict_id" class="form-select">
                                        <option value="">Pilih Kecamatan</option>
                                    </select>
                                    <div class="text-muted fs-7"> </div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="form-label">Detail Alamat Store</label>
                                    <textarea name="detail_address" id="detail_address" class="form-control mb-2"></textarea>
                                    <div class="text-muted fs-7"></div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="form-label">Image</label><br>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 150px;"></div>
                                        <div>
                                            <a href="#" class="btn btn-light fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            <span class="btn btn-light btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-muted fs-7">
                                    </div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="form-label">Status</label>
                                    <div class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" id="status" name="status" checked="checked" />
                                        <label class="form-check-label fw-bold text-gray-400 ms-3" for="status">Active</label>
                                    </div>
                                    <div class="text-muted fs-7"></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('admin.store') }}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                            <button type="submit" id="add_post_category_submit" class="btn btn-primary">
                                <span class="indicator-label">Save</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset_administrator('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/custom/apps/ecommerce/store/store.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/custom/documentation/documentation.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/custom/documentation/search.js') }}"></script>
    {{-- <script src="{{ asset_administrator('assets/js/custom/documentation/forms/select2.js') }}"></script> --}}
    <script src="{{ asset_administrator('assets/plugins/custom/form-jasnyupload/fileinput.min.js') }}"></script>
    <script src="{{ asset_administrator('ckeditor/ckeditor.js') }}"></script>
    <script>
    function getCity(params, current_id = null) {
        CKEDITOR.replace('detail_address');
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

    <script type="text/javascript">
        $(document).ready(function() {
            class MyUploadAdapter {
                constructor(loader) {
                    // CKEditor 5's FileLoader instance.
                    this.loader = loader;

                    // URL where to send files.
                    this.url = 'https://example.com/image/upload/path';
                }

                // Starts the upload process.
                upload() {
                    return new Promise((resolve, reject) => {
                        this._initRequest();
                        this._initListeners(resolve, reject);
                        this._sendRequest();
                    });
                }

                // Aborts the upload process.
                abort() {
                    if (this.xhr) {
                        this.xhr.abort();
                    }
                }

                // Example implementation using XMLHttpRequest.
                _initRequest() {
                    const xhr = this.xhr = new XMLHttpRequest();

                    xhr.open('POST', this.url, true);
                    xhr.responseType = 'json';
                }

                // Initializes XMLHttpRequest listeners.
                _initListeners(resolve, reject) {
                    const xhr = this.xhr;
                    const loader = this.loader;
                    const genericErrorText = 'Couldn\'t upload file:' + ` ${ loader.file.name }.`;

                    xhr.addEventListener('error', () => reject(genericErrorText));
                    xhr.addEventListener('abort', () => reject());
                    xhr.addEventListener('load', () => {
                        const response = xhr.response;

                        if (!response || response.error) {
                            return reject(response && response.error ? response.error.message :
                                genericErrorText);
                        }

                        // If the upload is successful, resolve the upload promise with an object containing
                        // at least the "default" URL, pointing to the image on the server.
                        resolve({
                            default: response.url
                        });
                    });

                    if (xhr.upload) {
                        xhr.upload.addEventListener('progress', evt => {
                            if (evt.lengthComputable) {
                                loader.uploadTotal = evt.total;
                                loader.uploaded = evt.loaded;
                            }
                        });
                    }
                }

                // Prepares the data and sends the request.
                _sendRequest() {
                    const data = new FormData();

                    data.append('upload', this.loader.file);

                    this.xhr.send(data);
                }
            }

            function MyCustomUploadAdapterPlugin(editor) {
                editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
                    return new MyUploadAdapter(loader);
                };
            }

        });
    </script>
@endpush
