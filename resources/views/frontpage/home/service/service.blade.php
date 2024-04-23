<section class="servicesection d-flex flex-column" id="services" style="background-image: url('{{ img_src($settings['services_background'], "services_background") }}');">
    <div class="container p-0">
        <h6 data-aos="fade-right" class="judul_section mb-5">SERVICES</h6>
        <div class="">
            <div class="col-md-6 col-sm-6 p-0">
                <div data-aos="fade-right" class="card">
                    <div class="card-body" style="word-spacing:10px;" >
                        <h5 class="card-title">Service We Offers</h5>
                        <p class="card-text" >{!! $settings['services_overview'] !!}</p>
                        <a href="{{ $settings['services_link'] }}" class="btn btn-primary mt-4">Discover</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>