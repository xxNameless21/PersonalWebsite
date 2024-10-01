
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('asset/css/portofolio/edit.css')}}">
    <title>Dasboard portofolio</title>
</head>
<body>
    <h2>Halaman edit</h2>
    <form action="{{url('portofolio/'.$portofolio->id)}}" method="POST">
        
         @method('patch')
        @csrf

        <table class="form-table">
        <tr>
            <div class="form-input">
                <td><label for="">Jenis Aplikasi</label></td>
                <td><input type="text"name="jenis_aplikasi" value="{{$portofolio ->jenis_aplikasi}}"></td>
                </div>
        </tr>
        <tr>
            <div class="form-input">
                <td><label for="">Tahun Pembuatan</label></td>
                <td><input type="date"name="tahun_pembuatan" value="{{$portofolio ->tahun_pembuatan}}"></td>
                </div>
        </tr>
        <tr>
            <div class="form-input">
                <td><label for="">link</label></td>
                <td><input type="text"name="link" value="{{$portofolio ->link}}"></td>
                </div>
        </tr>
        </table>
        
        
    <button type="submit">Simpan</button>
</form>
</body>
</html>