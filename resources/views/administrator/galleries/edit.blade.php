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
                        <li class="breadcrumb-item text-dark">Form</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                </div>
            </div>
        </div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <form class="form d-flex flex-column flex-lg-row" id="form" method="POST" enctype="multipart/form-data" action="{{ route('admin.galleries.update', $edit->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>General</h2>
                                </div>
                            </div>
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
                                            <input type="text" name="name" class="form-control mb-2" placeholder="Judul Album" value="{{ $edit->name }}"/>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="another_language" role="tabpanel">
                                        <div class="form-check form-check-custom form-check-solid py-3">
                                            <input class="form-check-input" type="checkbox" value="1" id="status" name="same_as_default" @if($edit->same_as_default == 1) checked="checked" @endif />
                                            <label class="form-check-label fw-bold text-gray-400 ms-3" for="status">Same As Default</label>
                                        </div>
                                        <div class="fv-row py-3">
                                            <label class="form-label">Judul Album (An)</label>
                                            <input type="text" name="name_an" class="form-control mb-2" placeholder="Judul Album An" value="{{ $edit->name_an }}"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="fv-row">
                                    <label class="required form-label">Status</label>
                                    <div class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" id="status"
                                                name="status" {{ $edit->status ? 'checked="checked"' : '' }} />
                                        <label class="form-check-label fw-bold text-gray-400 ms-3"
                                            for="status">Active</label>
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
                                    <div class="overflow-auto pb-3">
                                        <div class="notice d-flex bg-light-dark rounded border-dark border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                            <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                            <div class="ms-4">
                                                <label for="image" class="custom-file-upload">Upload Gambar</label>
                                                <input id="images" multiple name="images[]" type="file"/>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="image_delete" id="image_delete">
                                    <div id="product_media">
                                        @foreach ($edit->images as $image)
                                            <span class="pip" style="display: inline-block; margin: 10px 10px 0 0;">
                                                <img class="thumbnail" style="max-height: 75px; border: 2px solid; padding: 1px; cursor: pointer;" src="{{ asset_administrator("assets/media/gallery/".$image->image) }}">
                                                <br>
                                                <button type="button" class="btn-danger mt-2 image_delete" data-ix="{{ $image->id }}" style="display: block; text-align: center; cursor: pointer; border-radius: 5px; width:90px;">Hapus</button>
                                            </span>
                                        @endforeach
                                    </div>
                                    <br><br>
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set the galleries media gallery.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::Media-->
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('admin.galleries') }}" class="btn btn-light me-5">Cancel</a>
                            <button type="submit" id="gallery_submit" class="btn btn-primary">
                                <span class="indicator-label">Save</span>
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
    <script src="{{ asset_administrator('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/custom/apps/ecommerce/catalog/gallery.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/custom/documentation/documentation.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/custom/documentation/search.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/custom/documentation/forms/select2.js') }}"></script>
    <script src="{{ asset_administrator('assets/plugins/custom/form-jasnyupload/fileinput.min.js') }}"></script>
    
    <script type="text/javascript">

    $(document).ready(function() {
            $(document).find(".image_delete").click(function(e) {
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
                            var ix = $(this).data('ix');
                            $(this).parent(".pip").remove();
                            var image_delete = $("#image_delete").val();
                            if (image_delete != "") {
                                image_delete += "," + ix;
                            } else {
                                image_delete += ix;
                            }
                            $("#image_delete").val(image_delete)
                            new swal("Horray!", "Data has been deleted.", "success");
                        }
                    });
                });

        });

    

    $(document).ready(function() {
        if (window.File && window.FileList && window.FileReader) {
            $("#images").on("change", function(e) {
            const files = e.target.files,
                filesLength = files.length;
            for (let i = 0; i < filesLength; i++) {
                let f = files[i]
                let fileReader = new FileReader();
                fileReader.onload = (function(e) {
                    let file = e.target;
                    $("<span class=\"pip\" style=\"display: inline-block; margin: 10px 10px 0 0;\" >" +
                        "<img class=\"thumbnail\" style=\"max-height: 75px; border: 2px solid; padding: 1px; cursor: pointer;\" src=\"" + e.target.result + "\"/>" +
                        "<button class=\"remove btn-danger mt-2\" style=\"display: block; text-align: center; cursor: pointer; border-radius: 5px; width:90px;\" >Hapus</button>" +
                        "</span>").insertAfter("#product_media");
                    $(".remove").click(function(){
                        $(this).parent(".pip").remove();
                    });
                });
                fileReader.readAsDataURL(f);
            }
            console.log(files);
            });
        } else {
            Swal.fire( 'Browser Tidak Support !', 'error' )
        }
    });        

    </script>  
    {{-- @isset ($edit->images)
    <script>
        $('.image-delete').click(function (e) {
            e.preventDefault();
            $(this).parent(".pip").remove();
        });
    </script>
    @endisset   --}}
@endpush
