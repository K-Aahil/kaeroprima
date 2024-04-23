<div class="row gx-md-3 gx-sm-3 gx-0 gy-5 mt-md-0 mt-sm-0 mt-5">
    @foreach ($artikel as $index => $item)
        <div class="col-md-3 col-sm-6 col-12 ">
            <div class="card-artikel">
                <?php preg_match('/^.{6}/', $item->data_file, $matches); ?>
                <?php $tmp = explode('.', $item->data_file); ?>
                @if (strtolower(end($tmp)) == 'jpg' ||
                        strtolower(end($tmp)) == 'jpeg' ||
                        strtolower(end($tmp)) == 'gif' ||
                        strtolower(end($tmp)) == 'png')
                    <img class="servicecontenimg" style="height: 17em; width:100%; object-fit:cover;"
                        src="{{ asset_administrator("assets/media/news/$item->data_file") }}" alt="">
                @elseif(strtolower(end($tmp)) == 'mp4' ||
                        strtolower(end($tmp)) == '3gp' ||
                        strtolower(end($tmp)) == 'wmv' ||
                        strtolower(end($tmp)) == 'mkv')
                    <video class="home_list_video" controls
                        style="width: 100%;height:17em; object-fit:cover;margin:0; padding:0; border-top-left-radius:10px; border-top-right-radius:10px;">
                        <source src="{{ asset_administrator("assets/media/news/$item->data_file") }}">
                    </video>
                @else
                    <iframe class="servicecontent" style="width:100%; height:17em;object-fit:cover;"
                        src="https://www.youtube.com/embed/{{ $item->data_file }}" title="YouTube" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen="">
                    </iframe>
                @endif
                <div class="p-2 d-flex flex-column" style="height: 17em;">
                    <div style="min-height: 19em;">
                        <p class="my-2 text-pink"> <img src="{{ asset_bpr('/img/icon_clock_pink.svg') }}" alt=""
                                style="width:25px"> {{ date('d F Y', strtotime($item->created_at)) }}</p>
                        <p class="text-semibold">{{ $item->title }}</p>
                        <div class="text-description">
                            {!! Str::limit($item->description, 200) !!}
                        </div>
                    </div>
                    <div class="mt-auto" id="button-list-artikel">
                        <a href="artikel/{{ $item->slug }}">
                            <button class="button-pink text-center w-100">
                                Selengkapnya
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            @if ($index == 3)
            @break
        @endif

    </div>
@endforeach
</div>
@push('scripts')
<script>
    var video_artikel_home = document.getElementsByClassName('home_list_video')
    var arr_video_artikel_home = [...video_artikel_home]
    arr_video_artikel_home.map(element => {
        element.parentNode.children[1].style.marginTop = '-0.3em'
    })
</script>
@endpush
