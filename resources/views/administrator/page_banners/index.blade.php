@extends('administrator.layouts.main')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Page Banners</h1>
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-dark">Page Banners</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <form id="form_add" class="form d-flex flex-column flex-lg-row"
                    action="{{ route('admin.page-banners.updateGeneral') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <div class="card card-flush py-4">
                            <div class="card-body pt-0">
                        <div class="mb-10 fv-row">
                            <div class="" data-kt-ecommerce-catalog-add-product="auto-options">
                                <label class="form-label mb-5" name="pages[about-us][nama]" class="form-control mb-2"><h2>About us</h2></label>
                                <div id="kt_ecommerce_add_social_media_options">
                                <div class="mb-10 fv-row"> 
                                    <label class="form-label">Banner</label><br>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 150px;">
                                            <img src="{{ img_src($banner_about->banner, "page_banners") }}">
                                        </div>
                                        <div>
                                            <a href="#" class="btn btn-light fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            <span class="btn btn-light btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="pages[about-us][banner]">
                                            </span>
                                        </div>
                                        </div>
                                    
                                    <div class="text-muted fs-7">
                                    </div>
                                </div>           
                            <div class="form-group mb-3 add-social_media-list" childidx="0">
                                <div data-repeater-list="kt_ecommerce_add_social_media_options" class="d-flex flex-column gap-3">
                                    <div data-repeater-item="" class="form-group d-flex flex-wrap gap-5">
                                        <div class="d-flex">
                                            <input type="text" class="form-control mw-100 w-200px title" name="pages[about-us][title]" placeholder="title" value="{{$banner_about->title}}"/>
                                        </div>
                                    </div>
                                    <div>
                                        <textarea type="text" class="ckeditor ms-3 mw-100 w-300px description" name="pages[about-us][description]" placeholder="description" value="{{$banner_about->description}}">{{$banner_about->description}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-10 fv-row">
                            <div class="" data-kt-ecommerce-catalog-add-product="auto-options">
                                <label class="form-label mb-5" name="pages[services][nama]" class="form-control mb-2"><h2>Services</h2></label>
                                <div id="kt_ecommerce_add_social_media_options">
                                <div class="mb-10 fv-row"> 
                                    <label class="form-label">Banner</label><br>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 150px;">
                                            <img src="{{ img_src($banner_service->banner, "page_banners") }}">
                                        </div>
                                        <div>
                                            <a href="#" class="btn btn-light fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            <span class="btn btn-light btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="pages[services][banner]">
                                            </span>
                                        </div>
                                        </div>
                                    
                                    <div class="text-muted fs-7">
                                    </div>
                                </div>           
                            <div class="form-group mb-3 add-social_media-list" childidx="0">
                                <div data-repeater-list="kt_ecommerce_add_social_media_options" class="d-flex flex-column gap-3">
                                    <div data-repeater-item="" class="form-group d-flex flex-wrap gap-5">
                                        <div class="d-flex">
                                            <input type="text" class="form-control mw-100 w-200px title" name="pages[services][title]" placeholder="title" value="{{$banner_service->title}}"/>
                                        </div>
                                    </div>
                                    <div>
                                        <textarea type="text" class="ckeditor ms-3 mw-100 w-300px description" name="pages[services][description]" placeholder="description" value="{{$banner_service->description}}">{{$banner_service->description}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-10 fv-row">
                            <div class="" data-kt-ecommerce-catalog-add-product="auto-options">
                                <label class="form-label mb-5" name="pages[partners][nama]" class="form-control mb-2"><h2>Partners</h2></label>
                                <div id="kt_ecommerce_add_social_media_options">
                                <div class="mb-10 fv-row"> 
                                    <label class="form-label">Banner</label><br>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 150px;">
                                            <img src="{{ img_src($banner_partner->banner, "page_banners") }}">
                                        </div>
                                        <div>
                                            <a href="#" class="btn btn-light fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            <span class="btn btn-light btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="pages[partners][banner]">
                                            </span>
                                        </div>
                                        </div>
                                    
                                    <div class="text-muted fs-7">
                                    </div>
                                </div>           
                            <div class="form-group mb-3 add-social_media-list" childidx="0">
                                <div data-repeater-list="kt_ecommerce_add_social_media_options" class="d-flex flex-column gap-3">
                                    <div data-repeater-item="" class="form-group d-flex flex-wrap gap-5">
                                        <div class="d-flex">
                                            <input type="text" class="form-control mw-100 w-200px title" name="pages[partners][title]" placeholder="title" value="{{$banner_partner->title}}"/>
                                        </div>
                                    </div>
                                    <div>
                                        <textarea type="text" class="ckeditor ms-3 mw-100 w-300px description" name="pages[partners][description]" placeholder="description" value="{{$banner_partner->description}}">{{$banner_partner->description}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        @foreach($page_banners as $index=>$page)
                        <div class="mb-10 fv-row">
                            <div class="" data-kt-ecommerce-catalog-add-product="auto-options">
                                <label class="form-label mb-5" name="pages[{{str_slug($page->title)}}][nama]" class="form-control mb-2"><h2>{{$page->title}}</h2></label>
                                <div id="kt_ecommerce_add_social_media_options">
                                <div class="mb-10 fv-row"> 
                                    <label class="form-label">Banner</label><br>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 150px;">
                                            <img src="{{ img_src($page->banner_page, "page_banners") }}">
                                        </div>
                                        <div>
                                            <a href="#" class="btn btn-light fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            <span class="btn btn-light btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="pages[{{str_slug($page->title)}}][banner]">
                                            </span>
                                        </div>
                                        </div>
                                    
                                    <div class="text-muted fs-7">
                                    </div>
                                </div>           
                            <div class="form-group mb-3 add-social_media-list" childidx="0">
                                <div data-repeater-list="kt_ecommerce_add_social_media_options" class="d-flex flex-column gap-3">
                                    <div data-repeater-item="" class="form-group d-flex flex-wrap gap-5">
                                        <div class="d-flex">
                                            <input type="text" class="form-control mw-100 w-200px title" name="pages[{{str_slug($page->title)}}][title]" placeholder="title" value="{{$page->title_page}}"/>
                                            <input type="hidden" name="pages[{{str_slug($page->title)}}][page_id]" value="{{$page->id}}"/>
                                        </div>
                                    </div>
                                    <div>
                                        <textarea type="text" class="ckeditor ms-3 mw-100 w-300px description" name="pages[{{str_slug($page->title)}}][description]" placeholder="description" value="{{$page->description_page}}">{{$page->description_page}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        @endforeach
                    </div>
                </div>
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
</div>
@endsection

@push('scripts')
<script src="{{ asset_administrator('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
<script src="{{ asset_administrator('assets/js/custom/apps/ecommerce/setting/setting.js') }}"></script>
<script src="{{ asset_administrator('assets/js/custom/documentation/documentation.js') }}"></script>
<script src="{{ asset_administrator('assets/js/custom/documentation/search.js') }}"></script>
<script src="{{ asset_administrator('assets/js/custom/documentation/forms/select2.js') }}"></script>
<script src="{{ asset_administrator('assets/plugins/custom/form-jasnyupload/fileinput.min.js') }}"></script>
<script src="{{ asset_administrator('ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
    $('.add-social_media').click(function (e) {
        console.log(e);
        e.preventDefault();
        addSocialMedia()
    });

    function addSocialMedia(title = '', description = '') {
        var tr_clone = $(".add-social_media-list").clone();
        tr_clone.removeClass('add-social_media-list');
        tr_clone.addClass('list-social_media');
        tr_clone.find('.title').val(title);
        tr_clone.find('.description').val(icon);
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
    CKEDITOR.replace('description');
</script>

@if(!empty($page_banners['page_banner']))
    @php
        $page_banner = json_encode($page_banners['page_banner']);
    @endphp
    <script>
        let page_banner = {!! $page_banner !!};
        var page_banners = JSON.parse(page_banner)
        console.log(typeof page_banners);
        page_banners.forEach(index => {
            addSocialMedia(index.title, index.icon, index.link)
        });
    </script>
@endif
@endpush
