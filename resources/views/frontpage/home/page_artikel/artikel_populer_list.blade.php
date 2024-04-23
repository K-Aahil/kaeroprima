<div>
    <div class="row gy-sm-4 gy-md-0 gy-3 mx-0">
        @foreach ($data_terbaru as $index => $item)
            @if ($index > 0)
                <div class="col-md-3 col-sm-6 col-12 d-flex flex-column" style="min-height:30em;">
                    <div class="">
                        <div class="">
                            <?php preg_match('/^.{6}/', $item->data_file, $matches); ?>
                            <?php $tmp = explode('.', $item->data_file); ?>
                            @if (strtolower(end($tmp)) == 'jpg' ||
                                    strtolower(end($tmp)) == 'jpeg' ||
                                    strtolower(end($tmp)) == 'gif' ||
                                    strtolower(end($tmp)) == 'png')
                                <img class="w-100 rounded" style="height: 20em; object-fit:cover;"
                                    src="{{ asset_administrator('assets/media/news/' . $item->data_file) }}"
                                    alt="">
                            @elseif(strtolower(end($tmp)) == 'mp4' ||
                                    strtolower(end($tmp)) == '3gp' ||
                                    strtolower(end($tmp)) == 'wmv' ||
                                    strtolower(end($tmp)) == 'mkv')
                                <video class="video_artikel_populer"
                                    style="width: 100%;height:20em; object-fit:cover; border-radius:6px;" controls>
                                    <source src="{{ asset_administrator("assets/media/news/.$item->data_file") }}">
                                </video>
                            @else
                                <iframe class="servicecontent" style="width:100%; height:20em; object-fit:cover;"
                                    src="https://www.youtube.com/embed/{{ $item->data_file }}" title="YouTube"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen="">
                                </iframe>
                            @endif
                        </div>
                        <div class="">
                            <p class="my-2 text-alternate-primary"> {{ date('d F Y', strtotime($item->created_at)) }}
                            </p>
                            <p class="text-bold-alternate-primary"> {{ $item->title }}</p>
                            <div class="text-description">
                                {!! Str::limit($item->description, 200) !!}
                            </div>
                        </div>
                    </div>
                    <a href="/artikel/{{ $item->slug }}" class="mt-auto">
                        <button class="btn-artikel mb-2 align-self-start">Selengkapnya</button>
                    </a>
                </div>
            @endif
        @endforeach

    </div>
</div>
@push('scripts')
    <script>
        var video_artikel_populer = document.getElementsByClassName('video_artikel_populer')
        var arr_video_artikel_populer = [...video_artikel_populer]
        arr_video_artikel_populer.map(element => {
            element.parentNode.children[1].style.marginTop = '-0.3em'
        })
    </script>
@endpush
