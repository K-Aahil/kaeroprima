<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../">
    <title>Kaero Prima - Admin Login</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    {{-- <link rel="shortcut icon" href="{{ img_src($navbar['settings']['logo'], "logo") }}" /> --}}

    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset_administrator('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset_administrator('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <style>
        #bodyall {
          height: 100vh ;
        }
      </style>
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-body">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid"  id="bodyall">
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative"
                style="background-color: #F2C98A">
                <!--begin::Wrapper-->
                {{-- <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y"> --}}
                    <!--begin::Content-->
                    <div class="d-flex flex-row-fluid flex-column text-center">
                        <!--begin::Logo-->
                        <br><br><br><br>
                            {{-- <img alt="Logo" src="{{ img_src($navbar['settings']['logo'], "logo") }}" --}}
                        <p href="../../demo1/dist/index.html" class="py-4 mb-0">
                    	    @php $navbar = Layout::getLayout() @endphp
                            <img alt="Logo" src="{{ asset_administrator("assets/media/settings/". $navbar['settings']['logo_navbar']) }}"
                                class="h-150px w-300px" />
                        </p>
                        <br>
                        {{-- <h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #986923;">Sinar Gemilang</h1> --}}
                        <!--end::Title-->
                        <!--begin::Description-->
                        <p class="fw-bold fs-2" style="color: #986923;">Kaero Prima</p>
                        <!--end::Description-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Illustration-->
                    <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px"
                        style="background-image: url(assets/media/illustrations/sketchy-1/13.png"></div>
                    <!--end::Illustration-->
                {{-- </div> --}}
                <!--end::Wrapper-->
            </div>
            <!--end::Aside-->
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                        <!--begin::Form-->
                        <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form"
                            action="{{ route('admin.login') }}" method="POST">
                            @csrf
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    <button type="button" class="btn-close" disabled aria-label="Close"></button>
                                    {{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> --}}
                                    <strong>Success! </strong> {{ session()->get('message') }}
                                </div>
                            @endif
                            @if (session()->has('error'))
                                <div class="alert alert-danger">
                                    <button type="button" class="btn-close" disabled aria-label="Close"></button>
                                    {{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> --}}
                                    <strong>Error! </strong> {{ session()->get('error') }}
                                </div>
                            @endif
                            <!--begin::Heading-->
                            <div class="text-center mb-10">
                                <!--begin::Title-->
                                <h1 class="text-dark mb-3">Sign In to Panel Admin</h1>
                                <!--end::Title-->
                                <!--begin::Link-->
                                <!--end::Link-->
                            </div>
                            <!--begin::Heading-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control @error('email') is-invalid @enderror form-control-lg form-control-solid" type="text" name="email"
                                    autocomplete="off" />
                                    <br>@error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack mb-2">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Input-->
                                <input class="form-control @error('password') is-invalid @enderror form-control-lg form-control-solid" type="password"
                                    name="password" autocomplete="off" />
                                    <br>@error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="col-12 form-group">
                                        @if (Route::has('ForgetPasswordGet'))
                                        <a href="{{ route('ForgetPasswordGet') }}" class="float-end font_text" style="padding-right: 28px;">Forgot Password?</a>
                                        @endif
                                    </div>
                                <!--end::Input-->
                                <!--begin::Link-->
                                <!--end::Link-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <!--begin::Submit button-->
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                                    <span class="indicator-label">Sign In</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Submit button-->

                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
                    <!--begin::Links-->
                    <!--end::Links-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset_administrator('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset_administrator('assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->

    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
