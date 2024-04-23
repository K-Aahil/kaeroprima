<div class="mx-sm-2 mx-md-3 mx-3">
    <div class="d-flex align-items-center">
        <p class="text-bold-primary fs-4 mt-3" style="width:30vw;">ARTIKEL POPULER</p>
        <div class="line-black w-100 mx-2"></div>
    </div>
</div>
<div class="row mx-0 h-100">
    {{-- @dd(gettype($data_populare)) --}}
    @if (!empty($data_populare))
        @foreach ($data_populare as $index => $item)
            @if ($index == 0)
                <div class="col-md-6 col-sm-6 col-12">
                    {{-- <img src="{{ asset_administrator('assets/media/news/' . $data_populare[0]->data_file) }}" alt=""
            class="w-100 rounded" style="height: 50vh; object-fit:cover;"> --}}

                    <?php preg_match('/^.{6}/', $item->data_file, $matches); ?>
                    <?php $tmp = explode('.', $item->data_file); ?>
                    @if (strtolower(end($tmp)) == 'jpg' ||
                            strtolower(end($tmp)) == 'jpeg' ||
                            strtolower(end($tmp)) == 'gif' ||
                            strtolower(end($tmp)) == 'png')
                        <img class="servicecontenimg" style="height: 28em; width:100%; object-fit:cover;"
                            src="{{ asset_administrator('assets/media/news/' . $item->data_file) }}" alt="">
                    @elseif(strtolower(end($tmp)) == 'mp4' ||
                            strtolower(end($tmp)) == '3gp' ||
                            strtolower(end($tmp)) == 'wmv' ||
                            strtolower(end($tmp)) == 'mkv')
                        <video class="servicecontenimg" style=" margin-bottom: 30px;" controls>
                            <source src="{{ asset_administrator("assets/media/news/.$item->data_file") }}">
                        </video>
                    @else
                        <iframe class="servicecontent" style="height: 28em; width:100%; object-fit:cover;"
                            src="https://www.youtube.com/embed/{{ $item->data_file }}" title="YouTube" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen="">
                        </iframe>
                    @endif
                </div>
                <div class="col-md-6 col-sm-6 col-12 d-flex flex-column ">
                    <div class="">
                        <p class="text-alternate-primary">{{ date('d F Y', strtotime($item->created_at)) }}</p>
                        <p class="text-bold-alternate-primary fs-2">
                            {{ $data_populare[0]->title }}
                        </p>
                        <div class="text-description">
                            {{-- <p class="text-small text-alternate-grey" style="text-align: justify; text-justify:inter-word;"> --}}
                            {!! Str::limit($data_populare[0]->description, 500) !!}
                            {{-- </p> --}}
                        </div>
                    </div>
                    <a href="/artikel/{{ $data_populare[0]->slug }}" style="text-decoration: none" class="mt-auto">
                        <div class="btn-artikel text-center " style="width:30vh;">Selengkapnya</div>
                    </a>
                </div>
</div>
@break
@endif
@endforeach
@endif
