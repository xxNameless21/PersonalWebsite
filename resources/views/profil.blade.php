@extends('main')

@section('content')
<link rel="stylesheet" href="{{asset('asset/css/profil.css')}}">

<div class="profil">
    <h2>Biodatadiri</h2>
    
    <!-- Add the button for adding new data -->
    <a href="{{url('profil/create')}}" class="btn-add-data">Tambah Data</a>

    <!-- Existing content, loop through profile data -->
    @foreach ($profil as $item)
        <p>Nama : {{$item->nama}}</p>
        <p>Tempat Lahir : {{$item->tempat_lahir}}</p>
        <p>Tanggal Lahir : {{$item->tgl_lahir}}</p>
        <p>Alamat : {{$item->alamat}}</p>
        <p>Pekerjaan : {{$item->pekerjaan}}</p>
        <p>Email : {{$item->email}}</p>
        <p>No Telepon : {{$item->no_telpon}}</p>
        <a href="{{ url('profil/edit/'.$item->id)}}" class="btn-edit">Edit</a>
        <form action="{{url('profil/'.$item->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Apakah data akan dihapus?')">
            @method('delete')
            @csrf
            <button class="btn-delete">Delete</button>
        </form>
    @endforeach
</div>
@endsection
