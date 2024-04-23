@php $navbar = Layout::getLayout() @endphp
<div class="container-fluid">
    <h4>Our Promo</h4>
    <div class="promo-content">
        <img src="{{ asset_frontpage('assets/images/promo2.png') }}" alt="promo">
        <div class="text text-start">
            <h2>This Is Our Promo Special</h2>
            <h6>Hai semua kami dari dewa medika mempunyai berbagi promo lohh yang pastinya akan membuat anda senang dan juga menjadi anda lebih happy untuk mengunjungi kami terus.</h6>
        </div>
    </div>
    
    <div class="promo-list">
        <div class="row justify-content-center">  
            @foreach ($our_promos as $row)
            <div class="col-md-4 col-sm-4 promo-item d-flex align-items-stretch">
                <div class="card">
                    <img src="{{ asset_frontpage('assets/images/promo.png') }}" alt="promo">
                    <div class="card-body text-center d-flex flex-column">
                        <p class="title_service">{{ $row->title_service }}</p>
                        <p class="title">{{ $row->title }}</p>
                        <p class="sub_title">{{ $row->sub_title }}</p>
                        <div class="desc">{!! $row->description !!}</div>
                        @if ($row->price != 0)
                            <p class="dc-price mt-auto">
                                <del>
                                    Rp. {{ number_format($row->price) }}
                                </del>
                            </p>
                        @endif
                        @if(!empty($row->discount_price))
                            {{-- <#?php $discount_price = explode(',', number_format($row->discount_price));?> --}}
                            <p class="price mt-auto">Rp. {{ number_format($row->discount_price) }}
                                {{-- <span style='font-size :36px;'>
                                    {{ $discount_price[0] }}
                                </span>.{{ $discount_price[1] }} --}}
                            </p>
                        @endif
                        <p class="catatan">
                            {{ $row->information }}
                        </p>
                        {{-- <a href="https://wa.me/{{ $navbar['settings']['whatsapp_promo'] }}" target="_blank" class="btn btn-kontak mt-auto">Hubungi Kami</a target="_blank" href=""> --}}
                    </div>
                </div>
                </div>
            @endforeach  
        </div>
    </div>
</div>