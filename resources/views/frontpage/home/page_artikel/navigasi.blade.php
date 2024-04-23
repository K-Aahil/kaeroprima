    <style>
        .pagination>.page-item:first-child>.page-link {
            background-color: var(--primary);
            color: white;
            margin: 10px;
            height: 3em;
            width: 3em;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
        }

        .pagination>.page-item:last-child>.page-link {
            background-color: var(--primary);
            color: white;
            margin: 10px;
            height: 3em;
            width: 3em;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
        }

        .pagination>.page-item:not(:last-child):not(:first-child)>.page-link {
            background-color: white;
            color: var(--primary);
            margin: 10px;
            height: 3em;
            width: 3em;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            border: 2px solid var(--primary);
        }

        .pagination>.page-item:not(:last-child):not(:first-child).active>.page-link {
            background-color: var(--primary);
            color: white;
            margin: 10px;
            height: 3em;
            width: 3em;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            border: 2px solid var(--primary);
        }

        .pagination>.page-item:not(:last-child):not(:first-child)>.page-link:hover {
            background-color: var(--primary);
            color: white;
            margin: 10px;
            height: 3em;
            width: 3em;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            border: 2px solid var(--primary);
        }
    </style>
    <div class="text-center my-5 d-flex justify-content-around">
        {{-- <div class="d-md-block d-sm-block d-none">
            <button class="btn-blue-secondary">Awal</button>
            <button class="btn-blue-secondary">Sebelumnya</button>
        </div>
        <div class="">
            <button class="btn-blue">N</button>
            <button class="btn-blue-inactive">N</button>
            <button class="btn-blue-inactive">N</button>
            <button class="btn-blue-inactive">N</button>
            <button class="btn-blue-inactive">N</button>
            <button class="btn-blue-inactive">N</button>
        </div>
        <div class="d-md-block d-sm-block d-none">
            <button class="btn-blue">Akhir</button>
            <button class="btn-blue">Selanjutnya</button>
        </div> --}}
        {{ $list_data->links() }}
    </div>
    <script>
        // var pagination = document.querySelector('.pagination.page-item')
        // console.log('asd')
    </script>
