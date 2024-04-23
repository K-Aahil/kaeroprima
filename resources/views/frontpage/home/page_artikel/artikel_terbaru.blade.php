<div class="mx-sm-2 mx-md-3 mx-3">
    <div class="d-flex align-items-center">
        <p class="text-bold-primary fs-4 mt-3" style="width:30vw;">ARTIKEL TERBARU</p>
        <div class="line-black w-100 mx-2"></div>
    </div>
</div>
<div class="row mx-0 gy-md-0 gy-sm-0 gy-4">
    <div class="col-md-8 row mx-0 gy-5 gy-md-0 gy-sm-2">
        @foreach ($data_terbaru as $index => $item)
            @if ($index < 2)
                <div class="col-md-6 col-sm-6 px-md-2 px-sm-2 px-0 d-flex flex-column" style="min-height:32em;">
                    <div>
                        <?php preg_match('/^.{6}/', $item->data_file, $matches); ?>
                        <?php $tmp = explode('.', $item->data_file); ?>
                        @if (strtolower(end($tmp)) == 'jpg' ||
                                strtolower(end($tmp)) == 'jpeg' ||
                                strtolower(end($tmp)) == 'gif' ||
                                strtolower(end($tmp)) == 'png')
                            <img class="servicecontenimg" style="width:100%; height:20em; object-fit:cover;"
                                src="{{ asset_administrator("assets/media/news/$item->data_file") }}" alt="">
                        @elseif(strtolower(end($tmp)) == 'mp4' ||
                                strtolower(end($tmp)) == '3gp' ||
                                strtolower(end($tmp)) == 'wmv' ||
                                strtolower(end($tmp)) == 'mkv')
                            <video class="artikel_terbaru" style="width: 100%;height:20em;object-fit:cover;" controls>
                                <source src="{{ asset_administrator("assets/media/news/$item->data_file") }}">
                            </video>
                        @else
                            <iframe class="servicecontent" style="height:20em; width:100%;"
                                src="https://www.youtube.com/embed/{{ $item->data_file }}" title="YouTube"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen="">
                            </iframe>
                        @endif
                        <div class="">
                            <p class="text-small text-alternate-primary my-2">
                                {{ date('d F Y', strtotime($item->created_at)) }}</p>
                            <p class="text-bold-alternate-primary fs-5">{{ $item->title }}</p>
                            {{-- style="text-align: justify; text-justify:inter-word;"> --}}
                            <div class="text-description">
                                {{-- <p class="text-small text-alternate-grey" --}}
                                {!! Str::limit($item->description, 200) !!}
                                {{-- </p> --}}
                            </div>
                        </div>
                    </div>
                    <a href="/artikel/{{ $item->slug }}"><button
                            class="btn-artikel mt-auto align-self-start">Selengkapnya</button></a>
                </div>
            @endif
        @endforeach
    </div>
    <div class="col-md-4 my-sm-4 my-md-0 ">
        @foreach ($data_terbaru as $index => $item)
            @if ($index > 1)
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12" style="min-height: 11em">
                        <div>
                            <p class="text-bold-alternate-primary fs-5">
                                {{ $item->title }}
                            </p>
                            <div class="text-description">
                                {!! Str::limit($item->description, 200) !!}
                            </div>
                            <a href="/artikel/{{ $item->slug }}"><button
                                    class="btn-artikel mt-auto mb-2 align-self-start">Selengkapnya</button></a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

</div>

@push('scripts')
    <script>
        var video_artikel_terbaru = document.getElementsByClassName('artikel_terbaru')
        var arr_video_artikel_terbaru = [...video_artikel_terbaru]
        arr_video_artikel_terbaru.map(element => {
            element.parentNode.children[1].style.marginTop = '-0.3em'
        })
    </script>
@endpush
