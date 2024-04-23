<style>
    #exampleFormControlSelect1 {
        background-color: white;
        border-radius: 5px;
        padding: 10px 5px;
    }

    #exampleFormControlSelect1:active {
        outline: 2px solid #7EBAFF !important;
        padding: 10px 5px;
    }

    #exampleFormControlSelect1:focus {
        outline: 2px solid #7EBAFF !important;
        padding: 10px 5px;
    }

    #card:hover {
        transition: 0.3s ease-in-out;
        filter: drop-shadow(2px 0px 5px #FF0000);
    }

    .accordion-body {
        background-color: #e7f1ff;
    }

    .collapse {
        background-color: white;
    }

    .accordion-button::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ED5D8E'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    }
</style>
<div class="col-md-6 col-sm-6 col-12 ">
    <p class="text-blue text-semibold ">FAQ BPR Mitra Parahyangan</p>
    <p class="text-bold-alternate-primary fs-3 align-self-end">Berbagai pertanyaan mungkin membantu Kamu.</p>
    <p class="text-alternate-grey w-75">
        Tidak ada pertanyaan yang Kamu cari, silahkan hubungi Kami.
    </p>
    <br>
    <a href="{{ route('contact') }}" style="text-decoration: none;">
        <div class="btn-blue text-bold mx-0 w-50 text-center">Hubungi Kami</div>
    </a>
</div>
<div class="col-md-6 col-sm-6 col-12">
    <div>
        @foreach ($faq as $index => $item)
            <div class="accordion-item border-0">
                <h2 class="accordion-header border-0">
                    <button class="accordion-button text-bold collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse{{ $index }}" data-bs-target="#collapse{{ $index }}"
                        aria-expanded="true" aria-controls="collapse{{ $index }}"
                        style="outline: none; box-shadow: none;">
                        {{ $item->title }}
                    </button>
                </h2>
                <div id="collapse{{ $index }}" class="accordion-collapse collapse"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        {{ $item->description }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
