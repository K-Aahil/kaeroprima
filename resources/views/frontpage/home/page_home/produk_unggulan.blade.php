<p class="text-bold-primary text-center fs-4">PRODUK UNGGULAN</p>
<p class="text-bold-grey-small text-center">BPR MITRA PARAHYANGAN</p>
<div class="px-4 justify-content-center container-produk ">
    <div class="d-flex flex-wrap justify-content-around" id="list-produk-unggulan">
        @foreach ($product_unggulan as $index => $item)
            <div class="card-produk">
                <img src="
        @if ($item->icon != null) {{ asset_administrator('assets/media/icon/' . $item->icon) }} @endif
        @if ($item->icon == null) @switch($index)
                    @case(0)
                    {{ asset_bpr('img/icon_kredit_kpr.png') }}
                    @break
                    @case(1)
                    {{ asset_bpr('img/icon_kredit_multi_guna.png') }}
                    @break
                    @case(2)
                    {{ asset_bpr('img/icon_kredit_modal_kerja.png') }}
                    @break
                @default
                    <span> Ewror </span>
            @endswitch @endif"
                    alt="">
                <p id="card-text" class="text-semibold fs-4 text-center">{{ $item->name }}</p>
                <p id="card-sub-text">
                    {{ strip_tags(Str::limit($item->description, 100)) }}
                </p>
                <button onclick="location.href='detail-produk-{{ $item->category }}/{{ $item->slug }}'"
                    class="button-pink-3 mt-auto w-100 mb-2">Selengkapnya</button>
            </div>
        @endforeach
    </div>
</div>
