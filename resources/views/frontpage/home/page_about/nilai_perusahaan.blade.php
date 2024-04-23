<style>
    .card-peduli-1,
    .card-peduli-2,
    .card-peduli-3,
    .card-peduli-4,
    .card-peduli-5,
    .card-peduli-6 {
        height: 30em;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
        border-radius: 10px;
        padding: 1em;
    }

    .card-peduli-1 img,
    .card-peduli-2 img,
    .card-peduli-3 img,
    .card-peduli-4 img,
    .card-peduli-5 img,
    .card-peduli-6 img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 50%;
        border: 22px solid #ededed;
        margin-top: -75px;
    }
</style>

<p class="text-center text-bold text-pink fs-2" style="margin-bottom: 10vh;">Nilai Perusahaan</p>

<div class="row list-nilai-perusahaan">
    @php
        $max_displayed_values = 6;
        $count = 0;
    @endphp
    @foreach ($corporate_values as $item)
        @if ($count >= $max_displayed_values)
        @break
    @endif
    <div class="col-md-2 col-sm-4 col-12 justify-content-center">
        <div class="card-peduli-{{ $item->sort + 1 }}">
            <img src="{{ asset_administrator('assets/media/items/' . $item->image) }}" alt="">
            <p class="text-bold mt-2">{{ $item->title }}</p>
            <p class="text-alternate-grey text-small txt-justify">
                {{ $item->description }}
            </p>
        </div>
    </div>
    @php
        $count++;
    @endphp
@endforeach
</div>

<p class="text-center w-75 mx-auto fs-6" style="margin-top: 5vh; margin-bottom: 20vh;">
“Insan BPR Mitra Parahyangan adalah individu yang bertanggungjawab dan mampu memberdayakan seluruh potensi yang
dimiliki, mampu mengenali diri sendiri, memahami kebutuhan stakeholder, memiliki rasa simpati dan empati serta
selalu mengedepankan kejujuran”
</p>
