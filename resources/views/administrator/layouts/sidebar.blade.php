@php $navbar = Layout::getLayout(); $permissions = getPermissionModuleGroup();
@endphp
<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <a href="{{ route('admin.dashboard') }}">
            <img alt="Logo"
                src="{{ asset_administrator('assets/media/settings/' . $navbar['settings']['logo_navbar']) }}"
                class="h-30px w-120px logo" style="margin-top: 0px; margin-left: 5px;" />
        </a>
        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="aside-minimize">
            <span class="svg-icon svg-icon-1 rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none">
                    <path opacity="0.5"
                        d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                        fill="black" />
                    <path
                        d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                        fill="black" />
                </svg>
            </span>
        </div>
    </div>
    <div class="aside-menu flex-column-fluid">
        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu"
            data-kt-scroll-offset="0">
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                id="#kt_aside_menu" data-kt-menu="true">

                {{-- -------------------------------------------------------------------------------------------------------------------------------------------- --}}



                <div class="menu-item show menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg style="color: blue" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 20H11V13H22V20ZM9 20H2V13H9V20ZM22 11H2V4H22V11Z" fill="blue">
                                    </path>
                                </svg>
                            </span>
                        </span>
                        <a href="{{ route('admin.dashboard') }}" class="menu-title">Dashboard</a>
                    </span>
                </div>

                {{-- @if (showModule('director_lists', $permissions))
                <div class="menu-item here menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg style="color: blue" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z"
                                        fill="blue"></path>
                                </svg>
                            </span>
                        </span>
                        <a href="{{ route('director-list.index') }}"><span class="menu-title">Commissioners And Directors</span></a>
                    </span>
                </div>
            @endif --}}

                {{-- @if (showModule('about_us', $permissions))
                    <div class="menu-item show menu-accordion">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg style="color: blue" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="40"
                                        zoomAndPan="magnify" viewBox="0 0 30 30.000001" height="40"
                                        preserveAspectRatio="xMidYMid meet" version="1.0">
                                        <defs>
                                            <clipPath id="id1">
                                                <path
                                                    d="M 2.683594 3.355469 L 28.085938 3.355469 L 28.085938 25.855469 L 2.683594 25.855469 Z M 2.683594 3.355469 "
                                                    clip-rule="nonzero" fill="blue"></path>
                                            </clipPath>
                                        </defs>
                                        <g clip-path="url(#id1)">
                                            <path fill="blue"
                                                d="M 20.933594 19.726562 L 20.933594 18.097656 C 20.933594 17.691406 21.269531 17.363281 21.679688 17.363281 C 22.089844 17.363281 22.425781 17.691406 22.425781 18.097656 L 22.425781 18.421875 L 23.421875 17.546875 C 23.703125 17.300781 24.128906 17.300781 24.410156 17.546875 L 27.761719 20.488281 C 28.070312 20.757812 28.097656 21.222656 27.824219 21.527344 C 27.675781 21.691406 27.472656 21.773438 27.265625 21.773438 L 27.265625 25.082031 C 27.265625 25.488281 26.933594 25.816406 26.523438 25.816406 L 21.308594 25.816406 C 20.894531 25.816406 20.5625 25.488281 20.5625 25.082031 L 20.5625 21.773438 C 20.359375 21.773438 20.152344 21.691406 20.007812 21.527344 C 19.734375 21.222656 19.761719 20.757812 20.066406 20.488281 Z M 25.777344 20.714844 L 23.914062 19.082031 L 22.054688 20.714844 L 22.054688 24.347656 L 25.777344 24.347656 Z M 8.644531 7.808594 L 8.644531 5.601562 C 8.644531 4.382812 9.640625 3.394531 10.875 3.394531 L 16.84375 3.394531 C 18.074219 3.394531 19.074219 4.386719 19.074219 5.601562 L 19.074219 7.808594 L 22.800781 7.808594 C 24.035156 7.808594 25.03125 8.792969 25.03125 10.011719 L 25.03125 15.160156 C 25.03125 15.566406 24.699219 15.894531 24.289062 15.894531 C 23.875 15.894531 23.542969 15.566406 23.542969 15.160156 L 23.542969 10.011719 C 23.542969 9.605469 23.210938 9.277344 22.800781 9.277344 L 20.5625 9.277344 L 20.5625 16.261719 C 20.5625 16.664062 20.230469 16.996094 19.816406 16.996094 C 19.40625 16.996094 19.074219 16.664062 19.074219 16.261719 L 19.074219 9.277344 L 8.644531 9.277344 L 8.644531 21.773438 L 18.328125 21.773438 C 18.738281 21.773438 19.074219 22.101562 19.074219 22.507812 C 19.074219 22.914062 18.738281 23.242188 18.328125 23.242188 L 4.917969 23.242188 C 3.683594 23.242188 2.683594 22.257812 2.683594 21.039062 L 2.683594 10.011719 C 2.683594 8.792969 3.6875 7.808594 4.917969 7.808594 Z M 7.152344 9.277344 L 4.917969 9.277344 C 4.507812 9.277344 4.171875 9.605469 4.171875 10.011719 L 4.171875 21.039062 C 4.171875 21.445312 4.503906 21.773438 4.917969 21.773438 L 7.152344 21.773438 Z M 10.132812 7.808594 L 17.582031 7.808594 L 17.582031 5.601562 C 17.582031 5.195312 17.25 4.867188 16.84375 4.867188 L 10.875 4.867188 C 10.464844 4.867188 10.132812 5.195312 10.132812 5.601562 Z M 10.132812 7.808594 "
                                                fill-opacity="1" fill-rule="nonzero"></path>
                                        </g>
                                    </svg>
                                </span>
                            </span>
                            <a href="{{ route('admin.about_us') }}" class="menu-title">About Us</a>
                        </span>
                    </div>
                @endif --}}
                @if (showModule('banners', $permissions))
                    <div class="menu-item show menu-accordion">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg style="color: blue" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
                                        <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" fill="blue">
                                        </path>
                                        <path
                                            d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"
                                            fill="blue"></path>
                                    </svg>
                                </span>
                            </span>
                            <a href="{{ route('admin.banners') }}" class="menu-title">Banners</a>
                        </span>
                    </div>
                @endif

                {{-- @if (showModule('our_partners', $permissions)||showModule('otorisasi', $permissions))
                <div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg style="color: blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M22 12a9.966 9.966 0 0 1-.832 4M12 22a9.966 9.966 0 0 0 7.071-2.929M2 12a9.966 9.966 0 0 1 2.929-7.071M12 2a9.966 9.966 0 0 0-4 .832m0 18.336A10.02 10.02 0 0 1 2.832 16m13-13A10.02 10.02 0 0 1 21 8.168"
                                        fill="blue"></path>
                                    <path fill="blue" fill-rule="evenodd"
                                        d="M7.545 12.095a4.55 4.55 0 0 1 9.068-.54c-2.271.051-3.942.557-5.143 1.284 1.085.378 2.17 1.018 3.007 2.059a.75.75 0 0 1-1.169.94c-.79-.981-1.907-1.524-3.049-1.789a8.265 8.265 0 0 0-2.359-.19 4.535 4.535 0 0 1-.355-1.764zm4.55-6.36a6.36 6.36 0 1 0 0 12.72 6.36 6.36 0 0 0 0-12.72zm-1.909 3.087c-.224 0-.547.063-.83.267-.31.224-.534.592-.534 1.097s.223.873.534 1.097c.283.204.606.267.83.267.224 0 .547-.063.83-.267.311-.224.534-.592.534-1.097s-.223-.873-.534-1.097a1.459 1.459 0 0 0-.83-.267z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Partners & Otorisasi</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        @if (showModule('our_partners', $permissions))
                            <div class="menu-item">
                                <a class="menu-link" href="/admin/our-partner/detail?our_partner_id=1">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Partners</span>
                                </a>
                            </div>
                        @endif
                        @if (showModule('otorisasi', $permissions))
                            <div class="menu-item">
                                <a class="menu-link" href="/admin/otorisasi/detail?our_partner_id=2">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Otorisasi</span>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            @endif  --}}

                        @if (showModule('about_us', $permissions))
                            <div class="menu-item here menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <span class="svg-icon svg-icon-2">
                                            <svg style="color: blue" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="40"
                                                zoomAndPan="magnify" viewBox="0 0 30 30.000001" height="40"
                                                preserveAspectRatio="xMidYMid meet" version="1.0">
                                                <defs>
                                                    <clipPath id="id1">
                                                        <path
                                                            d="M 2.683594 3.355469 L 28.085938 3.355469 L 28.085938 25.855469 L 2.683594 25.855469 Z M 2.683594 3.355469 "
                                                            clip-rule="nonzero" fill="blue"></path>
                                                    </clipPath>
                                                </defs>
                                                <g clip-path="url(#id1)">
                                                    <path fill="blue"
                                                        d="M 20.933594 19.726562 L 20.933594 18.097656 C 20.933594 17.691406 21.269531 17.363281 21.679688 17.363281 C 22.089844 17.363281 22.425781 17.691406 22.425781 18.097656 L 22.425781 18.421875 L 23.421875 17.546875 C 23.703125 17.300781 24.128906 17.300781 24.410156 17.546875 L 27.761719 20.488281 C 28.070312 20.757812 28.097656 21.222656 27.824219 21.527344 C 27.675781 21.691406 27.472656 21.773438 27.265625 21.773438 L 27.265625 25.082031 C 27.265625 25.488281 26.933594 25.816406 26.523438 25.816406 L 21.308594 25.816406 C 20.894531 25.816406 20.5625 25.488281 20.5625 25.082031 L 20.5625 21.773438 C 20.359375 21.773438 20.152344 21.691406 20.007812 21.527344 C 19.734375 21.222656 19.761719 20.757812 20.066406 20.488281 Z M 25.777344 20.714844 L 23.914062 19.082031 L 22.054688 20.714844 L 22.054688 24.347656 L 25.777344 24.347656 Z M 8.644531 7.808594 L 8.644531 5.601562 C 8.644531 4.382812 9.640625 3.394531 10.875 3.394531 L 16.84375 3.394531 C 18.074219 3.394531 19.074219 4.386719 19.074219 5.601562 L 19.074219 7.808594 L 22.800781 7.808594 C 24.035156 7.808594 25.03125 8.792969 25.03125 10.011719 L 25.03125 15.160156 C 25.03125 15.566406 24.699219 15.894531 24.289062 15.894531 C 23.875 15.894531 23.542969 15.566406 23.542969 15.160156 L 23.542969 10.011719 C 23.542969 9.605469 23.210938 9.277344 22.800781 9.277344 L 20.5625 9.277344 L 20.5625 16.261719 C 20.5625 16.664062 20.230469 16.996094 19.816406 16.996094 C 19.40625 16.996094 19.074219 16.664062 19.074219 16.261719 L 19.074219 9.277344 L 8.644531 9.277344 L 8.644531 21.773438 L 18.328125 21.773438 C 18.738281 21.773438 19.074219 22.101562 19.074219 22.507812 C 19.074219 22.914062 18.738281 23.242188 18.328125 23.242188 L 4.917969 23.242188 C 3.683594 23.242188 2.683594 22.257812 2.683594 21.039062 L 2.683594 10.011719 C 2.683594 8.792969 3.6875 7.808594 4.917969 7.808594 Z M 7.152344 9.277344 L 4.917969 9.277344 C 4.507812 9.277344 4.171875 9.605469 4.171875 10.011719 L 4.171875 21.039062 C 4.171875 21.445312 4.503906 21.773438 4.917969 21.773438 L 7.152344 21.773438 Z M 10.132812 7.808594 L 17.582031 7.808594 L 17.582031 5.601562 C 17.582031 5.195312 17.25 4.867188 16.84375 4.867188 L 10.875 4.867188 C 10.464844 4.867188 10.132812 5.195312 10.132812 5.601562 Z M 10.132812 7.808594 "
                                                        fill-opacity="1" fill-rule="nonzero"></path>
                                                </g>
                                            </svg>
                                        </span>
                                    </span>
                                    <a href="{{ route('admin.about_us') }}"><span class="menu-title">About Us</span></a>
                                </span>
                            </div>
                        @endif 
                    @if (showModule('short_lists', $permissions))
                    <div class="menu-item here menu-accordion">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg style="color: blue" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16">
                                        <path
                                            d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z"
                                            fill="blue"></path>
                                    </svg>
                                </span>
                            </span>
                            <a href="{{ route('short-list.index') }}"><span class="menu-title">Our Services</span></a>
                        </span>
                    </div>
                @endif


                {{-- @if (showModule('product', $permissions))
                    <div class="menu-item show menu-accordion">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M5 8.04999L11.8 11.95V19.85L5 15.85V8.04999Z"
                                            fill="black" />
                                        <path
                                            d="M20.1 6.65L12.3 2.15C12 1.95 11.6 1.95 11.3 2.15L3.5 6.65C3.2 6.85 3 7.15 3 7.45V16.45C3 16.75 3.2 17.15 3.5 17.25L11.3 21.75C11.5 21.85 11.6 21.85 11.8 21.85C12 21.85 12.1 21.85 12.3 21.75L20.1 17.25C20.4 17.05 20.6 16.75 20.6 16.45V7.45C20.6 7.15 20.4 6.75 20.1 6.65ZM5 15.85V7.95L11.8 4.05L18.6 7.95L11.8 11.95V19.85L5 15.85Z"
                                            fill="black" />
                                    </svg>
                                </span>
                            </span>
                            <a href="{{ route('admin.product') }}" class="menu-title">Product</a>
                        </span>
                    </div>
                @endif --}}

                {{-- @if (showModule('faq_list', $permissions))
                    <div class="menu-item here menu-accordion">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg style="color: blue" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M202.021 0C122.202 0 70.503 32.703 29.914 91.026c-7.363 10.58-5.093 25.086 5.178 32.874l43.138 32.709c10.373 7.865 25.132 6.026 33.253-4.148 25.049-31.381 43.63-49.449 82.757-49.449 30.764 0 68.816 19.799 68.816 49.631 0 22.552-18.617 34.134-48.993 51.164-35.423 19.86-82.299 44.576-82.299 106.405V320c0 13.255 10.745 24 24 24h72.471c13.255 0 24-10.745 24-24v-5.773c0-42.86 125.268-44.645 125.268-160.627C377.504 66.256 286.902 0 202.021 0zM192 373.459c-38.196 0-69.271 31.075-69.271 69.271 0 38.195 31.075 69.27 69.271 69.27s69.271-31.075 69.271-69.271-31.075-69.27-69.271-69.27z" fill="blue"/></svg>
                                </span>
                            </span>
                            <a href="/admin/faq-list/detail?faq_list_id=1"><span class="menu-title">FAQ</span></a>
                        </span>
                    </div>
                @endif --}}

                @if (showModule('article', $permissions)||showModule('article_categories', $permissions))
                    <div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg style="color: blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path
                                            d="M16 2h4v15a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3V0h16v2zm0 2v13a1 1 0 0 0 1 1 1 1 0 0 0 1-1V4h-2zM2 2v15a1 1 0 0 0 1 1h11.17a2.98 2.98 0 0 1-.17-1V2H2zm2 8h8v2H4v-2zm0 4h8v2H4v-2zM4 4h8v4H4V4z"
                                            fill="blue"></path>
                                    </svg>
                                </span>
                            </span>
                            <span class="menu-title">Article</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                            @if (showModule('article_categories', $permissions))
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('admin.article_categories') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Category</span>
                                    </a>
                                </div>
                            @endif
                            @if (showModule('article', $permissions))
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('admin.article') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Article</span>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                @endif

                @if (showModule('pages', $permissions))
                <div class="menu-item show menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg style="color: blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M7,2H3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H7a1,1,0,0,0,1-1V3A1,1,0,0,0,7,2ZM5,21a2,2,0,1,1,2-2A2,2,0,0,1,5,21Zm2-9H3V3H7Z"
                                        fill="blue"></path>
                                    <circle cx="5.01" cy="19.01" r="1"></circle>
                                    <rect x="14" y="2" width="8" height="2.02"></rect>
                                    <rect x="10" y="2" width="2.01" height="2.02"></rect>
                                    <rect x="14" y="6" width="8" height="2.02"></rect>
                                    <rect x="10" y="6" width="2.01" height="2.02"></rect>
                                    <rect x="14" y="10" width="8" height="2.02"></rect>
                                    <rect x="10" y="10" width="2.01" height="2.02"></rect>
                                </svg>
                            </span>
                        </span>
                        <a href="{{ route('admin.pages') }}" class="menu-title">Pages</a>
                    </span>
                </div>
            @endif

                {{-- @if (showModule('article', $permissions))
                    <div class="menu-item show menu-accordion">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg style="color: blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M7,2H3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H7a1,1,0,0,0,1-1V3A1,1,0,0,0,7,2ZM5,21a2,2,0,1,1,2-2A2,2,0,0,1,5,21Zm2-9H3V3H7Z"
                                            fill="blue"></path>
                                        <circle cx="5.01" cy="19.01" r="1"></circle>
                                        <rect x="14" y="2" width="8" height="2.02"></rect>
                                        <rect x="10" y="2" width="2.01" height="2.02"></rect>
                                        <rect x="14" y="6" width="8" height="2.02"></rect>
                                        <rect x="10" y="6" width="2.01" height="2.02"></rect>
                                        <rect x="14" y="10" width="8" height="2.02"></rect>
                                        <rect x="10" y="10" width="2.01" height="2.02"></rect>
                                    </svg>
                                </span>
                            </span>
                            <a href="{{ route('admin.article') }}" class="menu-title">Article</a>
                        </span>
                    </div>
                @endif --}}

                {{-- @if (showModule('page_banners', $permissions))
                    <div class="menu-item show menu-accordion">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg style="color: blue" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-chat-square-text"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"
                                            fill="blue"></path>
                                        <path
                                            d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"
                                            fill="blue"></path>
                                    </svg>
                                </span>
                            </span>
                            <a href="{{ route('admin.page-banners') }}" class="menu-title">Page Banner</a>
                        </span>
                    </div>
                @endif --}}

                {{-- @if (showModule('career_categories', $permissions) || showModule('career_paths', $permissions) || showModule('career', $permissions))
                    <div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg style="color: blue" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="40"
                                        zoomAndPan="magnify" viewBox="0 0 30 30.000001" height="40"
                                        preserveAspectRatio="xMidYMid meet" version="1.0">
                                        <defs>
                                            <clipPath id="id1">
                                                <path
                                                    d="M 2.683594 3.355469 L 28.085938 3.355469 L 28.085938 25.855469 L 2.683594 25.855469 Z M 2.683594 3.355469 "
                                                    clip-rule="nonzero" fill="blue"></path>
                                            </clipPath>
                                        </defs>
                                        <g clip-path="url(#id1)">
                                            <path fill="blue"
                                                d="M 20.933594 19.726562 L 20.933594 18.097656 C 20.933594 17.691406 21.269531 17.363281 21.679688 17.363281 C 22.089844 17.363281 22.425781 17.691406 22.425781 18.097656 L 22.425781 18.421875 L 23.421875 17.546875 C 23.703125 17.300781 24.128906 17.300781 24.410156 17.546875 L 27.761719 20.488281 C 28.070312 20.757812 28.097656 21.222656 27.824219 21.527344 C 27.675781 21.691406 27.472656 21.773438 27.265625 21.773438 L 27.265625 25.082031 C 27.265625 25.488281 26.933594 25.816406 26.523438 25.816406 L 21.308594 25.816406 C 20.894531 25.816406 20.5625 25.488281 20.5625 25.082031 L 20.5625 21.773438 C 20.359375 21.773438 20.152344 21.691406 20.007812 21.527344 C 19.734375 21.222656 19.761719 20.757812 20.066406 20.488281 Z M 25.777344 20.714844 L 23.914062 19.082031 L 22.054688 20.714844 L 22.054688 24.347656 L 25.777344 24.347656 Z M 8.644531 7.808594 L 8.644531 5.601562 C 8.644531 4.382812 9.640625 3.394531 10.875 3.394531 L 16.84375 3.394531 C 18.074219 3.394531 19.074219 4.386719 19.074219 5.601562 L 19.074219 7.808594 L 22.800781 7.808594 C 24.035156 7.808594 25.03125 8.792969 25.03125 10.011719 L 25.03125 15.160156 C 25.03125 15.566406 24.699219 15.894531 24.289062 15.894531 C 23.875 15.894531 23.542969 15.566406 23.542969 15.160156 L 23.542969 10.011719 C 23.542969 9.605469 23.210938 9.277344 22.800781 9.277344 L 20.5625 9.277344 L 20.5625 16.261719 C 20.5625 16.664062 20.230469 16.996094 19.816406 16.996094 C 19.40625 16.996094 19.074219 16.664062 19.074219 16.261719 L 19.074219 9.277344 L 8.644531 9.277344 L 8.644531 21.773438 L 18.328125 21.773438 C 18.738281 21.773438 19.074219 22.101562 19.074219 22.507812 C 19.074219 22.914062 18.738281 23.242188 18.328125 23.242188 L 4.917969 23.242188 C 3.683594 23.242188 2.683594 22.257812 2.683594 21.039062 L 2.683594 10.011719 C 2.683594 8.792969 3.6875 7.808594 4.917969 7.808594 Z M 7.152344 9.277344 L 4.917969 9.277344 C 4.507812 9.277344 4.171875 9.605469 4.171875 10.011719 L 4.171875 21.039062 C 4.171875 21.445312 4.503906 21.773438 4.917969 21.773438 L 7.152344 21.773438 Z M 10.132812 7.808594 L 17.582031 7.808594 L 17.582031 5.601562 C 17.582031 5.195312 17.25 4.867188 16.84375 4.867188 L 10.875 4.867188 C 10.464844 4.867188 10.132812 5.195312 10.132812 5.601562 Z M 10.132812 7.808594 "
                                                fill-opacity="1" fill-rule="nonzero"></path>
                                        </g>
                                    </svg>
                                </span>
                            </span>
                            <span class="menu-title">Career</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                            @if (showModule('career_categories', $permissions))
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('admin.career_categories') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Career Category</span>
                                    </a>
                                </div>
                            @endif
                            @if (showModule('career_paths', $permissions))
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('admin.career_paths') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Education Level</span>
                                    </a>
                                </div>
                            @endif
                            @if (showModule('career', $permissions))
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('admin.career') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Career</span>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                @endif  --}}

                {{-- @if (showModule('contact_lists', $permissions))
                    <div class="menu-item here menu-accordion">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z"
                                            fill="black" />
                                        <path opacity="0.3"
                                            d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z"
                                            fill="black" />
                                    </svg>
                                </span>
                            </span>
                            <a href="{{ route('admin.contact_list') }}" class="menu-title">Contact List</a>
                        </span>
                    </div>
                @endif

                @if (showModule('branches', $permissions))
                    <div class="menu-item here menu-accordion">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg style="color: blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M15 11V5l-3-3-3 3v2H3v14h18V11h-6zm-8 8H5v-2h2v2zm0-4H5v-2h2v2zm0-4H5V9h2v2zm6 8h-2v-2h2v2zm0-4h-2v-2h2v2zm0-4h-2V9h2v2zm0-4h-2V5h2v2zm6 12h-2v-2h2v2zm0-4h-2v-2h2v2z"
                                            fill="blue"></path>
                                    </svg>
                                </span>
                            </span>
                            <a href="{{ route('admin.branches') }}" class="menu-title">Location Branch</a>
                        </span>
                    </div>
                @endif

               @if (showModule('our_service', $permissions))
                    <div class="menu-item here menu-accordion">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg style="color: blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M7,2H3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H7a1,1,0,0,0,1-1V3A1,1,0,0,0,7,2ZM5,21a2,2,0,1,1,2-2A2,2,0,0,1,5,21Zm2-9H3V3H7Z"
                                            fill="blue"></path>
                                        <circle cx="5.01" cy="19.01" r="1"></circle>
                                        <rect x="14" y="2" width="8" height="2.02"></rect>
                                        <rect x="10" y="2" width="2.01" height="2.02"></rect>
                                        <rect x="14" y="6" width="8" height="2.02"></rect>
                                        <rect x="10" y="6" width="2.01" height="2.02"></rect>
                                        <rect x="14" y="10" width="8" height="2.02"></rect>
                                        <rect x="10" y="10" width="2.01" height="2.02"></rect>
                                    </svg>
                                </span>
                            </span>
                            <a href="{{ route('admin.our_service') }}"><span class="menu-title">Our
                                    Service</span></a>
                        </span>
                       <div class="menu-sub menu-sub-accordion menu-active-bg">
                            <div class="menu-item">
                                <a class="menu-link" href="{{ route('admin.our_service_item') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Our Service Detail</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="{{ route('admin.our_service') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Our Service</span>
                                </a>
                            </div>
                        </div> 
                    </div>
                @endif 

                {{--@if (showModule('doctors', $permissions) || showModule('doctor_schedules', $permissions))
                    <div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg style="color: blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 448 512">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M352 128C352 198.7 294.7 256 223.1 256C153.3 256 95.1 198.7 95.1 128C95.1 57.31 153.3 0 223.1 0C294.7 0 352 57.31 352 128zM287.1 362C260.4 369.1 239.1 394.2 239.1 424V448C239.1 452.2 241.7 456.3 244.7 459.3L260.7 475.3C266.9 481.6 277.1 481.6 283.3 475.3C289.6 469.1 289.6 458.9 283.3 452.7L271.1 441.4V424C271.1 406.3 286.3 392 303.1 392C321.7 392 336 406.3 336 424V441.4L324.7 452.7C318.4 458.9 318.4 469.1 324.7 475.3C330.9 481.6 341.1 481.6 347.3 475.3L363.3 459.3C366.3 456.3 368 452.2 368 448V424C368 394.2 347.6 369.1 320 362V308.8C393.5 326.7 448 392.1 448 472V480C448 497.7 433.7 512 416 512H32C14.33 512 0 497.7 0 480V472C0 393 54.53 326.7 128 308.8V370.3C104.9 377.2 88 398.6 88 424C88 454.9 113.1 480 144 480C174.9 480 200 454.9 200 424C200 398.6 183.1 377.2 160 370.3V304.2C162.7 304.1 165.3 304 168 304H280C282.7 304 285.3 304.1 288 304.2L287.1 362zM167.1 424C167.1 437.3 157.3 448 143.1 448C130.7 448 119.1 437.3 119.1 424C119.1 410.7 130.7 400 143.1 400C157.3 400 167.1 410.7 167.1 424z"
                                            fill="blue"></path>
                                    </svg>
                                </span>
                            </span>
                            <span class="menu-title">Doctors</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                            @if (showModule('doctors', $permissions))
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('admin.doctors') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Doctors</span>
                                    </a>
                                </div>
                            @endif
                            @if (showModule('doctor_schedules', $permissions))
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('admin.doctor_schedules') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Schedule Doctors</span>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                @endif

                @if (showModule('products', $permissions))
                    <div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M5 8.04999L11.8 11.95V19.85L5 15.85V8.04999Z"
                                            fill="black" />
                                        <path
                                            d="M20.1 6.65L12.3 2.15C12 1.95 11.6 1.95 11.3 2.15L3.5 6.65C3.2 6.85 3 7.15 3 7.45V16.45C3 16.75 3.2 17.15 3.5 17.25L11.3 21.75C11.5 21.85 11.6 21.85 11.8 21.85C12 21.85 12.1 21.85 12.3 21.75L20.1 17.25C20.4 17.05 20.6 16.75 20.6 16.45V7.45C20.6 7.15 20.4 6.75 20.1 6.65ZM5 15.85V7.95L11.8 4.05L18.6 7.95L11.8 11.95V19.85L5 15.85Z"
                                            fill="black" />
                                    </svg>
                                </span>
                            </span>
                            <span class="menu-title">Marketplace</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                             <div class="menu-item">
                                <a class="menu-link" href="{{ route('admin.brands') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Brands</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="{{ route('admin.categories') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Categories</span>
                                </a>
                            </div> 
                            <div class="menu-item">
                                <a class="menu-link" href="{{ route('admin.products') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Products</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif

            {{-- @if (showModule('visitors', $permissions)||showModule('product_inquiries', $permissions))
                <div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg style="color: blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M20 2H4c-1.11 0-2 .89-2 2v11c0 1.11.89 2 2 2h4v5l4-2 4 2v-5h4c1.11 0 2-.89 2-2V4c0-1.11-.89-2-2-2zm0 13H4v-2h16v2zm0-5H4V4h16v6z"
                                        fill="blue"></path>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Visitors</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        @if (showModule('visitors', $permissions))
                            <div class="menu-item">
                                <a class="menu-link" href="{{ route('admin.visitors') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Contact Form Data</span>
                                </a>
                            </div>
                        @endif
                        @if (showModule('product_inquiries', $permissions))
                            <div class="menu-item">
                                <a class="menu-link" href="{{ route('admin.product-inquiries') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Product Inquiries</span>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            @endif  --}}

            
            {{-- @if (showModule('careers_visitors', $permissions))
            <div class="menu-item here menu-accordion">
                <span class="menu-link">
                    <span class="menu-icon">
                        <span class="svg-icon svg-icon-2">
                            <svg style="color: blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M22 12a9.966 9.966 0 0 1-.832 4M12 22a9.966 9.966 0 0 0 7.071-2.929M2 12a9.966 9.966 0 0 1 2.929-7.071M12 2a9.966 9.966 0 0 0-4 .832m0 18.336A10.02 10.02 0 0 1 2.832 16m13-13A10.02 10.02 0 0 1 21 8.168"
                                    fill="blue"></path>
                                <path fill="blue" fill-rule="evenodd"
                                    d="M7.545 12.095a4.55 4.55 0 0 1 9.068-.54c-2.271.051-3.942.557-5.143 1.284 1.085.378 2.17 1.018 3.007 2.059a.75.75 0 0 1-1.169.94c-.79-.981-1.907-1.524-3.049-1.789a8.265 8.265 0 0 0-2.359-.19 4.535 4.535 0 0 1-.355-1.764zm4.55-6.36a6.36 6.36 0 1 0 0 12.72 6.36 6.36 0 0 0 0-12.72zm-1.909 3.087c-.224 0-.547.063-.83.267-.31.224-.534.592-.534 1.097s.223.873.534 1.097c.283.204.606.267.83.267.224 0 .547-.063.83-.267.311-.224.534-.592.534-1.097s-.223-.873-.534-1.097a1.459 1.459 0 0 0-.83-.267z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </span>
                    <a href="{{ route('admin.careers-visitors') }}"><span class="menu-title">Careers</span></a>
                </span>
            </div>
        @endif --}}

            @if (showModule('careers_visitors', $permissions)||showModule('job_titles', $permissions))
                <div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg style="color: blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M22 12a9.966 9.966 0 0 1-.832 4M12 22a9.966 9.966 0 0 0 7.071-2.929M2 12a9.966 9.966 0 0 1 2.929-7.071M12 2a9.966 9.966 0 0 0-4 .832m0 18.336A10.02 10.02 0 0 1 2.832 16m13-13A10.02 10.02 0 0 1 21 8.168"
                                    fill="blue"></path>
                                <path fill="blue" fill-rule="evenodd"
                                    d="M7.545 12.095a4.55 4.55 0 0 1 9.068-.54c-2.271.051-3.942.557-5.143 1.284 1.085.378 2.17 1.018 3.007 2.059a.75.75 0 0 1-1.169.94c-.79-.981-1.907-1.524-3.049-1.789a8.265 8.265 0 0 0-2.359-.19 4.535 4.535 0 0 1-.355-1.764zm4.55-6.36a6.36 6.36 0 1 0 0 12.72 6.36 6.36 0 0 0 0-12.72zm-1.909 3.087c-.224 0-.547.063-.83.267-.31.224-.534.592-.534 1.097s.223.873.534 1.097c.283.204.606.267.83.267.224 0 .547-.063.83-.267.311-.224.534-.592.534-1.097s-.223-.873-.534-1.097a1.459 1.459 0 0 0-.83-.267z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            </span>
                        </span>
                        <span class="menu-title">Careers</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        @if (showModule('job_titles', $permissions))
                            <div class="menu-item">
                                <a class="menu-link" href="{{ route('admin.job_titles') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Job Title</span>
                                </a>
                            </div>
                        @endif
                    </div>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        @if (showModule('careers_visitors', $permissions))
                            <div class="menu-item">
                                <a class="menu-link" href="{{ route('admin.careers-visitors') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Applicant</span>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            @endif 

            
            @if (showModule('visitors', $permissions))
            <div class="menu-item show menu-accordion">
                <span class="menu-link">
                    <span class="menu-icon">
                        <span class="svg-icon svg-icon-2">
                            <svg style="color: blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M20 2H4c-1.11 0-2 .89-2 2v11c0 1.11.89 2 2 2h4v5l4-2 4 2v-5h4c1.11 0 2-.89 2-2V4c0-1.11-.89-2-2-2zm0 13H4v-2h16v2zm0-5H4V4h16v6z"
                                    fill="blue"></path>
                            </svg>
                        </span>
                    </span>
                    <a href="{{ route('admin.visitors') }}" class="menu-title">Contact Form Data</a>
                </span>
            </div>
            @endif

            {{-- @if (showModule('visitors', $permissions))
                <div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg style="color: blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M20 2H4c-1.11 0-2 .89-2 2v11c0 1.11.89 2 2 2h4v5l4-2 4 2v-5h4c1.11 0 2-.89 2-2V4c0-1.11-.89-2-2-2zm0 13H4v-2h16v2zm0-5H4V4h16v6z"
                                        fill="blue"></path>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Visitors</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        @if (showModule('visitors', $permissions))
                            <div class="menu-item">
                                <a class="menu-link" href="{{ route('admin.visitors') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Contact Form Data</span>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            @endif  --}}

                @if (showModule('menu_managements', $permissions))
                    <div class="menu-item here menu-accordion">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg style="color: blue" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-menu-button-wide-fill"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M1.5 0A1.5 1.5 0 0 0 0 1.5v2A1.5 1.5 0 0 0 1.5 5h13A1.5 1.5 0 0 0 16 3.5v-2A1.5 1.5 0 0 0 14.5 0h-13zm1 2h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1zm9.927.427A.25.25 0 0 1 12.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0l-.396-.396zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2H1zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2h14zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"
                                            fill="blue"></path>
                                    </svg>
                                </span>
                            </span>
                            <a href="{{ route('menu-management.index') }}"><span class="menu-title">Menu
                                    Management</span></a>
                        </span>
                    </div>
                @endif

                {{--@if (showModule('our_promo', $permissions))
                    <div class="menu-item show menu-accordion">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg style="color: blue" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3 3C3.39922 3.5978 4.14539 4 5 4C5.85461 4 6.60078 3.5978 7 3C7.29941 2.4022 7.85904 2 8.5 2C9.14096 2 9.70059 2.4022 10 3C10.3992 3.5978 11.1454 4 12 4C12.8546 4 13.6008 3.5978 14 3C14.2994 2.4022 14.859 2 15.5 2C16.141 2 16.7006 2.4022 17 3C17.3992 3.5978 18.1454 4 19 4C19.8546 4 20.6008 3.5978 21 3V21C20.6008 20.4022 19.8546 20 19 20C18.1454 20 17.3992 20.4022 17 21C16.7006 21.5978 16.141 22 15.5 22C14.859 22 14.2994 21.5978 14 21C13.6008 20.4022 12.8546 20 12 20C11.1454 20 10.3992 20.4022 10 21C9.70059 21.5978 9.14096 22 8.5 22C7.85904 22 7.29941 21.5978 7 21C6.60078 20.4022 5.85461 20 5 20C4.14539 20 3.39922 20.4022 3 21V3Z"
                                            stroke="#333333" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" fill="blue"></path>
                                        <circle cx="8.5" cy="9.5" r="1.5" stroke="#333333"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></circle>
                                        <circle cx="15.5" cy="15.5" r="1.5" stroke="#333333"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></circle>
                                        <path d="M17 8.00001L8.00003 16" stroke="#333333" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" fill="blue"></path>
                                    </svg>
                                </span>
                            </span>
                            <a href="{{ route('admin.our_promo') }}" class="menu-title">Our Promo</a>
                        </span>
                    </div>
                @endif--}}

                

                

               

                {{-- @if (showModule('our_partners', $permissions))
                <div class="menu-item here menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg style="color: blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M22 12a9.966 9.966 0 0 1-.832 4M12 22a9.966 9.966 0 0 0 7.071-2.929M2 12a9.966 9.966 0 0 1 2.929-7.071M12 2a9.966 9.966 0 0 0-4 .832m0 18.336A10.02 10.02 0 0 1 2.832 16m13-13A10.02 10.02 0 0 1 21 8.168"
                                        fill="blue"></path>
                                    <path fill="blue" fill-rule="evenodd"
                                        d="M7.545 12.095a4.55 4.55 0 0 1 9.068-.54c-2.271.051-3.942.557-5.143 1.284 1.085.378 2.17 1.018 3.007 2.059a.75.75 0 0 1-1.169.94c-.79-.981-1.907-1.524-3.049-1.789a8.265 8.265 0 0 0-2.359-.19 4.535 4.535 0 0 1-.355-1.764zm4.55-6.36a6.36 6.36 0 1 0 0 12.72 6.36 6.36 0 0 0 0-12.72zm-1.909 3.087c-.224 0-.547.063-.83.267-.31.224-.534.592-.534 1.097s.223.873.534 1.097c.283.204.606.267.83.267.224 0 .547-.063.83-.267.311-.224.534-.592.534-1.097s-.223-.873-.534-1.097a1.459 1.459 0 0 0-.83-.267z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </span>
                            <a href="/admin/our-partner/detail?our_partner_id=1"><span class="menu-title">Partners</span></a>
                        </span>
                    </div>
                @endif

                @if (showModule('otorisasi', $permissions))
                <div class="menu-item here menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg style="color: blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M22 12a9.966 9.966 0 0 1-.832 4M12 22a9.966 9.966 0 0 0 7.071-2.929M2 12a9.966 9.966 0 0 1 2.929-7.071M12 2a9.966 9.966 0 0 0-4 .832m0 18.336A10.02 10.02 0 0 1 2.832 16m13-13A10.02 10.02 0 0 1 21 8.168"
                                        fill="blue"></path>
                                    <path fill="blue" fill-rule="evenodd"
                                        d="M7.545 12.095a4.55 4.55 0 0 1 9.068-.54c-2.271.051-3.942.557-5.143 1.284 1.085.378 2.17 1.018 3.007 2.059a.75.75 0 0 1-1.169.94c-.79-.981-1.907-1.524-3.049-1.789a8.265 8.265 0 0 0-2.359-.19 4.535 4.535 0 0 1-.355-1.764zm4.55-6.36a6.36 6.36 0 1 0 0 12.72 6.36 6.36 0 0 0 0-12.72zm-1.909 3.087c-.224 0-.547.063-.83.267-.31.224-.534.592-.534 1.097s.223.873.534 1.097c.283.204.606.267.83.267.224 0 .547-.063.83-.267.311-.224.534-.592.534-1.097s-.223-.873-.534-1.097a1.459 1.459 0 0 0-.83-.267z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </span>
                            <a href="/admin/otorisasi/detail?our_partner_id=2"><span class="menu-title">Otorisasi</span></a>
                        </span>
                    </div>
                @endif --}}
                
                @if (showModule('user_groups', $permissions) || showModule('users', $permissions))
                    <div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg style="color: blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path
                                            d="M512 160c44.18 0 80-35.82 80-80S556.2 0 512 0c-44.18 0-80 35.82-80 80S467.8 160 512 160zM128 160c44.18 0 80-35.82 80-80S172.2 0 128 0C83.82 0 48 35.82 48 80S83.82 160 128 160zM319.9 320c57.41 0 103.1-46.56 103.1-104c0-57.44-46.54-104-103.1-104c-57.41 0-103.1 46.56-103.1 104C215.9 273.4 262.5 320 319.9 320zM368 400c0-16.69 3.398-32.46 8.619-47.36C374.3 352.5 372.2 352 369.9 352H270.1C191.6 352 128 411.7 128 485.3C128 500.1 140.7 512 156.4 512h266.1C389.5 485.6 368 445.5 368 400zM183.9 216c0-5.449 .9824-10.63 1.609-15.91C174.6 194.1 162.6 192 149.9 192H88.08C39.44 192 0 233.8 0 285.3C0 295.6 7.887 304 17.62 304h199.5C196.7 280.2 183.9 249.7 183.9 216zM551.9 192h-61.84c-12.8 0-24.88 3.037-35.86 8.24C454.8 205.5 455.8 210.6 455.8 216c0 21.47-5.625 41.38-14.65 59.34C462.2 263.4 486.1 256 512 256c42.48 0 80.27 18.74 106.6 48h3.756C632.1 304 640 295.6 640 285.3C640 233.8 600.6 192 551.9 192zM618.1 366.7c-5.025-16.01-13.59-30.62-24.75-42.71c-1.674-1.861-4.467-2.326-6.699-1.023l-19.17 11.07c-8.096-6.887-17.4-12.28-27.45-15.82V295.1c0-2.514-1.861-4.746-4.281-5.213c-16.56-3.723-33.5-3.629-49.32 0C484.9 291.2 483.1 293.5 483.1 295.1v22.24c-10.05 3.537-19.36 8.932-27.45 15.82l-19.26-11.07c-2.139-1.303-4.932-.8379-6.697 1.023c-11.17 12.1-19.73 26.71-24.66 42.71c-.7441 2.512 .2793 5.117 2.42 6.326l19.17 11.17c-1.859 10.42-1.859 21.21 0 31.64l-19.17 11.17c-2.234 1.209-3.164 3.816-2.42 6.328c4.932 16.01 13.49 30.52 24.66 42.71c1.766 1.863 4.467 2.328 6.697 1.025l19.26-11.07c8.094 6.887 17.4 12.28 27.45 15.82v22.24c0 2.514 1.77 4.746 4.188 5.211c16.66 3.723 33.5 3.629 49.32 0c2.42-.4648 4.281-2.697 4.281-5.211v-22.24c10.05-3.535 19.36-8.932 27.45-15.82l19.17 11.07c2.141 1.303 5.025 .8379 6.699-1.025c11.17-12.1 19.73-26.7 24.75-42.71c.7441-2.512-.2773-5.119-2.512-6.328l-19.17-11.17c1.953-10.42 1.953-21.22 0-31.64l19.17-11.17C618.7 371.8 619.7 369.2 618.1 366.7zM512 432c-17.67 0-32-14.33-32-32c0-17.67 14.33-32 32-32s32 14.33 32 32C544 417.7 529.7 432 512 432z"
                                            fill="blue"></path>
                                    </svg>
                                </span>
                            </span>
                            <span class="menu-title">User Management</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                            @if (showModule('user_groups', $permissions))
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('admin.user_groups') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">User Groups</span>
                                    </a>
                                </div>
                            @endif
                            @if (showModule('users', $permissions))
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('admin.users') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Users</span>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                @endif

                @if (showModule('settings', $permissions))
                    <div class="menu-item here menu-accordion">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg style="color: blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #fff;
                                                    opacity: 0;
                                                }

                                                .cls-2 {
                                                    fill: #231f20;
                                                }
                                            </style>
                                        </defs>
                                        <title>settings-2</title>
                                        <g id="Layer_2" data-name="Layer 2">
                                            <g id="settings-2">
                                                <g id="settings-2-2" data-name="settings-2">
                                                    <rect class="cls-1" width="24" height="24"
                                                        transform="translate(24 24) rotate(180)"></rect>
                                                    <g id="_Group_" data-name="<Group>">
                                                        <path class="cls-2"
                                                            d="M12.94,22H11.05a1.68,1.68,0,0,1-1.68-1.68V19.23a.34.34,0,0,0-.22-.29.38.38,0,0,0-.41,0L8,19.74a1.67,1.67,0,0,1-2.37,0L4.26,18.4a1.66,1.66,0,0,1-.5-1.19A1.72,1.72,0,0,1,4.26,16L5,15.26a.34.34,0,0,0,0-.37c-.06-.15-.16-.26-.3-.26H3.68A1.69,1.69,0,0,1,2,12.94V11.05A1.68,1.68,0,0,1,3.68,9.37H4.77a.34.34,0,0,0,.29-.22.38.38,0,0,0,0-.41L4.26,8a1.67,1.67,0,0,1,0-2.37L5.6,4.26a1.65,1.65,0,0,1,1.18-.5h0A1.72,1.72,0,0,1,8,4.26L8.74,5a.34.34,0,0,0,.37,0c.15-.06.26-.16.26-.3V3.68A1.69,1.69,0,0,1,11.06,2H13a1.68,1.68,0,0,1,1.68,1.68V4.77a.34.34,0,0,0,.22.29.38.38,0,0,0,.41,0L16,4.26a1.67,1.67,0,0,1,2.37,0L19.74,5.6a1.67,1.67,0,0,1,.5,1.19A1.63,1.63,0,0,1,19.74,8L19,8.74a.34.34,0,0,0,0,.37c.06.15.16.26.3.26h1.09A1.69,1.69,0,0,1,22,11.06V13a1.68,1.68,0,0,1-1.68,1.68H19.23a.34.34,0,0,0-.29.22v0a.34.34,0,0,0,0,.37l.77.77a1.67,1.67,0,0,1,0,2.37L18.4,19.74a1.65,1.65,0,0,1-1.18.5h0a1.72,1.72,0,0,1-1.19-.5L15.26,19a.34.34,0,0,0-.37,0c-.15.06-.26.16-.26.3v1.09A1.69,1.69,0,0,1,12.94,22Zm-1.57-2h1.26v-.77a2.33,2.33,0,0,1,1.46-2.14,2.36,2.36,0,0,1,2.59.47l.54.54.88-.88-.54-.55a2.34,2.34,0,0,1-.48-2.56h0v0a2.33,2.33,0,0,1,2.14-1.45H20V11.37h-.77a2.33,2.33,0,0,1-2.14-1.46,2.36,2.36,0,0,1,.47-2.59l.54-.54-.88-.88-.55.54a2.39,2.39,0,0,1-4-1.67V4H11.37v.77A2.33,2.33,0,0,1,9.91,6.91a2.36,2.36,0,0,1-2.59-.47L6.78,5.9l-.88.88.54.55a2.39,2.39,0,0,1-1.67,4H4v1.26h.77a2.33,2.33,0,0,1,2.14,1.46,2.36,2.36,0,0,1-.47,2.59l-.54.54.88.88.55-.54a2.39,2.39,0,0,1,4,1.67Z"
                                                            fill="blue"></path>
                                                    </g>
                                                    <path class="cls-2"
                                                        d="M12,15.5A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Zm0-5A1.5,1.5,0,1,0,13.5,12,1.5,1.5,0,0,0,12,10.5Z"
                                                        fill="blue">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                            </span>
                            @if (isAllowed('settings', 'general'))
                            <a href="{{ route('admin.settings.general') }}"><span class="menu-title">Settings</span></a>
                            @endif
                        </span>
                    </div>
                @endif
                
                {{-- @if (showModule('settings', $permissions))
                    <div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg style="color: blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #fff;
                                                    opacity: 0;
                                                }

                                                .cls-2 {
                                                    fill: #231f20;
                                                }
                                            </style>
                                        </defs>
                                        <title>settings-2</title>
                                        <g id="Layer_2" data-name="Layer 2">
                                            <g id="settings-2">
                                                <g id="settings-2-2" data-name="settings-2">
                                                    <rect class="cls-1" width="24" height="24"
                                                        transform="translate(24 24) rotate(180)"></rect>
                                                    <g id="_Group_" data-name="<Group>">
                                                        <path class="cls-2"
                                                            d="M12.94,22H11.05a1.68,1.68,0,0,1-1.68-1.68V19.23a.34.34,0,0,0-.22-.29.38.38,0,0,0-.41,0L8,19.74a1.67,1.67,0,0,1-2.37,0L4.26,18.4a1.66,1.66,0,0,1-.5-1.19A1.72,1.72,0,0,1,4.26,16L5,15.26a.34.34,0,0,0,0-.37c-.06-.15-.16-.26-.3-.26H3.68A1.69,1.69,0,0,1,2,12.94V11.05A1.68,1.68,0,0,1,3.68,9.37H4.77a.34.34,0,0,0,.29-.22.38.38,0,0,0,0-.41L4.26,8a1.67,1.67,0,0,1,0-2.37L5.6,4.26a1.65,1.65,0,0,1,1.18-.5h0A1.72,1.72,0,0,1,8,4.26L8.74,5a.34.34,0,0,0,.37,0c.15-.06.26-.16.26-.3V3.68A1.69,1.69,0,0,1,11.06,2H13a1.68,1.68,0,0,1,1.68,1.68V4.77a.34.34,0,0,0,.22.29.38.38,0,0,0,.41,0L16,4.26a1.67,1.67,0,0,1,2.37,0L19.74,5.6a1.67,1.67,0,0,1,.5,1.19A1.63,1.63,0,0,1,19.74,8L19,8.74a.34.34,0,0,0,0,.37c.06.15.16.26.3.26h1.09A1.69,1.69,0,0,1,22,11.06V13a1.68,1.68,0,0,1-1.68,1.68H19.23a.34.34,0,0,0-.29.22v0a.34.34,0,0,0,0,.37l.77.77a1.67,1.67,0,0,1,0,2.37L18.4,19.74a1.65,1.65,0,0,1-1.18.5h0a1.72,1.72,0,0,1-1.19-.5L15.26,19a.34.34,0,0,0-.37,0c-.15.06-.26.16-.26.3v1.09A1.69,1.69,0,0,1,12.94,22Zm-1.57-2h1.26v-.77a2.33,2.33,0,0,1,1.46-2.14,2.36,2.36,0,0,1,2.59.47l.54.54.88-.88-.54-.55a2.34,2.34,0,0,1-.48-2.56h0v0a2.33,2.33,0,0,1,2.14-1.45H20V11.37h-.77a2.33,2.33,0,0,1-2.14-1.46,2.36,2.36,0,0,1,.47-2.59l.54-.54-.88-.88-.55.54a2.39,2.39,0,0,1-4-1.67V4H11.37v.77A2.33,2.33,0,0,1,9.91,6.91a2.36,2.36,0,0,1-2.59-.47L6.78,5.9l-.88.88.54.55a2.39,2.39,0,0,1-1.67,4H4v1.26h.77a2.33,2.33,0,0,1,2.14,1.46,2.36,2.36,0,0,1-.47,2.59l-.54.54.88.88.55-.54a2.39,2.39,0,0,1,4,1.67Z"
                                                            fill="blue"></path>
                                                    </g>
                                                    <path class="cls-2"
                                                        d="M12,15.5A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Zm0-5A1.5,1.5,0,1,0,13.5,12,1.5,1.5,0,0,0,12,10.5Z"
                                                        fill="blue">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                            </span>
                            <span class="menu-title">Settings</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                            @if (isAllowed('settings', 'general'))
                            <div class="menu-item">
                                <a class="menu-link" href="{{ route('admin.settings.general') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">General</span>
                                </a>
                            </div>
                            @endif --}}
                            {{-- @if (isAllowed('settings', 'overview'))
                            <div class="menu-item">
                                <a class="menu-link" href="{{ route('admin.settings.overview') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Overview</span>
                                </a>
                            </div>
                            @endif --}}
                            {{-- @if (isAllowed('settings', 'smtp')) --}}
                                {{-- <div class="menu-item">
                                    <a class="menu-link" href="{{ route('admin.settings.smtp') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">SMTP</span>
                                    </a>
                                </div> --}}
                                {{-- @endif --}}
                            {{-- <div class="menu-item">
                                <a class="menu-link" href="{{ route('admin.bank_accounts') }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Bank Accounts</span>
                                </a>
                            </div> --}}
                        {{-- </div>
                    </div>
                @endif --}}

                
                
                {{-- @if (showModule('systems', $permissions))
                    <div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg style="color: blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M17,1H3A2,2,0,0,0,1,3H1v9H3V3H17Z" fill="blue"></path>
                                        <path
                                            d="M21,5H7A2,2,0,0,0,5,7V17a2,2,0,0,0,2,2h5.53v1.53H11V22h6V20.52H15.48V19H21a2,2,0,0,0,2-2V7A2,2,0,0,0,21,5Zm0,12H7V7H21Z"
                                            fill="blue"></path>
                                    </svg>
                                </span>
                            </span>
                            <span class="menu-title">System</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                            @if (isAllowed('systems', 'logs'))
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('admin.logs') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Logs</span>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                @endif --}}
            </div>
        </div>

        {{-- -------------------------------------------------------------------------------------------------------------------------------------------------- --}}



    </div>
</div>
</div>
</div>


</div>
