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
        {{ $detail->meta_title }}
    @endsection
    {{-- Meta description --}}
@section('meta_description')
    {{ $detail->meta_description }}
@endsection
<section id="artikel-detail">
    <div class="md:grid">
        <?php preg_match('/^.{6}/', $detail->data_file, $matches); ?>
        <?php $tmp = explode('.', $detail->data_file); ?>
        @if (strtolower(end($tmp)) == 'jpg' ||
                strtolower(end($tmp)) == 'jpeg' ||
                strtolower(end($tmp)) == 'gif' ||
                (strtolower(end($tmp)) == 'png' && $detail->data_file != null))
            <img src="{{ asset_administrator("assets/media/news/$detail->data_file") }}" alt=""
                class="w-screen object-cover object-center" />
        @else
            <img src="{{ asset_administrator('assets/media/default.jpg') }}" alt=""
                class="w-screen object-cover object-center" />
        @endif
        <div class="lg:px-[8.4em] lg:mt-5 px-8 py-5 lg:mb-20">
            {{-- <h2 class="lg:text-[3em] text-[2.5em] font-bold text-[#7D7D7D] mt-2 mb-2">
                {{ $detail->title }}
            </h2> --}}
            <h2 class=" break-all lg:text-[3em] text-[2.5em] font-bold text-[#7D7D7D] mt-2 mb-2">
                {{ $detail->title }}
            </h2>
            <div class="flex gap-2">
                <svg class="relative" width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M3 9H21M17 13.0014L7 13M10.3333 17.0005L7 17M7 3V5M17 3V5M6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z"
                        stroke="#7D7D7D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="text-[1em] font-medium text-[#999999]">{{ $detail->tanggal }}</p>
            </div>

            <p class="text-justify mt-[1.5em] text-[1.2em] font-normal">
                {!! nl2br($detail->description) !!}
            </p>
        </div>
    </div>
</section>
@endsection
@endpush
