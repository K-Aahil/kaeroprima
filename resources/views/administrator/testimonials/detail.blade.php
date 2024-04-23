@extends('administrator.layouts.main')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Testimonials</h1>
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('admin.testimonials') }}" class="text-muted text-hover-primary">Testimonials</a>
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
                        <div class="row">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="default_language" role="tabpanel">
                                    <div class="row mb-7">
                                        <label class="col-lg-4 fw-bold text-muted">Name</label>
                                        <div class="col-lg-8">
                                            <span class="fw-bolder fs-6 text-gray-800">{{ $testimonials->name }}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-7">
                                        <label class="col-lg-4 fw-bold text-muted">Job title</label>
                                        <div class="col-lg-8">
                                            <span class="fw-bolder fs-6 text-gray-800">{{ $testimonials->customer_position }}</span>
                                        </div>
                                    </div>
                                    {{-- <div class="row mb-7">
                                        <label class="col-lg-4 fw-bold text-muted">Rating</label>
                                        <div class="col-lg-8">
                                            <span class="fw-bolder fs-6 text-gray-800">{{ $testimonials->rating }}</span>
                                        </div>
                                    </div> --}}
                                    <div class="row mb-7">
                                        <label class="col-lg-4 fw-bold text-muted">Testimonial</label>
                                        <div class="col-lg-8">
                                            <span class="fw-bolder fs-6 text-gray-800">{{ strip_tags($testimonials->testimoni) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if($testimonials->image != null)
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted">Image</label>
                                <div class="col-lg-8">
                                    <img class="col-lg-12" src="{{asset_administrator("assets/media/testimonials/$testimonials->image")}}" style="width: 300px; height: 150px;"/>
                                </div>
                            </div>
                        @endif
                        {{-- <div class="row mb-7">
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="w-20px pe-2">
                                    No
                                </th>
                                <th class="min-w-100px">Category Name</th>
                                <th class="min-w-100px">Status</th>
                                <th class="min-w-70px">Actions</th>
                            </tr>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset_administrator('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/custom/apps/ecommerce/catalog/kata_sambutan.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/custom/documentation/documentation.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/custom/documentation/search.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/custom/documentation/forms/select2.js') }}"></script>
@endpush
