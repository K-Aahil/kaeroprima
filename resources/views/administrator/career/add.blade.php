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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Career</h1>
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
                            <a href="{{ route('admin.career') }}" class="text-muted text-hover-primary">Career
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
                <form id="form_add" class="form d-flex flex-column flex-lg-row" action="{{ route('admin.career.save') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Main column-->
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>General</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Category</label>
                                    <select name="category" class="@error('career_category_id') is-invalid @enderror form-control" data-control="select2">
                                        <option value="">Please Select</option>
                                        @foreach ($categories as $row)
                                            <option value="{{ $row->id }}"> {{ $row->name }} </option>
                                        @endforeach
                                    </select>
                                    {{-- <br>@error('career_category_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror --}}
                                    <div class="text-muted fs-7">
                                    </div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Level</label>
                                    <select name="path" class="@error('career_path_id') is-invalid @enderror form-control" data-control="select2">
                                        <option value="">Please Select</option>
                                        @foreach ($paths as $row)
                                            <option value="{{ $row->id }}"> {{ $row->name }} </option>
                                        @endforeach
                                    </select>
                                    {{-- <br>@error('career_path_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror --}}
                                    <div class="text-muted fs-7">
                                    </div>
                                </div>       
                                {{-- <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#default_language">Default
                                            Language</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#another_language">Another
                                            Language</a>
                                    </li>
                                    <li>
                                    </li>
                                </ul> --}}
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="default_language" role="tabpanel">
                                        <div class="mb-10 fv-row">
                                            <label class="required form-label">Title</label>
                                            <input type="text" name="title" class="@error('title') is-invalid @enderror form-control" placeholder="Title" value="" />
                                            {{-- <br>@error('title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror --}}
                                        </div>
                                        <div class="mb-10 fv-row">
                                            <label class="required form-label">Location</label>
                                            <input type="text" name="location" class="@error('location') is-invalid @enderror form-control" placeholder="Location" value="" />
                                            {{-- <br>@error('location')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror --}}
                                        </div>
                                        <div class="mb-10 fv-row">
                                            <label class="form-label">Description</label>
                                            <textarea name="description" id="description" class="@error('description') is-invalid @enderror form-control"></textarea>
                                            {{-- <br>@error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror --}}
                                            <div class="text-muted fs-7">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="tab-pane fade" id="another_language" role="tabpanel">
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <div class="d-flex">
                                                <div class="form-check form-check-custom form-check-solid form-check-sm">
                                                    <input class="form-check-input" type="checkbox" name="same_as_default"
                                                        value="1" id="sameasdefault" />
                                                    <label class="form-check-label" for="sameasdefault">
                                                        Same as default
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Title (An)</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="title_an" class="form-control mb-2" placeholder="Title"
                                                value="" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Description (An)</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <textarea name="description_an" id="description_an"
                                                class="description"></textarea>
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                    </div> --}}
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="form-label">Status</label>
                                    <div class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" id="status" name="status"
                                            checked="checked" />
                                        <label class="form-check-label fw-bold text-gray-400 ms-3"
                                            for="status">Active</label>
                                    </div>
                                    <div class="text-muted fs-7">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('admin.career') }}" id="kt_ecommerce_add_product_cancel"
                                class="btn btn-light me-5">Cancel</a>
                            <button type="submit" id="career_submit" class="btn btn-primary">
                                <span class="indicator-label">Save</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    </div>
                    <!--end::Main column-->
                </form>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
@endsection

@push('scripts')
    <script src="{{ asset_administrator('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/career/career.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/custom/documentation/documentation.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/custom/documentation/search.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/custom/documentation/forms/select2.js') }}"></script>
    <script src="{{ asset_administrator('assets/plugins/custom/form-jasnyupload/fileinput.min.js') }}"></script>
    <script src="{{ asset_administrator('ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        const url = `{!! url('/') !!}`;
        $(document).ready(function() {

            $('#embed').click(function (e) {
                // console.log('embed');
                $('.fileinput').hide();
                $('.fileembeded').show();
                $('.bestresolution').hide();
            });

            $('#upload').click(function (e) {
                // console.log('upload');
                $('.fileembeded').hide();
                $('.fileinput').show();
                $('.bestresolution').show();
            });
            CKEDITOR.replace('description');
        });
    </script>
@endpush
