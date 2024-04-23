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
                            <a href="{{ route('admin.our_service') }}" class="text-muted text-hover-primary">Our Service</a>
                        </li>
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">Detail</li>
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
                    action="{{ route('admin.our_service.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                    <input type="hidden" name="id" class="form-control mb-2" placeholder="ID" value="{{ $detail->id }}" />
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
                                            <label class="required form-label">Title</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="title" class="form-control mb-2" placeholder="Title" value="{{ $detail->title }}" disabled/>
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
                                            <input type="text" name="sub_title" class="form-control mb-2" placeholder="Sub Title" value="{{ $detail->sub_title }}" disabled/>
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
                                            <label class="required form-label">Service Contact</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="service_contact" class="form-control mb-2" placeholder="Service Contact" value="{{ $detail->service_contact }}" disabled/>
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
                                            <input type="text" id="bg-color" name="color" class="form-control mb-2" placeholder="Background Color " value="{{ $detail->color }}" disabled/>
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
                                            <textarea name="description" id="description" class="description" disabled>{!! $detail->description !!}</textarea>
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
                                                        {{-- @foreach ($detail as $image) --}}
                                                            <!--begin::Image input-->
                                                            <div class="image-list image-input image-input-outline mr-5"
                                                                data-kt-image-input="true"
                                                                style="background-image: url('{{ asset_administrator("assets/media/our_service/".$detail->image) }}')">
                                                                <!--begin::Image preview wrapper-->
                                                                <div class="image-input-wrapper w-125px h-125px"
                                                                    style="background-image: url('{{ asset_administrator("assets/media/our_service/".$detail->image) }}')">
                                                                </div>
                                                                <!--end::Image preview wrapper-->
                                                            </div>
                                                            <!--end::Image input-->
                                                        {{-- @endforeach --}}
                                                    </div>

                                                    <br>
                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Set the our service.</div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Card header-->
                                            </div>
                                            <!--end::Media-->
                                        </div>
                                        <div class="mb-10 fv-row">
                                        <!--begin::Media-->
                                            <div class="card card-flush py-4">
                                                <!--begin::Card header-->
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        <h2>Media Banner</h2>
                                                    </div>
                                                </div>
                                                <!--end::Card header-->
                                                <!--begin::Card body-->
                                                <div class="card-body pt-0">
                                                    <input type="hidden" name="image_delete" id="image_delete">
                                                    <div id="product_media">
                                                        {{-- @foreach ($detail as $image) --}}
                                                            <!--begin::Image input-->
                                                            <div class="image-list image-input image-input-outline mr-5"
                                                                data-kt-image-input="true"
                                                                style="background-image: url('{{ asset_administrator("assets/media/our_service/".$detail->image_banner) }}')">
                                                                <!--begin::Image preview wrapper-->
                                                                <div class="image-input-wrapper w-400px h-200px"
                                                                    style="background-image: url('{{ asset_administrator("assets/media/our_service/".$detail->image_banner) }}')">
                                                                </div>
                                                                <!--end::Image preview wrapper-->
                                                            </div>
                                                            <!--end::Image input-->
                                                        {{-- @endforeach --}}
                                                    </div>

                                                    <br>
                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Set the our service.</div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Card header-->
                                            </div>
                                            <!--end::Media-->
                                        </div>
                                    </div>

                                    {{-- <div class="tab-pane fade" id="another_language" role="tabpanel">
                                        <!--begin::Input group-->
                                        <div class="mb-4 fv-row">
                                            <div class="d-flex">
                                                <div class="form-check form-check-custom form-check-solid form-check-sm">
                                                    <input class="form-check-input" type="checkbox" name="same_as_default"
                                                        value="1" id="sameasdefault" {{ $detail->same_as_default == 1 ? 'checked' : '' }}/>
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
                                                placeholder="Category name" value="{{ $detail->name_an }}" />
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
                                            {{ $detail->status ? 'checked="checked"' : '' }} disabled/>
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
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Doctor's Schedule</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                @if (isAllowed('doctor_schedules', 'add'))
                                    <a href="{{ route('admin.doctor_schedules.add', ["service_id" => $detail->id]) }}"
                                        class="btn btn-sm btn-light-primary">
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                                    transform="rotate(-90 11.364 20.364)" fill="black" />
                                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                            </svg>
                                        </span>
                                        Add Data
                                    </a>
                                @endif
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="default_language" role="tabpanel">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr class="head">
                                                        {{-- <th></th> --}}
                                                        <th>Nama Dokter</th>
                                                        <th>Senin</th>
                                                        <th>Selasa</th>
                                                        <th>Rabu</th>
                                                        <th>Kamis</th>
                                                        <th>Jum'at</th>
                                                        <th>Sabtu</th>
                                                        <th>Minggu</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($detail->doctor_schedules as $item)
                                                    <tr>
                                                        {{-- <td>
                                                            <img src="{{ asset_frontpage('assets/images/dr-delvina.png') }}" alt="Dr Delvina">
                                                        </td> --}}
                                                        <td>{{ $item->doctor->name }}</td>
                                                        <td>{{ $item->monday }}</td>
                                                        <td>{{ $item->tuesday }}</td>
                                                        <td>{{ $item->wednesday }}</td>
                                                        <td>{{ $item->thursday }}</td>
                                                        <td>{{ $item->friday }}</td>
                                                        <td>{{ $item->saturday }}</td>
                                                        <td>{{ $item->sunday }}</td>
                                                        <td>
                                                            <a href="{{ route('admin.doctor_schedules.edit', $item->id) }}">Edit</a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Tab Content-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Item Our Service</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div id="product_options" class="row">
                                    <?php $index = 0; ?>
                                        @foreach ($detail->items as $detail)
                                    <div class="variant-list col-6 mb-10" childidx="{{ $index }}">
                                        <div class="card card-bordered mb-10">
                                            <div class="card-header">
                                                <h3 class="card-title">Detail Our Service</h3>
                                                <div class="card-toolbar">
                                                    {{-- <button type="button" data-repeater-delete=""
                                                        class="btn btn-sm btn-icon btn-light-danger delete" data-ix="{{ $detail->id }}">
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
                                                    </button> --}}
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="mb-10 fv-row">
                                                        <!--begin::Input group-->
                                                        <div class="mb-10 fv-row">
                                                            <!--begin::Label-->
                                                            <label class="required form-label">Title</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="hidden"
                                                                name="items[{{ $index }}][id]"
                                                                class="form-control variant-id mb-2"
                                                                placeholder="ID" value="{{ $detail->id }}" disabled/>

                                                            <input type="text"
                                                                name="items[{{ $index }}][title]"
                                                                class="form-control variant-sku mb-2"
                                                                placeholder="Title" value="{{ $detail->title }}" disabled/>
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
                                                        <label class="required form-label">Sub Title</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text"
                                                            name="items[{{ $index }}][sub_title]"
                                                            class="form-control variant-name mb-2"
                                                            placeholder="Sub Title"
                                                            value="{{ $detail->sub_title }}" disabled/>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <div class="mb-10 fv-row">
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
                                                                    {{-- @foreach ($detail as $image) --}}
                                                                        <!--begin::Image input-->
                                                                        <div class="image-list image-input image-input-outline mr-5"
                                                                            data-kt-image-input="true"
                                                                            style="background-image: url('{{ asset_administrator("assets/media/our_service_item/".$detail->image) }}')">
                                                                            <!--begin::Image preview wrapper-->
                                                                            <div class="image-input-wrapper w-125px h-125px"
                                                                                style="background-image: url('{{ asset_administrator("assets/media/our_service_item/".$detail->image) }}')">
                                                                            </div>
                                                                            <!--end::Image preview wrapper-->
                                                                        </div>
                                                                        <!--end::Image input-->
                                                                    {{-- @endforeach --}}
                                                                </div>

                                                                <br>
                                                                <!--begin::Description-->
                                                                <div class="text-muted fs-7">Set the our service.</div>
                                                                <!--end::Description-->
                                                            </div>
                                                            <!--end::Card header-->
                                                        </div>
                                                        <!--end::Media-->
                                                    </div>
                                                    <!--begin::Input group-->
                                                    <div class="mb-10 fv-row">
                                                        <!--begin::Label-->
                                                        <label class="form-label">Status</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <div class="form-check form-switch form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value="1" id="status" name="items[{{ $index }}][status]" {{ $detail->status ? 'checked="checked"' : '' }} disabled/>
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
                                    <?php $index++; ?>
                                    @endforeach
                                </div>
                                <!--begin::Form group-->
                                {{-- <div class="form-group mt-5">
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
                                </div> --}}
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
                <h3 class="card-title">Detail Our Service</h3>
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
                            <label class="required form-label">Title</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="hidden"
                                name="items[{{ $index }}][id]"
                                class="form-control variant-id mb-2"
                                placeholder="ID" value="{{ $detail->id }}" />

                            <input type="text"
                                name="items[{{ $index }}][title]"
                                class="form-control variant-sku mb-2"
                                placeholder="Title" value="{{ $detail->title }}" disabled/>
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
                        <label class="required form-label">Sub Title</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text"
                            name="items[{{ $index }}][sub_title]"
                            class="form-control variant-name mb-2"
                            placeholder="Sub Title"
                            value="{{ $detail->sub_title }}" disabled/>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <div class="mb-10 fv-row">
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
                                    {{-- @foreach ($detail as $image) --}}
                                        <!--begin::Image input-->
                                        <div class="image-list image-input image-input-outline mr-5"
                                            data-kt-image-input="true"
                                            style="background-image: url('{{ asset_administrator("assets/media/our_service_item/".$detail->image) }}')">
                                            <!--begin::Image preview wrapper-->
                                            <div class="image-input-wrapper w-125px h-125px"
                                                style="background-image: url('{{ asset_administrator("assets/media/our_service_item/".$detail->image) }}')">
                                            </div>
                                            <!--end::Image preview wrapper-->
                                        </div>
                                        <!--end::Image input-->
                                    {{-- @endforeach --}}
                                </div>

                                <br>
                                <!--begin::Description-->
                                <div class="text-muted fs-7">Set the our service.</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::Media-->
                    </div>
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row">
                        <!--begin::Label-->
                        <label class="form-label">Status</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <div class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" id="status" name="items[{{ $index }}][status]" {{ $detail->status ? 'checked="checked"' : '' }} disabled/>
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
    <script src="{{ url('administrator\ckeditor\ckeditor.js') }}"></script>

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
            CKEDITOR.replace('description',{
                filebrowserBrowseUrl : url+'/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
                filebrowserUploadUrl : url+'/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
                filebrowserImageBrowseUrl : url+'/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
            });
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

                validator.addField("variants[" + index + "][sku]", {
                    validators: {
                        notEmpty: {
                            message: 'SKU is required'
                        }
                    }
                });

                validator.addField("variants[" + index + "][name]", {
                    validators: {
                        notEmpty: {
                            message: 'Name is required'
                        }
                    }
                });

                validator.addField("variants[" + index + "][weight]", {
                    validators: {
                        notEmpty: {
                            message: 'Weight is required'
                        }
                    }
                });

                validator.addField("variants[" + index + "][price]", {
                    validators: {
                        notEmpty: {
                            message: 'Price is required'
                        }
                    }
                });

                validator.addField("variants[" + index + "][minimal_stock]", {
                    validators: {
                        notEmpty: {
                            message: 'Minimal stock is required'
                        }
                    }
                });

                validator.addField("variants[" + index + "][stock]", {
                    validators: {
                        notEmpty: {
                            message: 'Stock is required'
                        }
                    }
                });


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
