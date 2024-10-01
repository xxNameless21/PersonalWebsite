<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard-profil</title>
    <link rel="stylesheet" href="{{asset('asset/css/profil/create.css')}}">
</head>
<body>
    <h2>Halaman Input</h2>
    <form action="{{url('profil')}}" method="POST">
        @csrf

     <table class="form-table">
        <tr>
            <div class="form-input">
                <td><label for="">Nama</label></td>
                <td><input type="text" name="nama"></td>
            </div>
        </tr>
        <tr>
            <div class="form-input">
                <td><label for="">Tempat lahir</label></td>
                <td><input type="text" name="tempat_lahir"></td>
            </div>
        </tr>
        <tr>
            <div class="form-input">
                <td><label for="">Tanggal Lahir</label></td>
                <td><input type="date" name="tgl_lahir"></td>
            </div>
        </tr>
        <tr>
            <div class="form-input">
                <td><label for="">Alamat</label></td>
                <td><input type="text" name="alamat"></td>
            </div>
        </tr>
        <tr>
            <div class="form-input">
                <td><label for="">pekerjaan</label></td>
                <td><input type="text" name="pekerjaan"></td>
            </div>
        </tr>
        <tr>
        </div>
        <div class="form-input">
            <td><label for="">Email</label></td>
            <td><input type="email" name="email"></td>
        </div>
        </tr>
        <tr>
            <div class="form-input">
                <td><label for="">No Telpon</label></td>
                <td><input type="number" name="no_telpon"></td>
            </div>
        </tr>
     </table>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>