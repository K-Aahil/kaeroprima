<div class="mx-sm-2 mx-md-3 mx-3">
    <div class="d-flex align-items-center">
        <p class="text-bold-primary fs-4 mt-3" style="width: 18vw;">ARTIKEL</p>
        <div class="line-black w-100 mx-2"></div>

    </div>
</div>
<div class="row gy-sm-4 gy-md-0 gy-3 mx-0 my-2">
    @foreach ($list_data as $index => $item)
        <div class="col-md-3 col-sm-6 col-12 d-flex flex-column mb-5" style="min-height: 30em;">
            <div class="">
                <div class="">
                    <?php preg_match('/^.{6}/', $item->data_file, $matches); ?>
                    <?php $tmp = explode('.', $item->data_file); ?>
                    {{-- @dd($item->data_file) --}}
                    @if (strtolower(end($tmp)) == 'jpg' ||
                            strtolower(end($tmp)) == 'jpeg' ||
                            strtolower(end($tmp)) == 'gif' ||
                            strtolower(end($tmp)) == 'png')
                        <img style="width: 100%;height: 20em; object-fit:cover;"
                            src="{{ asset_administrator("assets/media/news/$item->data_file") }}" alt="">
                    @elseif(strtolower(end($tmp)) == 'mp4' ||
                            strtolower(end($tmp)) == '3gp' ||
                            strtolower(end($tmp)) == 'wmv' ||
                            strtolower(end($tmp)) == 'mkv')
                        <video class="list_artikel" style="width: 100%;height:20em; object-fit:cover;" controls>
                            <source src="{{ asset_administrator("assets/media/news/$item->data_file") }}">
                        </video>
                    @else
                        <iframe class="servicecontent" style="width:100%;height:20em; object-fit:cover;"
                            src="https://www.youtube.com/embed/{{ $item->data_file }}" title="YouTube" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen="">
                        </iframe>
                    @endif
                </div>
                <div class="">
                    <p class="my-2 text-alternate-primary"> {{ date('d F Y', strtotime($item->created_at)) }}</p>
                    <p class="text-bold-alternate-primary"> {{ $item->title }}</p>
                    {{-- <p class="text-small text-alternate-grey txt-justify"> --}}
                    <div class="text-description">
                        {!! Str::limit($item->description, 200) !!}
                    </div>
                </div>
            </div>
            <a class="mt-auto" href="/artikel/{{ $item->slug }}">
                <button class="btn-artikel mb-2 align-self-start">Selengkapnya</button>
            </a>
        </div>
    @endforeach
</div>
@push('scripts')
    <script>
        var list_artikel = document.getElementsByClassName('list_artikel')
        var arr_list_artikel = [...list_artikel]
        arr_list_artikel.map(element => {
            element.parentNode.children[1].style.marginTop = '-0.3em'
        })
    </script>
@endpush
