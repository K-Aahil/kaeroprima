<style>
    .contoh {
        width: 100%;
        object-fit: contain;
        aspect-ratio: 6/3;
        padding: 0.5em 0.5em;
    }
</style>
<p class="text-small text-blue text-semibold text-center">Partner Kami</p>
<p class="text-bold text-alternate-primary fs-3 text-center justify-content-center">JARINGAN KERJASAMA</p>
<div class="list-item-partner mx-md-auto mx-sm-auto mx-auto">
    @foreach ($our_partner as $item)
        <div class="item-partner">
            <img class="contoh" src="{{ asset_administrator('assets/media/items/' . $item->image) }}">
        </div>
    @endforeach
</div>
