@extends('frontpage.layouts.main')
@push('styles')

    <style type="text/css">
        :root{
            --bg-color: {{ !empty($data->color) ? $data->color : '#D6187C' }};
            --bg-color-rad: {{ !empty($data->color)  ? $data->color : '#D6187C' }};
            --bg-img: url( {{( asset_administrator('assets/media/our_service/'.$data->image_banner))}} );
            }
    </style>

@section('content')
    <section id="banner-static">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img src="{{ asset_administrator('assets/media/our_service/'.$data->image_banner) }}" alt="Banner">
                </div>
                <div class="col-md-8 col-sm-8">
                <h2>{{ $data->title }}</h2>
                    <h6>
                        {!! html_entity_decode($data->description) !!}
                    </h6>
                    {{-- <div class="healty">
                        <img src="{{ asset_frontpage('assets/images/get.png') }}" alt="Get Healty">
                        <h4>Get Healty</h4>
                        <img src="{{ asset_frontpage('assets/images/make.png') }}" alt="Make Healty">
                        <h4>Make Healty</h4>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <section id="kontak-kami-du">
        <div class="card">
            <div class="card-body">
                <h3>Kontak Kami</h3>
                <div class="row">
                    <div class="col-md-6">
                        <h6>Whatsapp</h6>
                    @foreach ($data->contact_list as $row)
                        <p><a target="_blank" href="https://wa.me/{{ $row->whatsapp_number }}">{{ $row->whatsapp_number }}</a> ({{ $row->location }})</p>
                    @endforeach
                    </div>
                    <div class="col-md-4">
                        <h6>Instagram</h6>
                    @foreach ($data->contact_list as $row)
                        <p><a target="_blank" href="https://www.instagram.com/{{ $row->instagram }}">{{ $row->instagram }}</a></p>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services-du">
        <div class="container-fluid">
            <h2>Layanan {{ $data->title }}</h2>
            <h6>{{ count($data->items) }} pelayanan yang berada di {{ $data->title }}<br/>dewa medika yang siap membantu anda</h6>
            <div class="row service-lists justify-content-center">    
                @foreach ($data->items as $row)
                    <div class="col-md-6 col-sm-6 col-lg-4 service-item">
                        <div class="card" style="background-image: url({{ asset_administrator('assets/media/our_service_item/'.$row->image) }});">
                            <div class="card-body">
                                <div class="row justify-content-center flex-column">
                                    <div class="col-md-12">
                                        <h4 class="title">{{ $row->title }}</h4>
                                        <h6 class="desc">{{ $row->sub_title }}</h6>
                                        {{-- <a href="https://wa.me/{{ $data->service_contact }}" target="_blank">Pesan Layanan <i class="bi bi-arrow-right"></i></a> --}}
                                        <a href="#" class="pesan-layanan-link mt-auto" data-bs-toggle="modal" data-id="{{ $data->id }}" data-bs-target="#exampleModal">Pesan Layanan <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section id="schedule-du">
        <h2>Jadwal {{ $data->title }} Dewa Medika</h2>
        <h6>Beberapa jadwal dokter yang berada</br/>di klinik Dewa Medika yang akan siap</br>stand by untuk anda semua</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="title">
                        <th class="text-center" colspan="10">
                            Jadwal Dokter
                        </th>
                    </tr>
                    <tr class="head">
                        <th></th>
                        <th>Nama Dokter</th>
                        <th>Lokasi</th>
                        <th>Senin</th>
                        <th>Selasa</th>
                        <th>Rabu</th>
                        <th>Kamis</th>
                        <th>Jum'at</th>
                        <th>Sabtu</th>
                        <th>Minggu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data->doctor_schedules as $item)
                    <tr>
                        <td>
                            <img class="rounded-circle" style="height: 90px; width: 90px;" src="{{ asset_administrator('assets/media/doctor/'.$item->doctor->photo) }}" alt="Dr Delvina">
                        </td>
                        <td>{{ $item->doctor->name }}</td>
                        <td>{{ $item->branch->name }}</td>
                        <td>{{ $item->monday }}</td>
                        <td>{{ $item->tuesday }}</td>
                        <td>{{ $item->wednesday }}</td>
                        <td>{{ $item->thursday }}</td>
                        <td>{{ $item->friday }}</td>
                        <td>{{ $item->saturday }}</td>
                        <td>{{ $item->sunday }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="modal" id="exampleModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Pilih Pesan Layanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="pesan">
                        <table id="pesan_layanan" class="table table-bordered">
                            <thead>
                                <th class="text-center">Cabang</th>
                                <th class="text-center">Whatsapp</th>
                                <th class="text-center">Aksi</th>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
<script>
    $(document).ready(function(){
        $(document).on('click', '.pesan-layanan-link', function(){
            id = $(this).data("id");
            getData(id);
            // $(".modal").find("#pesan").html(pesan)
        })
    });

    function getData(id) {

        let url = `/pesan-layanan`;
        
        $.ajax({
            url: url,
            type: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                id: id,
            },
            datatype: 'HTML',
        }).done(function(data) {
            console.log(data);
            $('#pesan_layanan tbody').empty()
            $('#pesan_layanan tbody').html(data)

        }).fail(function(jqXHR, ajaxOptions, thrownError) {
            alert('No response from server');
        });
        
    }
</script>
@endpush
