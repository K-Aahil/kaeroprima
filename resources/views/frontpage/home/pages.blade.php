{{-- @extends('frontpage.layouts.main')
@push('styles')
    @section('content')
        <div class="d-flex flex-column align-items-center container text-grey">
            {{ $pages->title }}
            <div class="col">
                <img src="{{ asset_administrator('assets/media/pages/' . $pages->image) }}" alt=""
                    class="align-self-center">
                <p class="fs-2 text-center text-grey">{{ $pages->title }}</p>
            </div>
            <div class="col align-self-center text-description my-3">
                {!! $pages->description !!}
            </div>
        </div>
    @endsection
@endpush --}}
@extends('frontpage.layouts.main')
@push('styles')
    @section('content')
        <style>
            #deskripsi-abu>* {
                color: var(--alternategrey);
            }

            #deskripsi-abu>*>* {
                color: var(--alternategrey);
            }

            #deskripsi-abu>*>*>* {
                color: var(--alternategrey);
            }
        </style>
    @section('meta_title')
        {{ $pages->meta_title }}
    @endsection
    {{-- Meta description --}}
@section('meta_description')
    {{ $pages->meta_description }}
@endsection
<section>
    <div class="md:grid">
        @if ($pages->image !=null)
            <img src="{{ asset_administrator('assets/media/pages/' . $pages->image) }}" alt=""
                class="lg:h-[25em] h-[18em] w-full object-cover object-center" />
            @else
            <img src="{{ asset_administrator("assets/media/default.jpg") }}" alt=""
            class="lg:h-[25em] h-[18em] w-full object-cover object-center" />
        @endif
        <div class="lg:px-[8.4em] lg:mt-5 px-8 py-5 lg:mb-20">
            <h2 class="lg:text-[3em] text-[2.5em] font-black text-[#7D7D7D] mt-2 font-avenir mb-2">
                {{ $pages->title }}
            </h2>
            <p class="text-justify mt-[1.5em] text-[1.2em] font-normal font-avenir">
                {!! nl2br($pages->description) !!}
            </p>
        </div>
    </div>
</section>
@endsection
@endpush
