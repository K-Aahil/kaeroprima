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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Our Promo</h1>
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
                            <a href="{{ route('admin.our_promo') }}" class="text-muted text-hover-primary">Our Promo</a>
                        </li>
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">Edit</li>
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
                <form id="form_add" class="form d-flex flex-column flex-lg-row"
                    action="{{ route('admin.our_promo.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                    <input type="hidden" name="id" class="form-control mb-2" placeholder="ID" value="{{ $edit->id }}" />
                    <!--begin::Main column-->
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <!--begin::General options-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>General</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">

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
                                <!--begin::Tab Content-->
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="default_language" role="tabpanel">
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Service</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select name="service" class="form-select" data-control="select2">
                                                <option value="">Please Select</option>
                                                @foreach ($services as $row)
                                                    {
                                                    <option value="{{ $row->id }}" {{ $row->id == $edit->our_service_id ? 'selected' : '' }}> {{ $row->title }} </option>
                                                @endforeach
                                            </select>
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Title</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="title" class="form-control mb-2" placeholder="Title" value="{{ $edit->title }}" />
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
                                            <label class="required form-label">Sub Title</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="sub_title" class="form-control mb-2" placeholder="Sub Title" value="{{ $edit->sub_title }}" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label">Price</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="price" class="form-control money mb-2" placeholder="Price" value="{{ $edit->price }}" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label">Discount Price</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="discount_price" class="form-control money mb-2" placeholder="Discount Price" value="{{ $edit->discount_price }}" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label">Information</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="information" class="form-control mb-2" placeholder="Information" value="{{ $edit->information }}" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label">Description</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <textarea name="description" id="description" class="form-control">{!! $edit->description !!}</textarea>
                                            {{-- @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror --}}
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                    </div>

                                    {{-- <div class="tab-pane fade" id="another_language" role="tabpanel">
                                        <!--begin::Input group-->
                                        <div class="mb-4 fv-row">
                                            <div class="d-flex">
                                                <div class="form-check form-check-custom form-check-solid form-check-sm">
                                                    <input class="form-check-input" type="checkbox" name="same_as_default"
                                                        value="1" id="sameasdefault" {{ $edit->same_as_default == 1 ? 'checked' : '' }}/>
                                                    <label class="form-check-label" for="sameasdefault">
                                                        Same as default
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Category Name (An)</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="name_an" class="form-control mb-2"
                                                placeholder="Category name" value="{{ $edit->name_an }}" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                    </div> --}}

                                </div>
                                <!--end::Tab Content-->


                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="form-label">Status</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" id="status" name="status"
                                            {{ $edit->status ? 'checked="checked"' : '' }} />
                                        <label class="form-check-label fw-bold text-gray-400 ms-3"
                                            for="status">Active</label>
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->

                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::General options-->
                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <a href="{{ route('admin.our_promo') }}" id="kt_ecommerce_add_product_cancel"
                                class="btn btn-light me-5">Cancel</a>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" id="our_promo_submit" class="btn btn-primary">
                                <span class="indicator-label">Save</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
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
    <script src="{{ asset_administrator('assets/js/our_promo/our_promo.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/custom/documentation/documentation.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/custom/documentation/search.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/custom/documentation/forms/select2.js') }}"></script>
    <script src="{{ asset_administrator('assets/plugins/custom/form-jasnyupload/fileinput.min.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/plugins.number.js') }}"></script>
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

        $('.money').number(true, 0);
    </script>
@endpush
