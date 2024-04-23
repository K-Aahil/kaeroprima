@foreach ($data as $row)
    <tr>
        <td>{{ $row->location }}</td>
        <td>{{ $row->whatsapp_number }}</td>
        <td>
            <a class="btn btn-kontak" href="https://wa.me/{{ $row->whatsapp_number }}" target="_blank">Hubungi</a>
        </td>
    </tr>
@endforeach