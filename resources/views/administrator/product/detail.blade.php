@extends('administrator.layouts.main')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Product</h1>
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('admin.product') }}" class="text-muted text-hover-primary">Product</a>
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
                                        <label class="col-lg-4 fw-bold text-muted">Category</label>
                                        <div class="col-lg-8">
                                            <span class="fw-bolder fs-6 text-gray-800">{{ $product->category }}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-7">
                                        <label class="col-lg-4 fw-bold text-muted">Code</label>
                                        <div class="col-lg-8">
                                            <span class="fw-bolder fs-6 text-gray-800">{{ $product->code }}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-7">
                                        <label class="col-lg-4 fw-bold text-muted">Name</label>
                                        <div class="col-lg-8">
                                            <span class="fw-bolder fs-6 text-gray-800">{{ $product->name }}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-7">
                                        <label class="col-lg-4 fw-bold text-muted">Description</label>
                                        <div class="col-lg-8">
                                            <span class="fw-bolder fs-6 text-gray-800">@php echo $product->description @endphp</span>
                                        </div>
                                    </div>
                                    <div class="row mb-7">
                                        <label class="col-lg-4 fw-bold text-muted">Interest Rate</label>
                                        <div class="col-lg-8">
                                            <span class="fw-bolder fs-6 text-gray-800">{{ $product->interest_rate }}%</span>
                                        </div>
                                    </div>
                                    <div class="row mb-7">
                                        <label class="col-lg-4 fw-bold text-muted">Simulation</label>
                                        <div class="col-lg-8">
                                            <span class="fw-bolder fs-6 text-gray-800">{{ $product->flag }}</span>
                                        </div>
                                    </div>
                                    @if ($product->rate_flag == '1')
                                    <div class="row mb-7">
                                        <label class="col-lg-4 fw-bold text-muted">Rate</label>
                                        <div class="col-lg-8">
                                            <span class="fw-bolder fs-6 text-gray-800">Efektif</span>
                                        </div>
                                    </div>  
                                    @else
                                    <div class="row mb-7">
                                        <label class="col-lg-4 fw-bold text-muted">Rate</label>
                                        <div class="col-lg-8">
                                            <span class="fw-bolder fs-6 text-gray-800">Flat</span>
                                        </div>
                                    </div> 
                                    @endif
                                </div>
                            </div>
                        </div>
                        @if($product->image != null)
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted">Image</label>
                                <div class="col-lg-8">
                                    <img src="{{asset_administrator("assets/media/product/$product->image")}}" style="width: 300px; height: 150px;"/>
                                </div>
                            </div>
                        @endif
                        @if($product->icon != null)
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-bold text-muted">Icon</label>
                                <div class="col-lg-8">
                                    <img src="{{asset_administrator("assets/media/icon/$product->icon")}}" style="width: 300px; height: 150px;"/>
                                </div>
                            </div>
                        @endif
                        <div class="row mb-7">
                            <label class="col-lg-4 fw-bold text-muted">Status</label>
                            @if($product->status == 1)
                                <div class="col-lg-8">
                                    <span class="badge badge-success">Active</span>
                                </div>
                            @else
                                <div class="col-lg-8">
                                    <span class="badge badge-danger">Inactive</span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
