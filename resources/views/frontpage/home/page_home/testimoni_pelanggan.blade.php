<style>
    .text-testimoni>* {
        color: black;
        font-weight: 700;
        text-align: center;
    }

    .text-testimoni>*>* {
        text-align: center;
        color: black;
        font-weight: 700
    }

    .text-testimoni>*>*>* {
        text-align: center;
        color: black;
        font-weight: 700
    }
</style>
<div class="badge-testimoni fs-4">
    TESTIMONI PELANGGAN
</div>
<div class="w-100 d-flex justify-content-between position-absolute" style="top: calc(2 * 18vh); z-index: 10;">
    <div class="arrow ms-1" id="geser-kiri-carousel-2">
        <img src="{{ asset_bpr('/img/icon_arrow2_left.svg') }}" alt="" width="35" height="35"
            id="geser-kiri-carousel-2">
    </div>
    <div class="arrow me-1" id="geser-kanan-carousel-2">
        <img src="{{ asset_bpr('/img/icon_arrow2_right.svg') }}" alt="" width="35" height="35">
    </div>
</div>
<div class="list-testimoni owl-carousel carousel-card" id="carousel-testimoni">
    @foreach ($testimonial as $item)
        <div class="card-testimoni mx-5" id="card">
            <img class="avatar" src="{{ asset_administrator('assets/media/testimonials/' . $item->image) }}"
                alt="" style="object-fit: cover">
            <div class="text-testimoni">
                <p class="text-center mb-auto">{!! $item->testimoni !!}</p>
            </div>
            <p class="text-bold text-blue">{{ $item->name }}</p>
        </div>
    @endforeach
</div>
