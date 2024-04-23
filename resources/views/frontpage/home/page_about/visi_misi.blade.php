<style>
    #visi_id>p {
        color: #586174;
        font-family: Montserrat;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        letter-spacing: 0.7px;
    }
</style>
<div class="row mx-0 gy-md-0 gy-sm-0 gy-5">
    <div class="col-md-6 col-sm-6 col-12 px-md-5 px-sm-3 px-3 order-md-fist order-sm-first order-last">
        <p class="text-blue text-semibold">{{ $about_us[0]->visi_sub_title }}</p>
        <p class="text-alternate-primary fs-2 text-bold">{{ $about_us[0]->visi_title }}
        </p>
        <p class="text-bold fs-4 text-alternate-primary">Visi</p>
        <div>
            <div id="visi_id">
                <p class="text-bold fs-2 text-alternate-primary">{!! $about_us[0]->visi !!}</p>
            </div>
            <p class="text-bold fs-4 text-alternate-primary">Misi</p>
            <div id="visi_id">
                <p class="text-alternate-primary">{!! $about_us[0]->misi !!}</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-12 px-0">
        <img src="{{ asset_administrator('assets/media/about_us/' . $about_us[0]->visi_image) }}" alt=""
            class="w-100 mx-0">
    </div>
</div>
