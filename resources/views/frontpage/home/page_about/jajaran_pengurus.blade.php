<style>
    .accordion-item {
        border: none;
        outline: none;
    }

    .accordion-button::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ed5d8e'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e")
    }

    .accordion-button:not(.collapsed)::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ed5d8e'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e")
    }

    .accordion-button:not(.collapsed) {
        color: #ed5d8e;
        background-color: #f9f9f900;
        box-shadow: none;
    }

    .accordion-button:focus {
        background-image: #f9f9f9;
        box-shadow: none;
    }

    .accordion-body {
        color: #586174;
    }
</style>

<p class="text-semibold text-blue">Jajaran Pengurus</p>
<p class="text-alternate-primary text-bold fs-4">Dewan Komisaris Dan Direksi</p>
<p class="text-small w-75">kepemimpinan yang kuat merupakan faktor kunci dalam mencapai visi dan misi perusahaan
    kami.
</p>
<div class="row mx-0 gy-md-0 gy-sm-0 gy-5">
    @foreach ($directory as $item)
        <div class="col-md-3 col-sm-6 col-12">
            <div class="card-pengurus">
                <img src="{{ asset_administrator('assets/media/director_items/' . $item->image) }}" alt=""
                    class="w-100" style="height:250px ; widht:100px ; object-fit:cover; object-position:0% 50%;">
                <p class="text-bold my-2">{{ $item->title }}</p>
                <div id="pengurus">
                    <p class="text-bold text-blue" style="font-size: 0.8em;">{{ $item->sub_title }}</p>
                </div>
                <div class="accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{ $loop->iteration }}">
                            <button class="accordion-button collapsed text-pink" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse{{ $loop->iteration }}"
                                aria-expanded="true" aria-controls="collapse{{ $loop->iteration }}">
                                Selengkapnya
                            </button>
                        </h2>
                        <div id="collapse{{ $loop->iteration }}" class="accordion-collapse collapse "
                            aria-labelledby="heading{{ $loop->iteration }}" data-bs-parent=".accordion">
                            <div class="accordion-body">
                                {{ $item->description }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
