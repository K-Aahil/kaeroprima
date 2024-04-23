<style>
.card-body {
    border-radius: 2px;
    border-left: 3px solid #ED5D8E;
    background: #FFF;
    box-shadow: 0px 7px 29px 0px rgba(100, 100, 111, 0.20) ;
    display: flex;
    padding: 10px 15px;
    justify-content: center;
    align-items: center;
    gap: 10px;
}
.card-body > p {
    text-align: left;
    color: #ED5D8E;
    font-family: Montserrat;
    font-size: 19px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
    letter-spacing: 0.9px;
    margin-bottom: 0em;
}
#pekerja_id > p{
    color: #586174;
    font-family: Montserrat;
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    letter-spacing: 0.7px;
}
</style>
<div class="row">
    <div class="col-md-6 col-sm-6 col-12">
        <img src="{{ asset_administrator('assets/media/about_us/' .  $about_us[0]->employees_image) }}" alt="" class="w-100">
    </div>
    <div class="col-md-6 col-sm-6 col-12">
        <p class="text-blue text-semibold mt-none">{{ $about_us[0]->employees_sub_title }}</p>
        <p class="text-bold text-alternate-primary fs-4">{{ $about_us[0]->employees_title }}</p>
        <div class="card">
            <div class="card-body">
                {!! $about_us[0]->employees_caption !!}
            </div>
          </div>
        <div id="pekerja_id"><P>{!! $about_us[0]->employees_description !!}</P></div>
    </div>
</div>
