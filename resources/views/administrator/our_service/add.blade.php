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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Our Service</h1>
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
                            <a href="{{ route('admin.our_service') }}" class="text-muted text-hover-primary">Our
                                Service
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
                <form id="form_add" class="form d-flex flex-column flex-lg-row"
                    action="{{ route('admin.our_service.save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Name Service</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="title" class="form-control mb-2" placeholder="Name Service" value="" />
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
                                            <label class="required form-label">Caption Service</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="sub_title" class="form-control mb-2" placeholder="Caption Service" value="" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        {{-- <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Contact Service</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="service_contact" class="form-control mb-2" placeholder="Contact Service" value="" />
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">
                                            </div>
                                            <!--end::Description-->
                                        </div> --}}
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row color">
                                            <!--begin::Label-->
                                            <label class="form-label">Background Color</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" id="bg-color" name="color" class="form-control mb-2" placeholder="Background Color" value="" />
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
                                            <label class="form-label">Description</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <textarea name="description" id="description" class="form-control"></textarea>
                                            {{-- @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror --}}
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                        <div class="mb-10 fv-row">
                                        <label class="form-label">Media</label>
                                        <div class="overflow-auto py-2 bestresolution">
                                            <div class="notice d-flex bg-light-dark rounded border-dark border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                                <span class="svg-icon svg-icon-2tx svg-icon-dark me-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 28 28" fill="none">
                                                        <path opacity="0.3" d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z" fill="black"/>
                                                        <path d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z" fill="black"/>
                                                    </svg>
                                                </span>
                                                <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                                    <div class="mb-3 mb-md-0 fw-bold">
                                                        <h4 class="text-gray-900 fw-bolder">Best Resolution Image Display:</h4>
                                                        <div class="fs-6 text-gray-700 pe-7">
                                                            <ul class="m-0">
                                                                <li>Landscape image</li>
                                                                <li>752 X 440 px</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-preview thumbnail mb20" data-trigger="fileinput"
                                                style="width: 100%; height: 150px;"></div>
                                            <div>
                                                <a href="#" class="btn btn-light fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                <span class="btn btn-light btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="image">
                                                </span>
                                            </div>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-preview thumbnail mb20" data-trigger="fileinput"
                                                style="width: 100%; height: 300px;"></div>
                                            <div>
                                                <a href="#" class="btn btn-light fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                <span class="btn btn-light btn-file">
                                                    <span class="fileinput-new">Select image Banner</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="image_banner">
                                                </span>
                                            </div>
                                            </div>

                                    {{-- <div class="tab-pane fade" id="another_language" role="tabpanel">
                                        <!--begin::Input group-->
                                        <div class="mb-4 fv-row">
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
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Category Name (An)</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="name_an" class="form-control mb-2"
                                                placeholder="Category name" value="" />
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
                                        <input class="form-check-input" type="checkbox" value="1" id="status" name="status" checked="checked" />
                                        <label class="form-check-label fw-bold text-gray-400 ms-3" for="status">Active</label>
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
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Sub Service</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div id="product_options" class="row">
                                    <div class="variant-list col-6 mb-10" childidx="0">
                                        <div class="card card-bordered mb-10">
                                            <div class="card-header">
                                                <h3 class="card-title">Sub Service</h3>
                                                <div class="card-toolbar">
                                                    <button type="button" data-repeater-delete=""
                                                        class="btn btn-sm btn-icon btn-light-danger delete">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="7.05025" y="15.5356" width="12"
                                                                    height="2" rx="1"
                                                                    transform="rotate(-45 7.05025 15.5356)"
                                                                    fill="black" />
                                                                <rect x="8.46447" y="7.05029" width="12" height="2"
                                                                    rx="1" transform="rotate(45 8.46447 7.05029)"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="mb-10 fv-row">
                                                        <!--begin::Input group-->
                                                        <div class="mb-10 fv-row">
                                                            <!--begin::Label-->
                                                            <label class="required form-label">Sub Service</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text" name="items[0][title]"
                                                                class="form-control variant-sku mb-2" placeholder="Sub Service"
                                                                value="" />
                                                            <!--end::Input-->
                                                            <!--begin::Description-->
                                                            <div class="text-muted fs-7"></div>
                                                            <!--end::Description-->
                                                        </div>
                                                        <!--end::Input group-->
                                                    </div>
                                                    <!--begin::Input group-->
                                                    <div class="mb-10 fv-row">
                                                        <!--begin::Label-->
                                                        <label class="required form-label">Sub Description</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" name="items[0][sub_title]"
                                                            class="form-control variant-name mb-2"
                                                            placeholder="Sub Description " value="" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <div class="mb-10 fv-row">
                                                    <label class="form-label">Media</label>
                                                    <div class="overflow-auto py-2 bestresolution">
                                                        <div class="notice d-flex bg-light-dark rounded border-dark border border-dashed min-w-lg-100px flex-shrink-0 p-6">
                                                            <span class="svg-icon svg-icon-2tx svg-icon-dark me-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 28 28" fill="none">
                                                                    <path opacity="0.3" d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z" fill="black"/>
                                                                    <path d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z" fill="black"/>
                                                                </svg>
                                                            </span>
                                                            <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                                                <div class="mb-3 mb-md-0 fw-bold">
                                                                    <h4 class="text-gray-900 fw-bolder">Best Resolution Image Display:</h4>
                                                                    <div class="fs-6 text-gray-700 pe-7">
                                                                        <ul class="m-0">
                                                                            <li>Landscape image</li>
                                                                            <li>752 X 440 px</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-preview thumbnail mb20" data-trigger="fileinput"
                                                            style="width: 100%; height: 150px;"></div>
                                                        <div>
                                                            <a href="#" class="btn btn-light fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                            <span class="btn btn-light btn-file">
                                                                <span class="fileinput-new">Select image</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" name="items[0][images]">
                                                            </span>
                                                        </div>
                                                    </div>
                                                    </div>
                        
                                                    <!--begin::Input group-->
                                                    <div class="mb-10 fv-row">
                                                        <!--begin::Label-->
                                                        <label class="form-label">Status</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <div class="form-check form-switch form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value="1" id="status" name="items[0][status]" checked="checked" />
                                                            <label class="form-check-label fw-bold text-gray-400 ms-3" for="status">Active</label>
                                                        </div>
                                                        <!--end::Input-->
                                                        <!--begin::Description-->
                                                        <div class="text-muted fs-7">
                                                        </div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Editor-->
                                                    <!--end::Editor-->
                                                    {{-- <div class="row">
                                                        <div class="col-6 mb-10 fv-row">
                                                            <!--begin::Input group-->
                                                            <div class="fv-row">
                                                                <!--begin::Label-->
                                                                <label class="required form-label">Weight</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <div class="input-group mb-5">
                                                                    <input type="text" name="variants[0][weight]"
                                                                        class="form-control withseparator format-number text-end variant-weight"
                                                                        placeholder="Weight" value="" />
                                                                    <span class="input-group-text"
                                                                        id="inputGroup-sizing-sm">gram</span>
                                                                </div>
                                                                <!--end::Input-->
                                                                <!--begin::Description-->
                                                                <div class="text-muted fs-7"></div>
                                                                <!--end::Description-->
                                                            </div>
                                                            <!--end::Input group-->
                                                        </div>
                                                        <div class="col-6 mb-10 fv-row">
                                                            <!--begin::Input group-->
                                                            <div class="row">
                                                                <!--begin::Label-->
                                                                <label class="form-label">Dimensions</label>
                                                                <!--end::Label-->

                                                                <!--begin::Input-->
                                                                <div class="col-md-12 col-sm-12">
                                                                    <div class="input-group mb-5">
                                                                        <input type="text"
                                                                            name="variants[0][dimensions][length]"
                                                                            class="form-control withseparator format-number text-end variant-dimensions_length"
                                                                            placeholder="Length" value="" />
                                                                        <span class="input-group-text"
                                                                            id="inputGroup-sizing-sm">cm</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-sm-12">
                                                                    <div class="input-group mb-5">
                                                                        <input type="text"
                                                                            name="variants[0][dimensions][width]"
                                                                            class="form-control withseparator format-number text-end variant-dimensions_width"
                                                                            placeholder="Width" value="" />
                                                                        <span class="input-group-text"
                                                                            id="inputGroup-sizing-sm">cm</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-sm-12">
                                                                    <div class="input-group mb-5">
                                                                        <input type="text"
                                                                            name="variants[0][dimensions][height]"
                                                                            class="form-control withseparator format-number text-end variant-dimensions_height"
                                                                            placeholder="Height" value="" />
                                                                        <span class="input-group-text"
                                                                            id="inputGroup-sizing-sm">cm</span>
                                                                    </div>
                                                                </div>
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 mb-5 fv-row">
                                                            <!--begin::Input group-->
                                                            <div class="mb-10 fv-row">
                                                                <!--begin::Label-->
                                                                <label class="required form-label">Price</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="text" name="variants[0][price]"
                                                                    class="form-control withseparator format-number text-end variant-price mb-2"
                                                                    placeholder="Price" value="" />
                                                                <!--end::Input-->
                                                                <!--begin::Description-->
                                                                <div class="text-muted fs-7"></div>
                                                                <!--end::Description-->
                                                            </div>
                                                            <!--end::Input group-->
                                                        </div>
                                                        <div class="col-6 mb-5 fv-row">
                                                            <!--begin::Input group-->
                                                            <div class="mb-10 fv-row">
                                                                <!--begin::Label-->
                                                                <label class=" form-label">Discount Price</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="text" name="variants[0][discount_price]"
                                                                    class="form-control withseparator format-number text-end variant-price mb-2"
                                                                    placeholder="Price" value="" />
                                                                <!--end::Input-->
                                                                <!--begin::Description-->
                                                                <div class="text-muted fs-7"></div>
                                                                <!--end::Description-->
                                                            </div>
                                                            <!--end::Input group-->
                                                        </div>
                                                        <div class="col-6 mb-5 fv-row">
                                                            <!--begin::Input group-->
                                                            <div class="mb-10 fv-row">
                                                                <!--begin::Label-->
                                                                <label class="required form-label">Minimal
                                                                    Stock</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="text" name="variants[0][minimal_stock]"
                                                                    class="form-control withseparator format-number text-end variant-minimal_stock mb-2"
                                                                    placeholder="Minimal Stock" value="" />
                                                                <!--end::Input-->
                                                                <!--begin::Description-->
                                                                <div class="text-muted fs-7"></div>
                                                                <!--end::Description-->
                                                            </div>
                                                            <!--end::Input group-->
                                                        </div>
                                                        <div class="col-6 mb-5 fv-row">
                                                            <!--begin::Input group-->
                                                            <div class="mb-10 fv-row">
                                                                <!--begin::Label-->
                                                                <label class="required form-label">Stock</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="text" name="variants[0][stock]"
                                                                    class="form-control withseparator format-number text-end variant-stock mb-2"
                                                                    placeholder="Stock" value="" />
                                                                <!--end::Input-->
                                                                <!--begin::Description-->
                                                                <div class="text-muted fs-7"></div>
                                                                <!--end::Description-->
                                                            </div>
                                                            <!--end::Input group-->
                                                        </div>
                                                    </div> --}}
                                                </div>
                                                <!--end::Form group-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--begin::Form group-->
                                <div class="form-group mt-5">
                                    <button type="button" id="add_another_variation"
                                        class="btn btn-sm btn-light-primary">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1"
                                                    transform="rotate(-90 11 18)" fill="black" />
                                                <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->Add another item
                                    </button>
                                </div>
                                <!--end::Form group-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::General options-->
                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <a href="{{ route('admin.our_service') }}" id="kt_ecommerce_add_product_cancel"
                                class="btn btn-light me-5">Cancel</a>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" id="our_service_submit" class="btn btn-primary">
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
    <div class="template-variant col-6 mb-10" childidx="0" style="display: none">
        <div class="card card-bordered">
            <div class="card-header">
                <h3 class="card-title">Sub Our Service</h3>
                <div class="card-toolbar">
                    <button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger delete">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1"
                                    transform="rotate(-45 7.05025 15.5356)" fill="black" />
                                <rect x="8.46447" y="7.05029" width="12" height="2" rx="1"
                                    transform="rotate(45 8.46447 7.05029)" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <div class="mb-10 fv-row">
                        <!--begin::Input group-->
                        <div class="mb-10 fv-row">
                            <!--begin::Label-->
                            <label class="required form-label">Sub Service</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="items[0][title]"
                                class="form-control variant-sku mb-2" placeholder="Sub Service"
                                value="" />
                            <!--end::Input-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7"></div>
                            <!--end::Description-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row">
                        <!--begin::Label-->
                        <label class="required form-label">Sub Description</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" name="items[0][sub_title]"
                            class="form-control variant-name mb-2"
                            placeholder="Sub Description " value="" />
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <div class="mb-10 fv-row">
                    <label class="form-label">Media</label>
                    <div class="overflow-auto py-2 bestresolution">
                        <div class="notice d-flex bg-light-dark rounded border-dark border border-dashed min-w-lg-100px flex-shrink-0 p-6">
                            <span class="svg-icon svg-icon-2tx svg-icon-dark me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 28 28" fill="none">
                                    <path opacity="0.3" d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z" fill="black"/>
                                    <path d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z" fill="black"/>
                                </svg>
                            </span>
                            <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                <div class="mb-3 mb-md-0 fw-bold">
                                    <h4 class="text-gray-900 fw-bolder">Best Resolution Image Display:</h4>
                                    <div class="fs-6 text-gray-700 pe-7">
                                        <ul class="m-0">
                                            <li>Landscape image</li>
                                            <li>752 X 440 px</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail mb20" data-trigger="fileinput"
                            style="width: 100%; height: 150px;"></div>
                        <div>
                            <a href="#" class="btn btn-light fileinput-exists" data-dismiss="fileinput">Remove</a>
                            <span class="btn btn-light btn-file">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="items[0][images]">
                            </span>
                        </div>
                    </div>
                    </div>
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row">
                        <!--begin::Label-->
                        <label class="form-label">Status</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <div class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" id="status" name="items[0][status]" checked="checked" />
                            <label class="form-check-label fw-bold text-gray-400 ms-3" for="status">Active</label>
                        </div>
                        <!--end::Input-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7">
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Editor-->
                    <!--end::Editor-->
                    {{-- <div class="row">
                        <div class="col-6 mb-10 fv-row">
                            <!--begin::Input group-->
                            <div class="fv-row">
                                <!--begin::Label-->
                                <label class="required form-label">Weight</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div class="input-group mb-5">
                                    <input type="text" name="variants[0][weight]"
                                        class="form-control withseparator format-number text-end variant-weight"
                                        placeholder="Weight" value="" />
                                    <span class="input-group-text"
                                        id="inputGroup-sizing-sm">gram</span>
                                </div>
                                <!--end::Input-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7"></div>
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <div class="col-6 mb-10 fv-row">
                            <!--begin::Input group-->
                            <div class="row">
                                <!--begin::Label-->
                                <label class="form-label">Dimensions</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <div class="col-md-12 col-sm-12">
                                    <div class="input-group mb-5">
                                        <input type="text"
                                            name="variants[0][dimensions][length]"
                                            class="form-control withseparator format-number text-end variant-dimensions_length"
                                            placeholder="Length" value="" />
                                        <span class="input-group-text"
                                            id="inputGroup-sizing-sm">cm</span>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="input-group mb-5">
                                        <input type="text"
                                            name="variants[0][dimensions][width]"
                                            class="form-control withseparator format-number text-end variant-dimensions_width"
                                            placeholder="Width" value="" />
                                        <span class="input-group-text"
                                            id="inputGroup-sizing-sm">cm</span>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="input-group mb-5">
                                        <input type="text"
                                            name="variants[0][dimensions][height]"
                                            class="form-control withseparator format-number text-end variant-dimensions_height"
                                            placeholder="Height" value="" />
                                        <span class="input-group-text"
                                            id="inputGroup-sizing-sm">cm</span>
                                    </div>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6 mb-5 fv-row">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required form-label">Price</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="variants[0][price]"
                                    class="form-control withseparator format-number text-end variant-price mb-2"
                                    placeholder="Price" value="" />
                                <!--end::Input-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7"></div>
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <div class="col-6 mb-5 fv-row">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class=" form-label">Discount Price</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="variants[0][discount_price]"
                                    class="form-control withseparator format-number text-end variant-price mb-2"
                                    placeholder="Price" value="" />
                                <!--end::Input-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7"></div>
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <div class="col-6 mb-5 fv-row">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required form-label">Minimal
                                    Stock</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="variants[0][minimal_stock]"
                                    class="form-control withseparator format-number text-end variant-minimal_stock mb-2"
                                    placeholder="Minimal Stock" value="" />
                                <!--end::Input-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7"></div>
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <div class="col-6 mb-5 fv-row">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required form-label">Stock</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="variants[0][stock]"
                                    class="form-control withseparator format-number text-end variant-stock mb-2"
                                    placeholder="Stock" value="" />
                                <!--end::Input-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7"></div>
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->
                        </div>
                    </div> --}}
                </div>
                <!--end::Form group-->
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset_administrator('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/our_service/our_service.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/custom/documentation/documentation.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/custom/documentation/search.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/custom/documentation/forms/select2.js') }}"></script>
    <script src="{{ asset_administrator('assets/plugins/custom/form-jasnyupload/fileinput.min.js') }}"></script>
    <script src="{{ asset_administrator('ckeditor/ckeditor.js') }}"></script>

    <script type="text/javascript">

        $(function () {
        // Basic instantiation:
        $('#bg-color').colorpicker();
        
            // Example using an event, to change the color of the #demo div background:
            // $('#bg-color').on('colorpickerChange', function(event) {
            //     $('#color').css('background-color', event.color.toString());
            // });
        });
        
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

        $(document).ready(function() {
            resetData();
            resetImage();
        });

        function resetData() {

            var index = 0;
            $(".variant-list").each(function() {
                var another = this;
                search_index = $(this).attr("childidx");
                $(this).find('input,select').each(function() {
                    // console.log("this name : " + this.name);
                    // console.log('search name (' + search_index + ')')
                    // console.log('replace name [' + index + ']')
                    // console.log("----------------------------------------------------------------");
                    this.name = this.name.replace('[' + search_index + ']', '[' + index + ']');
                    $(another).attr("childidx", index);
                });

                validator.addField("items[" + index + "][title]", {
                    validators: {
                        notEmpty: {
                            message: 'Sub Service is required'
                        }
                    }
                });

                validator.addField("items[" + index + "][sub_title]", {
                    validators: {
                        notEmpty: {
                            message: 'Sub Description is required'
                        }
                    }
                });

                // validator.addField("variants[" + index + "][weight]", {
                //     validators: {
                //         notEmpty: {
                //             message: 'Weight is required'
                //         }
                //     }
                // });

                // validator.addField("variants[" + index + "][price]", {
                //     validators: {
                //         notEmpty: {
                //             message: 'Price is required'
                //         }
                //     }
                // });

                // validator.addField("variants[" + index + "][minimal_stock]", {
                //     validators: {
                //         notEmpty: {
                //             message: 'Minimal stock is required'
                //         }
                //     }
                // });

                // validator.addField("variants[" + index + "][stock]", {
                //     validators: {
                //         notEmpty: {
                //             message: 'Stock is required'
                //         }
                //     }
                // });


                $(this).find(".format-number").keydown(function(e) {
                    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 || (e.keyCode == 65 && (e
                            .ctrlKey === true || e.metaKey === true)) || (e.keyCode >= 35 && e.keyCode <=
                            40)) {
                        return;
                    }
                    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode >
                            105)) {
                        e.preventDefault();
                    }
                });

                $(this).find('.withseparator').on({
                    keyup: function() {
                        formatCurrency($(this));
                    },
                    blur: function() {
                        formatCurrency($(this), "blur");
                    }
                });

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
                            resetData()
                        }
                    });
                });

                $(this).find(".duplicate").click(function(e) {
                    Swal.fire({
                        html: 'Are you sure duplicate this data?',
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

                            var clonning = $(".template-variant").clone();
                            clonning.removeAttr("style");
                            clonning.removeClass('template-variant');
                            clonning.addClass('variant-list');
                            clonning.find(".variant-sku").val($(another).find(".variant-sku")
                                .val());
                            clonning.find(".variant-name").val($(another).find(".variant-name")
                                .val());
                            clonning.find(".variant-description").val($(another).find(
                                ".variant-description").val());
                            clonning.find(".variant-price").val($(another).find(".variant-price")
                                .val());
                            clonning.find(".variant-weight").val($(another).find(".variant-weight")
                                .val());
                            clonning.find(".variant-dimensions_length").val($(another).find(
                                ".variant-dimensions_length").val());
                            clonning.find(".variant-dimensions_width").val($(another).find(
                                ".variant-dimensions_width").val());
                            clonning.find(".variant-dimensions_height").val($(another).find(
                                ".variant-dimensions_height").val());
                            clonning.find(".variant-minimal_stock").val($(another).find(
                                ".variant-minimal_stock").val());
                            clonning.find(".variant-stock").val($(another).find(".variant-stock")
                                .val());
                            $("#product_options").append(clonning);
                            new swal("Horray!", "Data has been duplicated", "success");
                            resetData();


                        }
                    });
                });

                index++;
            });
        }

        $(document).on('click', '#add_another_variation', function(event) {
            var clonning = $(".template-variant").clone();
            clonning.removeAttr("style");
            clonning.removeClass('template-variant');
            clonning.addClass('variant-list');
            $("#product_options").append(clonning);
            resetData();
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

        $(this).find('.withseparator').on({
            keyup: function() {
                formatCurrency($(this));
            },
            blur: function() {
                formatCurrency($(this), "blur");
            }
        });

    </script>
@endpush
