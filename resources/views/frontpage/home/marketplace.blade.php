@extends('frontpage.layouts.main')
@push('styles')
@php $navbar = Layout::getLayout() @endphp
@section('content')
    <section id="marketplace">
        <div class="container-fluid">
            <div class="deskripsi">
                <div class="text">
                    <h2>Marketplace</h2>
                    <h6>Beberapa product dewa medika yang akan membuat anda lebih sehat</h6>
                </div>
                <div class="image">
                    <img src="{{ asset_frontpage('assets/images/marketplace.png') }}" alt="Marketplace">
                </div>
            </div>
            <div class="row marketplace-list justify-content-center">
                @foreach ($query_new_products as $item) 
                <div class="col-lg-3 col-md-4 col-sm-4 marketplace-item d-flex align-items-stretch">
                    <div class="card">
                        @if(count($item->images)>0)
                            @foreach ($item->images as $image)
                            <img src="{{ asset_administrator('assets/media/products/'.$image->data_file) }}" alt="Produk">
                            @endforeach
                        @else
                            <img src="{{ asset_frontpage('assets/images/no photo.jpg') }}" alt="Produk">
                        @endif
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $item->name}}</h5>
                            <div class="desc">{!! strip_tags(substr($item->description, 0, 80)) !!}{!! '...' !!}</div>
                            <a href="#" data-description="{!! html_entity_decode ($item->description) !!}" class="marketplace-link mt-auto"data-bs-toggle="modal" data-bs-target="#exampleModal">Lihat Detail</a>
                            @foreach($item->variants as $variant)
                            <p class="harga">Harga</p>
							<div class="price mt-auto">
                            @if(!empty($variant->discount_price))
								<span>Rp. {{ number_format($variant->discount_price) }}</span>
                                <del>Rp. {{ number_format($variant->price) }}</del>
                                @else
                                <span>Rp. {{ number_format($variant->price) }}</span>
                                @endif
								
							</div>
                            @endforeach
                            <div class="button">
                                <a href="https://www.tokopedia.com/" target="_blank" class="btn btn-tokopedia"><img src="{{ asset_frontpage('assets/images/tokped.png') }}" alt="Tokopedia"></a>
                                <a href="https://shop.tiktok.com/" target="_blank" class="btn btn-shopee"><img src="{{ asset_frontpage('assets/images/tiktok_shop.png') }}" alt="Shopee"></a>
                                <a href="https://wa.me/{{ $navbar['settings']['whatsapp_marketplace'] }}" target="_blank"  class="btn btn-whatsapp"><img src="{{ asset_frontpage('assets/images/wa.png') }}" alt="Whatsapp"></a>
                            </div>
                        </div>   
                    </div>
                </div>
                @endforeach 
            </div>
        </div>
    </div>
</div>
<div class="modal" id="exampleModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Deskripsi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="description">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
</section>
@endsection
@push('scripts')
<script>
    $(document).ready(function(){
        $(document).on('click', '.marketplace-link', function(){
description=$(this).data("description");
$(".modal").find("#description").html(description)
        })
    })
</script>
@endpush

