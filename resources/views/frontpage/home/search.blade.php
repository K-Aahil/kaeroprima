@extends('frontpage.layouts.main')
@push('styles')

    @section('content')
        <div class="" style="height: auto">
            <style>
                .img-header {
                    height: 10em;
                    width: 100%;
                    object-fit: contain;
                }

                .card-search {
                    /* background-color: red; */
                    display: flex;
                    flex-direction: column;
                    height: 25em;
                }
            </style>
            <div class="row gx-md-5 gx-sm-0 gx-0 gy-3 mx-md-5 mx-sm-3 mx-0 my-5">
                @if (count($produk) > 0)
                    <p class="fs-3 text-bold">List Produk</p>
                    @foreach ($produk as $item)
                        <div class="col-3">
                            <div class="card-search">
                                <img src="{{ asset_administrator('assets/media/product/' . $item->image) }}" alt=""
                                    class="img-header">
                                <p class="text-bold">{{ strip_tags($item->name) }}</p>
                                <div class="">{{ strip_tags(Str::limit($item->description, 100)) }}</div>
                                <button
                                    onclick="location.href='detail-produk-{{ $item->category == 'kredit' ? 'kredit' : 'simpanan' }}/{{ $item->slug }}'"
                                    class="btn-blue w-100 mt-auto mx-0">Selengkapnya</button>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="fs-3 text-bold text-danger">Produk Kosong</p>
                @endif
            </div>
            <div class="row gx-md-5 gx-sm-0 gx-0 mx-md-5 mx-sm-3 mx-0 my-5">
                @if (count($artikel) > 0)
                    <p class="fs-3 text-bold">List Artikel</p>
                    @foreach ($artikel as $item)
                        <div class="col-3">
                            <div class="card-search">
                                <img src="{{ asset_administrator('assets/media/news/' . $item->data_file) }}" alt=""
                                    class="w-100 rounded" style="height: 30vh; object-fit:cover;">
                                <p class="text-bold">{{ strip_tags($item->title) }}</p>
                                <div class="">{{ strip_tags(Str::limit($item->description, 100)) }}</div>
                                <button class="btn-blue w-100 mt-auto mx-0"
                                    onclick="location.href='artikel/{{ $item->slug }}'">Selengkapnya</button>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="fs-3 text-bold text-danger">Artikel Kosong</p>
                @endif
            </div>
        </div>
    @endsection
@endpush
