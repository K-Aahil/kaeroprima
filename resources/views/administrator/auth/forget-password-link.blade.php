<head><base href="">
    @php $navbar = Layout::getLayout() @endphp
    <title>{{ $navbar['settings']['site_name'] }} - Admin</title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ img_src($navbar['settings']['favicon'], "favicon") }}" />
    <!--begin::Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{ asset_administrator("assets/plugins/custom/fullcalendar/fullcalendar.bundle.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset_administrator("assets/plugins/custom/datatables/datatables.bundle.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset_administrator("assets/plugins/custom/jstree/jstree.bundle.css") }}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset_administrator("assets/plugins/global/plugins.bundle.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset_administrator("assets/css/style.bundle.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset_administrator("assets/css/custom.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset_administrator("assets/css/bootstrap-colorpicker.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset_administrator("assets/css/bootstrap-colorpicker.min.css") }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    @stack('style')

</head>
<div class="d-flex" style="justify-content: center">
    <p href="../../demo1/dist/index.html" class="py-4 mb-0">
        @php $navbar = Layout::getLayout() @endphp
        <img alt="Logo" src="{{ asset_administrator("assets/media/settings/". $navbar['settings']['logo_navbar']) }}"
            class="h-150px w-300px" />
    </p>
</div>
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card my-5">
                    <div class="card-header"style="padding-top: 3%">Reset Password</div>
                    <div class="card-body">
    
                        <form action="{{ route('ResetPasswordPost') }}" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
    
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input type="hidden" id="email_address" class="form-control" name="email" value="{{$user->email}}">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6 mb-4">
                                    <input type="password" id="password" class="form-control" name="password" autofocus>
                                    @if ($errors->has('password'))
                                        <div class="text-danger my-2">{{ $errors->first('password') }}</div>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                <div class="col-md-6 mb-4">
                                    <input type="password" id="password-confirm" class="form-control" name="password_confirmation" autofocus>
                                    @if ($errors->has('password_confirmation'))
                                        <div class="text-danger my-2">{{ $errors->first('password_confirmation') }}</div>
                                    @endif
                                </div>
                            </div>
    
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="margin-left: 1.5%">
                                    Reset Password
                                </button>
                            </div>
                        </form>
                          
                    </div>
                </div>
            </div>
        </div>
    </div>
  </main>
  <script>var hostUrl = "assets/";</script>
  <!--begin::Global Javascript Bundle(used by all pages)-->
  <script src="{{ asset_administrator("assets/plugins/global/plugins.bundle.js") }}"></script>
  <script src="{{ asset_administrator("assets/js/scripts.bundle.js") }}"></script>
  <!--end::Global Javascript Bundle-->
  <!--begin::Page Vendors Javascript(used by this page)-->
  <script src="{{ asset_administrator("assets/plugins/custom/fullcalendar/fullcalendar.bundle.js") }}"></script>
  <script src="{{ asset_administrator("assets/plugins/custom/datatables/datatables.bundle.js") }}"></script>
  <!--end::Page Vendors Javascript-->
  <!--begin::Page Custom Javascript(used by this page)-->
  <script src="{{ asset_administrator("assets/js/widgets.bundle.js") }}"></script>
  <script src="{{ asset_administrator("assets/js/custom/widgets.js") }}"></script>
  <script src="{{ asset_administrator("assets/js/custom/apps/chat/chat.js") }}"></script>
  <script src="{{ asset_administrator("assets/js/custom/utilities/modals/upgrade-plan.js") }}"></script>
  <script src="{{ asset_administrator("assets/js/custom/utilities/modals/create-app.js") }}"></script>
  <script src="{{ asset_administrator("assets/js/custom/utilities/modals/users-search.js") }}"></script>
  <script src="{{ asset_administrator("assets/js/color-picker/bootstrap-colorpicker.js") }}"></script>
  <script src="{{ asset_administrator("assets/js/color-picker/bootstrap-colorpicker.min.js") }}"></script>
  <script src="{{ url('administrator\ckeditor\ckeditor.js') }}"></script>
  @stack('scripts')