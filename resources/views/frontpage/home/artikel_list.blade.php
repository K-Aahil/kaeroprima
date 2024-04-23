@foreach ($data as $row)
<div class="col-lg-4 col-md-6 artikel-item">
    <div class="card">
        @php $ext = explode('.', $row->data_file) @endphp
        @if (end($ext) == 'jpg' || end($ext) == 'jpeg' || end($ext) == 'gif' || end($ext) == 'png')
        <a href="{{ route('artikel_detail', $row->slug) }}"><img src="{{ img_src($row->data_file, 'news') }}" alt="{{ $row->title }}"></a>
        @elseif (end($ext) == 'mp4' || end($ext) == '3gp' || end($ext) == 'wmv' || end($ext) == 'mkv')
            <video id="my-video" class="video-js" controls preload="auto" width="100%" poster="MY_VIDEO_POSTER.jpg" data-setup="{}" style="min-height: 100px;">
                <source src="{{ img_src($row->data_file, "news") }}" type="video/mp4" />
                <source src="{{ img_src($row->data_file, "news") }}" type="video/webm" />
            </video>
        @else
            <iframe style="max-height: 250px; min-height: 250px;"
                src="https://www.youtube.com/embed/{{$row->data_file}}"
                title="YouTube"
                frameborder="0"
                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        @endif
        <div class="card-body">
            <div class="detail">
                <span class="date">{{ date('d-M-Y', strtotime($row->created_at)) }}</span>
                <span class="kategori">{{ $row->post_category_name }}</span>                             
            </div>
            <a href="{{ route('artikel_detail', $row->slug) }}" class="title">{{ $row->title }}</a>
            <p>
                {!! strip_tags(substr($row->description, 0, 90)) !!}{!! '...' !!}
                <a href="{{ route('artikel_detail', $row->slug) }}" class="read-more">Read More</a>
            </p>
        </div>
    </div>
</div>
@endforeach