@extends('administrator.layouts.main')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Settings</h1>
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-dark">General</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <form id="form_add" class="form d-flex flex-column flex-lg-row"
                    action="{{ route('admin.settings.updateGeneral') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>General</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Site Name</label>
                                    <input type="text" name="site_name" class="form-control mb-2" placeholder="Site Name" value="{{ array_key_exists("site_name",$settings)?$settings["site_name"]:"" }}" />
                                    <div class="text-muted fs-7"></div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">E-mail</label>
                                    <input type="text" name="email" class="form-control mb-2" placeholder="E-mail" value="{{ array_key_exists("email",$settings)?$settings["email"]:"" }}" />
                                    <div class="text-muted fs-7"></div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Address</label>
                                    <!-- <input type="text" name="address" class="form-control mb-2" placeholder="Address" value="{{ !empty($address) ? $address->detail : '' }}" /> -->
                                    <textarea name="address" id="address" class="address" placeholder="address">{{ !empty($address) ? $address->detail : '' }}</textarea>
                                    <div class="text-muted fs-7"></div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="form-label">Phone</label>
                                    <input type="text" name="phone" class="form-control mb-2" placeholder="Phone" value="{{ array_key_exists("phone",$settings)?$settings["phone"]:"" }}" />
                                    <div class="text-muted fs-7"></div>
                                </div>
                                {{-- <div class="mb-10 fv-row">
                                    <label class="form-label">Whatsapp</label>
                                    <input type="text" name="whatsapp" class="form-control mb-2" placeholder="Whatsapp" value="{{ array_key_exists("whatsapp",$settings)?$settings["whatsapp"]:"" }}" />
                                    <div class="text-muted fs-7"></div>
                                </div> --}}
                                {{-- <div class="mb-10 fv-row">
                                    <label class="form-label">Office Hours</label>
                                    <textarea type="text" name="office_hours" class="ckeditor mb-2" placeholder="Office Hours">{{ array_key_exists("office_hours",$settings)?$settings["office_hours"]:"" }}</textarea>
                                    <div class="text-muted fs-7"></div></textarea>
                                </div> --}}
                                <div class="mb-10 fv-row">
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
                                                            <li>Portrait image</li>
                                                            <li>200 X 40 px</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <label class="form-label">Logo For Navbar</label><br>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 150px;">
                                            <img src="{{ array_key_exists("logo_navbar", $settings)? img_src($settings["logo_navbar"], "logo_navbar"):"" }}">
                                        </div>
                                        <div>
                                            <a href="#" class="btn btn-light fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            <span class="btn btn-light btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="logo_navbar">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-muted fs-7">
                                    </div>
                                </div>
                                <div class="mb-10 fv-row">
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
                                                            <li>Portrait image</li>
                                                            <li>180 X 90 px</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <label class="form-label">Logo For Footer</label><br>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 150px;">
                                            <img src="{{ array_key_exists("logo_footer", $settings)? img_src($settings["logo_footer"], "logo_footer"):"" }}">
                                        </div>
                                        <div>
                                            <a href="#" class="btn btn-light fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            <span class="btn btn-light btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="logo_footer">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-muted fs-7">
                                    </div>
                                </div>
                                {{-- <div class="mb-10 fv-row">
                                    <label class="form-label">Logo For Footer</label><br>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 150px;">
                                            <img src="{{ array_key_exists("logo",$settings)? img_src($settings["logo"], "logo"):"" }}">
                                        </div>
                                        <div>
                                            <a href="#" class="btn btn-light fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            <span class="btn btn-light btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="logo">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-muted fs-7">
                                    </div>
                                </div> --}}
                                <div class="mb-10 fv-row">
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
                                                                <li>Portrait image</li>
                                                                <li>60 X 60 px</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <label class="form-label">Favicon</label><br>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 150px;">
                                            <img src="{{ array_key_exists("favicon",$settings)? img_src($settings["favicon"], "favicon"):"" }}">
                                        </div>
                                        <div>
                                            <a href="#" class="btn btn-light fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            <span class="btn btn-light btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="favicon">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-muted fs-7">
                                    </div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <div class="" data-kt-ecommerce-catalog-add-product="auto-options">
                                        <label class="form-label">Daftar Penerima Email</label>
                                        <div id="kt_ecommerce_add_email_options">
                                        </div>
                                        <div class="form-group mt-5 mb-5">
                                            <button type="button" data-repeater-create="" class="add-email btn btn-sm btn-light-primary">
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="black" />
                                                        <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                    </svg>
                                                </span>Tambah Email
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="mb-10 fv-row">
                                    <div class="" data-kt-ecommerce-catalog-add-product="auto-options">
                                        <label class="form-label mb-5">Daftar Sosial Media</label>
                                        <div id="kt_ecommerce_add_social_media_options">
                                        </div>
                                        <div class="form-group mt-5 mb-5">
                                            <button type="button" data-repeater-create="" class="add-social_media btn btn-sm btn-light-primary">
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="black" />
                                                        <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                                    </svg>
                                                </span>Tambah Social Media
                                            </button>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>                         
                        </div>
                        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <div class="d-flex justify-content-end">
                            <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                                <span class="indicator-label">Save Changes</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div style="display: none;">
        <div class="form-group mb-3 add-email-list" childidx="0">
            <div data-repeater-list="kt_ecommerce_add_email_options" class="d-flex flex-column gap-3">
                <div data-repeater-item="" class="form-group d-flex flex-wrap gap-5">
                    <div class="d-flex">
                        <input type="text" class="form-control mw-100 w-200px name_receive" name="name_receive[0]" placeholder="nama" />
                        <input type="email" class="form-control ms-3 mw-100 w-300px email_receive" name="email_receive[0]" placeholder="email@example.com" />
                    </div>
                    <button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger delete-answer">
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="black" />
                                <rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="black" />
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="form-group mb-3 add-social_media-list" childidx="0">
            <div data-repeater-list="kt_ecommerce_add_social_media_options" class="d-flex flex-column gap-3">
                <div data-repeater-item="" class="form-group d-flex flex-wrap gap-5">
                    <div class="d-flex">
                        <input type="text" class="form-control mw-100 w-200px title_social_media" name="title_social_media[0]" placeholder="title" />
                        <input type="text" class="form-control ms-3 mw-100 w-300px icon_social_media" name="icon_social_media[0]" placeholder="icon" />
                        <input type="text" class="form-control ms-3 mw-100 w-300px link_social_media" name="link_social_media[0]" placeholder="link" />
                    </div>
                    <button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger delete-answer">
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="black" />
                                <rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="black" />
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        CKEDITOR.replace('address');
    });
</script>
<script>

    (function($) {
        $.fn.inputFilter = function(callback, errMsg) {
            return this.on("input keydown keyup mousedown mouseup select contextmenu drop focusout", function(e) {
            if (callback(this.value)) {
                // Accepted value
                if (["keydown","mousedown","focusout"].indexOf(e.type) >= 0){
                    $(this).removeClass("input-error");
                    this.setCustomValidity("");
                }
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
            } else if (this.hasOwnProperty("oldValue")) {
                // Rejected value - restore the previous one
                $(this).addClass("input-error");
                this.setCustomValidity(errMsg);
                this.reportValidity();
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
            } else {
                // Rejected value - nothing to restore
                this.value = "";
            }
            });
        };
    }(jQuery));


    // Install input filters.
    $(".number_only").inputFilter(function(value) {
        return /^-?\d*$/.test(value);
    }, "Masukan angka");

    $('.add-email').click(function (e) {
        console.log(e);
        e.preventDefault();
        addEmail()
    });

    function addEmail(name = '', email = '') {
        var tr_clone = $(".add-email-list").clone();
        tr_clone.removeClass('add-email-list');
        tr_clone.addClass('list-email');
        tr_clone.find('.name_receive').val(name);
        tr_clone.find('.email_receive').val(email);
        $("#kt_ecommerce_add_email_options").append(tr_clone);
        resetIndex();
    }

    function resetIndex (){
        var index = 0;
        $(".list-email").each(function () {
            var another = this;
            search_index = $(this).attr("childidx");
            $(this).find('input,select').each(function () {
                this.name = this.name.replace('[' + search_index + ']', '[' + index + ']');
                $(another).attr("childidx", index);
            });
            index++;
        });
    }
    $('#kt_ecommerce_add_email_options').on('click', '.delete-answer', function (e) {
        e.preventDefault();
        Swal.fire({
            title: 'Konfirmasi',
            text: "Hapus row yang dipilih ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya!'
        }).then((result) => {
            if (result.isConfirmed) {
                $(this).closest('.list-email').remove();
                resetIndex();
                Swal.fire( 'Berhasil!', 'Row berhasil dihapus !', 'success' )
            }
        })
    });

    $('.add-social_media').click(function (e) {
        console.log(e);
        e.preventDefault();
        addSocialMedia()
    });

    function addSocialMedia(title = '', icon = '', link = '') {
        var tr_clone = $(".add-social_media-list").clone();
        tr_clone.removeClass('add-social_media-list');
        tr_clone.addClass('list-social_media');
        tr_clone.find('.title_social_media').val(title);
        tr_clone.find('.icon_social_media').val(icon);
        tr_clone.find('.link_social_media').val(link);
        $("#kt_ecommerce_add_social_media_options").append(tr_clone);
        resetIndexSocialMedia();
    }

    function resetIndexSocialMedia (){
        var index = 0;
        $(".list-social_media").each(function () {
            var another = this;
            search_index = $(this).attr("childidx");
            $(this).find('input,select').each(function () {
                this.name = this.name.replace('[' + search_index + ']', '[' + index + ']');
                $(another).attr("childidx", index);
            });
            index++;
        });
    }
    $('#kt_ecommerce_add_social_media_options').on('click', '.delete-answer', function (e) {
        e.preventDefault();
        Swal.fire({
            title: 'Konfirmasi',
            text: "Hapus row yang dipilih ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya!'
        }).then((result) => {
            if (result.isConfirmed) {
                $(this).closest('.list-social_media').remove();
                resetIndexSocialMedia();
                Swal.fire( 'Berhasil!', 'Row berhasil dihapus !', 'success' )
            }
        })
    });
</script>
<script>
function getCity(params, current_id = null) {
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
@if(!empty($settings['email_receive']))
    @php
        $email_receive = json_encode($settings['email_receive']);
    @endphp
    <script>
        let email_receive = {!! $email_receive !!};
        var email_receives = JSON.parse(email_receive)
        console.log(typeof email_receives);
        email_receives.forEach(index => {
            addEmail(index.name, index.email)
        });
    </script>
@endif
@if(!empty($settings['social_media']))
    @php
        $social_media = json_encode($settings['social_media']);
    @endphp
    <script>
        let social_media = {!! $social_media !!};
        var social_medias = JSON.parse(social_media)
        console.log(typeof social_medias);
        social_medias.forEach(index => {
            addSocialMedia(index.title, index.icon, index.link)
        });
    </script>
@endif
@if(!empty($address))
<script>
    let current_province_id = `{!! $address->provinsi !!}`;
    let current_city_id = `{!! $address->kota !!}`;
    let current_subdistrict_id = `{!! $address->kecamatan !!}`;
    getCity(current_province_id, current_city_id);
    getKecamatan(current_city_id, current_subdistrict_id);
</script>
@endif
<script src="{{ asset_administrator('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
<script src="{{ asset_administrator('assets/js/custom/apps/ecommerce/setting/setting.js') }}"></script>
<script src="{{ asset_administrator('assets/js/custom/documentation/documentation.js') }}"></script>
<script src="{{ asset_administrator('assets/js/custom/documentation/search.js') }}"></script>
<script src="{{ asset_administrator('assets/js/custom/documentation/forms/select2.js') }}"></script>
<script src="{{ asset_administrator('assets/plugins/custom/form-jasnyupload/fileinput.min.js') }}"></script>
<script src="{{ asset_administrator('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('address');
</script>
@endpush
