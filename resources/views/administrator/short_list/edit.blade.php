@extends('administrator.layouts.main')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Our Services</h1>
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('short-list.index') }}" class="text-muted text-hover-primary">Our Services</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-dark">Edit</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <form class="form d-flex flex-column flex-lg-row" id="form_add" method="post" enctype="multipart/form-data" action="{{ route('short-list.update', $short_list->id) }}">
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
                                <div class="fv-row py-3">
                                    <label class="form-label required">Code</label>
                                    <input type="text" name="code" class="form-control mb-2" placeholder="Code" value="{{ $short_list->code }}"/>
                                </div>
                                <div class="fv-row py-3">
                                    <label class="form-label required">Name</label>
                                    <input type="text" name="name" class="form-control mb-2" placeholder="Name" value="{{ $short_list->name }}"/>
                                </div>
                                <div class="fv-row py-3">
                                    <label class="form-label required">Description</label>
                                    <textarea name="description" class="description ckeditor" id="description">{{ $short_list->description }}</textarea>
                                </div>
                                <div class="overflow-auto py-2">
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
                                                        <li>105 X 100 px</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <label class="form-label mt-3">Image</label>
                                </div>
                                <div class="fileinput fileinput-new fv-row" data-provides="fileinput">
                                    <div class="fileinput-preview thumbnail mb20" data-trigger="fileinput"
                                        style="width: 100%; height: 150px;"><img src="{{asset_administrator("assets/media/short/$short_list->image")}}"></div>
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
                            <div class="card-body pt-0">
                                <div class="fv-row">
                                    <label class="form-label">Status</label>
                                    <div class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" id="status" name="status" @if($short_list->status == 1) checked="checked" @endif />
                                        <label class="form-check-label fw-bold text-gray-400 ms-3" for="status">Active</label>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('short-list.index') }}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                                <button type="submit" id="short_list_submit" class="btn btn-primary me-5">
                                    <span class="indicator-label">Save</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset_administrator('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    {{-- <script src="{{ asset_administrator('assets/js/custom/short_list.js') }}"></script> --}}
    <script src="{{ asset_administrator('assets/js/custom/documentation/documentation.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/custom/documentation/search.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/custom/documentation/forms/select2.js') }}"></script>
    <script src="{{ asset_administrator('assets/plugins/custom/form-jasnyupload/fileinput.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            const form = document.getElementById("form_add");
                var validator = FormValidation.formValidation(form, {
                    fields: {
                        code: {
                            validators: {
                                notEmpty: {
                                    message: "Code is required",
                                },
                                remote: {
                                    message: "Code has beed used",
                                    method: "POST",
                                    url: "{{ route('admin.short-list.isExistKode') }}",
                                    data: function(){
                                        return {
                                            _token: "{{ csrf_token() }}",
                                            id: "{{ $short_list->id }}",
                                        }
                                    }
                                }
                            },
                        },
                        name: {
                            validators: {
                                notEmpty: {
                                    message: 'Name is required'
                                }
                            }
                        },
                        description: {
                            validators: {
                                callback: {
                                    message: 'Description is required',
                                    callback: function(input) {
                                        const value = CKEDITOR.instances.description.getData();

                                        return (value !== '')
                                                // The field is valid if user picks
                                                // a given framework from the list
                                                ? true
                                                // Otherwise, the field value is required
                                                : false;
                                    }
                                }
                            }
                        },
                    },
    
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "is-invalid",
                            eleValidClass: "",
                        }),
                    },
                });
                const submitButton = document.getElementById("short_list_submit");
                submitButton.addEventListener("click", function (e) {
                    e.preventDefault();
                    if (validator) {
                        validator.validate().then(function (status) {
                            
                            if (status == "Valid") {
                                console.log("validated!");
                                submitButton.setAttribute("data-kt-indicator", "on");
    
                                submitButton.disabled = true;
    
                                setTimeout(function () {
                                    submitButton.removeAttribute("data-kt-indicator");
    
                                    submitButton.disabled = false;
    
                                    form.submit();
                                }, 2000);
                            }
                        });
                    }
                });
        });
    </script>
@endpush
