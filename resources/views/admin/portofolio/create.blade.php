<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard portofolio</title>
    <link rel="stylesheet" href="{{asset('asset/css/portofolio/create.css')}}">
</head>
<body>
    <h2>Halaman input</h2>
    <form action="{{url('portofolio')}}" method="POST">
        @csrf

        <table class="form-table">
    <tr>
        <div class="form-input">
            <td><label for="">Jenis Aplikasi</label></td>
            <td><input type="text"name="jenis_aplikasi"></td>
        </div>
    </tr>
     <tr>
        <div class="form-input">
            <td><label for=" ">Tahun Pembuatan</label></td>
            <td><input type="date"name="tahun_pembuatan"></td>
            </div>
     </tr>
     <tr>
        <div class="form-input">
            <td><label for="link"></label>
            <td><input type="text"name="link"></td>
            </div>
     </tr>
        </table>
        
    <button type="submit">Simpan</button>
</form>
</body>
</html>