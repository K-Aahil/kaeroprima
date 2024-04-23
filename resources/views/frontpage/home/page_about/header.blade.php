<style>
    #history>p {
        color: #586174;

    }
</style>
<div class="row">
    <div class="col-md-6 col-sm-6 col-12 order-2">
        <img src="{{ asset_administrator('assets/media/about_us/' . $about_us[0]->image) }}" alt="" class="w-100">
    </div>
    <div class="col-md-6 col-sm-6 col-12 order-2 order-sm-1 order-md-1 d-flex flex-column">
        <div class="">
            <p class="text-bold text-blue">{{ $about_us[0]->sub_title }}</p>
            <p class="fs-1 text-alternate-primary text-bold">{{ $about_us[0]->title }}</p>
            <div id="history">{!! $about_us[0]->description !!}</div>
        </div>
        @if ($about_us[0]->show_button === 1)
            <div class="mt-auto mb-5">
            <button class="btn-blue text-bold px-3"> <a class="text-decoration-none text-white" href="{{ $about_us[0]->button_url }}">{{ $about_us[0]->button_text }}</button></a>
            @if($about_us[0]->button_make != '')
            <button class="btn-blue-invert text-bold px-3"> <a class="text-decoration-none " href="{{ $about_us[0]->button_url_make }}">{{ $about_us[0]->button_make }}</button></a>
            </div>
        @endif
        @endif
    </div>
</div>
