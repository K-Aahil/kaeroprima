@extends('frontpage.layouts.main')
@push('styles')
    @section('content')
        <img src="frontpage/assets/images/banner-about.png" alt="" class="w-full h-[42em]" />
        <section class="bg-[#3C2415] pt-[6.938em]">
            <div class="items-start mx-auto xl:gap-16 md:grid md:grid-cols-2 px-[8.4em]">
                <h2 class="text-[4.375em] font-black text-[#AD976E] font-avenir">About Us</h2>
                <div class="mt-4 md:mt-0">
                    <p class="text-white text-[1.125em] font-normal font-avenir">
                        Established in 2017, PT Kaero Prima Indonesia has quickly risen to
                        prominence as a reputable and trusted provider of comprehensive
                        building solutions. Our dedication to excellence and customer
                        satisfaction has been the driving force behind our success.
                        <br />
                        <br />
                        We have continuously strived to set new industry standards by
                        integrating innovative technologies and staying abreast of the
                        latest advancements in the field. Our commitment to research and
                        development has allowed us to offer cutting-edge products and
                        services that cater to the diverse needs of our valued customers
                        both locally and globally.
                    </p>
                </div>
            </div>
            <div class="mx-auto px-[8.4em] flex justify-between items-center mt-[9.375em]">
                <div class="mt-4 md:mt-0 w-[35.5em]">
                    <p class="mb-6 text-[1.125em] font-normal text-white font-avenir">
                        Our team is comprised of highly skilled professionals who have been
                        carefully selected for their expertise and dedication. Through their
                        collective efforts, we have been able to foster a culture of
                        collaboration and excellence within the organization, ensuring that
                        we consistently deliver top-notch solutions that exceed our clients'
                        expectations. We take great pride in our team's passion for staying
                        ahead of the curve and their unwavering commitment to upholding the
                        highest industry standards.
                        <br />
                        <br />
                        At PT Kaero Prima Indonesia, we recognize the importance of
                        fostering strong partnerships, both domestically and
                        internationally. Through strategic collaborations with esteemed
                        partners, we have been able to leverage a global network of
                        insights, resources, and best practices. This has enabled us to
                        expand our reach and deliver world-class solutions that align with
                        international standards, further solidifying our position as a
                        global leader in the industry.
                        <br />
                        <br />
                        In addition to our business operations, we remain deeply committed
                        to corporate responsibility and sustainable practices. By
                        integrating environmentally friendly initiatives into our business
                        model, we aim to contribute positively to society and minimize our
                        ecological footprint. Our focus on sustainability not only reflects
                        our dedication to responsible business practices but also
                        underscores our commitment to leaving a lasting, positive impact on
                        the communities we serve.
                    </p>
                </div>
                <img class="lg:w-[437px] lg:h-[590px] right-0" src="frontpage/assets/images/about-img.png"
                    alt="dashboard image" />
            </div>
            <div class="items-start mx-auto xl:gap-16 md:grid md:grid-cols-2 px-[8.4em] pb-[7.125em] mt-[5.375em]">
                <h2 class="text-[4.375em] font-black text-[#AD976E] font-avenir">Our Goal</h2>
                <div class="mt-4 md:mt-0">
                    <p class="text-white text-[1.125em] font-normal font-avenir">
                        To establish a strong reputation as a comprehensive provider of
                        building materials and solutions in the Indonesian market. We aspire
                        to become a recognized and trusted go-to source for all construction
                        needs, offering a wide range of products and services to meet the
                        diverse requirements of our customers.
                    </p>
                </div>
            </div>
        </section>
    @endsection

@endpush
