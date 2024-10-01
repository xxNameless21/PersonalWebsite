@extends('main')

@section('content')
<link rel="stylesheet" href="{{ asset('asset/css/portofolio.css') }}">

<div class="portofolio">
    <h2>Biodatadiri</h2>
    
    <!-- Add Data Button -->
    <a href="{{ url('portofolio/create') }}" class="btn-add-data">Tambah Data</a>

    <!-- Table for portfolio -->
    <table>
        <tr>
            <th>NO</th>
            <th>Jenis Aplikasi</th>
            <th>Tahun Pembuatan</th>
            <th>URL Link</th>
            <th>Aksi</th>
        </tr>
        @php $i = 1; @endphp
        @foreach ($portofolio as $item)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $item->jenis_aplikasi }}</td>
            <td>{{ $item->tahun_pembuatan }}</td>
            <td><a href="{{ $item->link }}" target="_blank">{{ $item->link }}</a></td>
            <td>
                <a href="{{ url('portofolio/edit/'.$item->id) }}" class="btn-edit">Edit</a>
                <form action="{{ url('portofolio/'.$item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah data akan dihapus?')">
                    @method('delete')
                    @csrf
                    <button class="btn-delete">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection
