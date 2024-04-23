<style>
    #sejarah > p{
        color: white;
    }
</style>
<div class="mx-md-5 mx-sm-3 mx-3" style="margin-top: 10vh;">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-12 my-5">
            <p class="text-white">{{ $about_us[0]->how_sub_title }}</p>
            <p class="text-pink fs-2 text-bold">{{ $about_us[0]->how_title }}</p>
                <div id="sejarah">{!! $about_us[0]->how_description !!}</div>
         </div>
        <div class="col-md-6 col-sm-6 col-12">
            <img src="{{ asset_administrator('assets/media/about_us/' .  $about_us[0]->image_front) }}" alt="" class="img-shadow w-100">
        </div>
    </div>
</div>
