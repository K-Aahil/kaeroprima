{{-- <div class="d-flex align-items-center">
    <p class="text-bold fs-2">ARTIKEL</p>
    <div class="line-black mx-2" style="width:85%"></div>
    <a href="/artikel" style="text-decoration: none;margin-top:1em;">
        <p class="ms-auto text-grey">Selengkapnya</p>
    </a>
</div>
<div class="artikel">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-12">
            <div class="text-artikel">
                <p class="my-2 text-alternate-primary"> {{ date('d F Y', strtotime($artikel[0]->created_at)) }}</p>
                <p class="fs-2 text-semibold">{{ $artikel[0]->title }}
                </p>
                <div class="text-description">
                    <p style="letter-spacing: 0.05rem;">
                    {!! Str::limit($artikel[0]->description, 300) !!}
                    </p>
                </div>
            </div>
            <a class="button-pink-4 mt-auto" href="artikel/{{ $artikel[0]->slug }}"
                style="text-decoration: none;width:100%;">Selengkapnya</a>
        </div>

        <div class="col-md-6 col-sm-6 col-12 ps-1" id="artikel-home">
            <?php preg_match('/^.{6}/', $artikel[0]->data_file, $matches); ?>
            <?php $tmp = explode('.', $artikel[0]->data_file); ?>
            @if (strtolower(end($tmp)) == 'jpg' || strtolower(end($tmp)) == 'jpeg' || strtolower(end($tmp)) == 'gif' || strtolower(end($tmp)) == 'png')
                <img style="height: 30em; width:100%; object-fit:cover; " id="artikel-image"
                    src="{{ asset_administrator('assets/media/news/' . $artikel[0]->data_file) }}" alt="">
            @elseif(strtolower(end($tmp)) == 'mp4' ||
                    strtolower(end($tmp)) == '3gp' ||
                    strtolower(end($tmp)) == 'wmv' ||
                    strtolower(end($tmp)) == 'mkv')
                <video style="width:100%; height:30em; overflow:hidden;" controls id="artikel-image">
                    <source src="{{ asset_administrator('assets/media/news/' . $artikel[0]->data_file) }}">
                </video>
            @else
                <iframe class="servicecontent" style="width:100%; height:30em" id="artikel-image"
                    src="https://www.youtube.com/embed/{{ $artikel[0]->data_file }}" title="YouTube" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen="">
                </iframe>
            @endif
        </div>
    </div>
</div> --}}
