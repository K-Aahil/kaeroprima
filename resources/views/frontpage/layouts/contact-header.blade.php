<!-- header -->
<!-- <div class="navigat">
    <div class="container" style="padding: 0;">
        <div class="d-flex flex-row-reverse bd-highlight" id="header">
            <div class="p-3 bg-highlight " style="text-decoration: none;">
                <i class="fa-regular mx-1 fa-map bg-succes" style="color:#fff;"></i>
                <a target="_blank" class=" text_nav" href="#" style="text-decoration:none">Bandung</a>
                <i class="fa-solid mx-1 fa-arrow-right bg-succes" style="color:#fff;"></i>
            </div>
            <div class="p-3 bg-highlight mx-5 ">
                <i class="fa-regular mx-1 fa-flag" style="color:#fff;"></i>
                <a class="text_nav" href="#" style="text-decoration:none">{{ $navbar['settings']['office_hours'] }}</a>
            </div>
            <div class="p-3 bg-highlight">
                <i class="fa-regular mx-1 fa-envelope" style="color:#fff;"></i>
                <a class="text_nav" href="#" style="text-decoration:none">{{ $navbar['settings']['email'] }}</a>
            </div>
        </div>
    </div>
</div> -->
<!-- endheader -->
{{-- {{ json_encode($navbar['settings'])}} --}}
{{-- navbar --}}
<div class="container-fluid" style="padding: 0;">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparant mx-5" id="navmenu">
        <div class="container p-0">
            <a class="navbar-brand" href="{{ route("home") }}">
                <img class="logo" src="{{ asset_administrator("assets/media/settings/". $navbar['settings']['logo_navbar']) }}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto d-flex align-items-center">
                    @if (!empty($navbar['navbar']))
                        @if ($navbar['navbar'] != '-')
                            @foreach ($navbar['navbar']->items as $item)
                            @if (count($item->child) <= 0)
                                <li class="nav-item">
                                    <a class="nav-link-contact hover-underline-animation-contact mx-5 {{ url()->full() == $item->link ? 'active' : '' }}" aria-current="page" href="{{ $item->link }}">
                                        {{ session()->get('locale') == 'en' ? $item->class : $item->label }}
                                    </a>
                                </li>
                            @else
                            <li class="nav-item dropdown">
                                <a class="nav-link-contact hover-underline-animation-contact mx-5 dropdown-toggle" id="menuLayanan" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="javascript:void(0)">
                                    {{ $item->label }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="menuLayanan">
                                    @foreach ($item->child as $item)
                                        <li>
                                            <a class="dropdown-item" href="{{ $item->link }}">
                                                {{ session()->get('locale') == 'en' ? $item->class : $item->label }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            @endif
                            @endforeach
                        @endif
                    @endif
                    <li class="nav-item">
                        <a href="tel:{{$navbar['settings']['phone']}}" alt="call {{$navbar['settings']['phone']}}">
                            <button class="btnnav btn-primary me-2" type="button">
                                <i class="fa-solid fa-phone mx-2"></i>+{{$navbar['settings']['phone']}}</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
{{-- end navbar --}}