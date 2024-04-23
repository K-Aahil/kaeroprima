@extends('administrator.layouts.main')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Gallery</h1>
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('admin.galleries') }}" class="text-muted text-hover-primary">Gallery</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-dark">Detail</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                </div>
            </div>
        </div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <div class="card mb-5 mb-xl-10">
                    <div class="card-header cursor-pointer">
                        <div class="card-title m-0">
                            <h3 class="fw-bolder m-0">Detail</h3>
                        </div>
                    </div>
                    <div class="card-body p-9">
                        <div class="card-body pt-0">
                            <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#default_language">Default Language</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#another_language">Another Language</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="default_language" role="tabpanel">
                                    <div class="fv-row py-3">
                                        <label class="form-label required">Judul Album</label>
                                        <input type="text" name="name" class="form-control mb-2" placeholder="Judul Album" value="{{ $detail->name }}" disabled/>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="another_language" role="tabpanel">
                                    <div class="form-check form-check-custom form-check-solid py-3">
                                        <input class="form-check-input" type="checkbox" value="1" id="status" name="same_as_default" @if($detail->same_as_default == 1) checked="checked" @endif disabled/>
                                        <label class="form-check-label fw-bold text-gray-400 ms-3" for="status">Same As Default</label>
                                    </div>
                                    <div class="fv-row py-3">
                                        <label class="form-label">Judul Album (An)</label>
                                        <input type="text" name="name_an" class="form-control mb-2" placeholder="Judul Album An" value="{{ $detail->name_an }}" disabled/>
                                    </div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="col-lg-4 fw-bold text-muted">Status</label>
                                    <div class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" id="status" name="status"
                                            {{ $detail->status ? 'checked="checked"' : '' }} disabled/>
                                        <label class="form-check-label fw-bold text-gray-400 ms-3" for="status">Active</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--begin::Media-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Media</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <input type="hidden" name="image_delete" id="image_delete">
                                <div id="product_media">
                                    @foreach ($detail->images as $image)
                                        <!--begin::Image input-->
                                        <div class="image-list image-input image-input-outline mr-5"
                                            data-kt-image-input="true"
                                            style="background-image: url('{{ asset_administrator("assets/media/gallery/".$image->image) }}')">
                                            <!--begin::Image preview wrapper-->
                                            <div class="image-input-wrapper w-125px h-125px"
                                                style="background-image: url('{{ asset_administrator("assets/media/gallery/".$image->image) }}')">
                                            </div>
                                            <!--end::Image preview wrapper-->
                                        </div>
                                        <!--end::Image input-->
                                    @endforeach
                                </div>

                                <br>
                                <!--begin::Description-->
                                <div class="text-muted fs-7">Set the galleries media gallery.</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::Media-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset_administrator('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/custom/pages.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/custom/documentation/documentation.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/custom/documentation/search.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/custom/documentation/forms/select2.js') }}"></script>
    <script src="{{ asset_administrator('assets/plugins/custom/form-jasnyupload/fileinput.min.js') }}"></script>
    <script src="{{ asset_administrator('assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>
    <script type="text/javascript">

       $(document).on('click', '#add_another_image', function(event) {
            var clonning = $(".template-image").clone();
            clonning.removeAttr("style");
            clonning.removeClass('template-image');
            clonning.addClass('image-list');
            $("#product_media").append(clonning);
            var media = $("#product_media .image-list").length;
            if (media == 5) {
                console.log("do this");
                $('#add_another_image').attr('disabled', 'disabled');
            }
            resetImage()
        });
        
        function resetImage() {

            var index = 0;
            $(".image-list").each(function() {
                var another = this;
                $(this).find(".delete").click(function(e) {
                    Swal.fire({
                        html: 'Are you sure delete this data?',
                        icon: "info",
                        buttonsStyling: false,
                        showCancelButton: true,
                        confirmButtonText: "Ok, got it!",
                        cancelButtonText: 'Nope, cancel it',
                        customClass: {
                            confirmButton: "btn btn-primary",
                            cancelButton: 'btn btn-danger'
                        }
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $(another).remove();
                            new swal("Horray!", "Data has been deleted.", "success");
                            resetImage()
                        }
                    });
                });

            });
        }

    </script>    
@endpush

