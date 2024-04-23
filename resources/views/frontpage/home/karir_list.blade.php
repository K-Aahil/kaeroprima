@foreach ($data as $row)
    <div class="col-md-9 {{ $row->career_category_id }} {{ $row->career_path_id }}">
        <h4>{{ $row->title }}</h4>
        <h6>{!! strip_tags(substr($row->description, 0, 57)) !!}</h6>
        <div class="desc">
            <span class="pendidikan">{{ $row->path->name }}</span>
            <span class="kategori">{{ $row->category->name }}</span>
            <span class="lokasi">{{ $row->location }}</span>
        </div>  
    </div>
    <div class="col-md-3">
        <a href="{{ route('karir_detail', $row->slug) }}" class="btn btn-detail">Detail</a>
    </div>
@endforeach
                                    