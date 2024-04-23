<div class="container-fluid">
    <h2>Visi Misi</h2>
    <p>Visi misi kami akan terus berkembang  dan akan<br/>terus menjadi klinik yang akan mensejahterakan semua </p>
    @if (!empty($visi_misi->list_items))
    <div class="content">
        <img src="{{asset('frontpage\assets\images\visi-misi.png')}}" alt="Visi Misi">
        <div class="card">
            <div class="card-body text-start">
                <h2>{{ $visi_misi->name}}</h2>
                <ul class="lists">
                     @foreach ($visi_misi->list_items as $item)
                    <li>
                        {{ html_entity_decode($item->title) }}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    @endif
</div>