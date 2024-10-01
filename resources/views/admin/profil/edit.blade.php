<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link rel="stylesheet" href="{{asset('asset/css/profil/edit.css')}}">
</head>
<body>
    
    <h2>Halaman Edit</h2>
    <form action="{{url('profil/'.$profil->id)}}" method="POST">
        @method('patch')
        @csrf

        <table class="form-table">
            <tr>
                <td><label for="nama">Nama</label></td>
                <td><input type="text" name="nama" value="{{$profil->nama}}"></td>
            </tr>
            <tr>
                <td><label for="tempat_lahir">Tempat Lahir</label></td>
                <td><input type="text" name="tempat_lahir" value="{{$profil->tempat_lahir}}"></td>
            </tr>
            <tr>
                <td><label for="tgl_lahir">Tanggal Lahir</label></td>
                <td><input type="date" name="tgl_lahir" value="{{$profil->tgl_lahir}}"></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat</label></td>
                <td><input type="text" name="alamat" value="{{$profil->alamat}}"></td>
            </tr>
            <tr>
                <td><label for="pekerjaan">Pekerjaan</label></td>
                <td><input type="text" name="pekerjaan" value="{{$profil->pekerjaan}}"></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input type="email" name="email" value="{{$profil->email}}"></td>
            </tr>
            <tr>
                <td><label for="no_telpon">No Telpon</label></td>
                <td><input type="number" name="no_telpon" value="{{$profil->no_telpon}}"></td>
            </tr>
        </table>

        <div class="submit-container">
            <button type="submit">Simpan</button>
        </div>
    </form>

</body>
</html>