<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Profil;

use DB;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = DB::table('profil')->get();
        return view('profil',['profil'=>$profil]);
    }

    public function create()
    {
        return view('admin/profil/create');
    }

    public function store(Request $request)
    {
        DB::table('profil')->insert([
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
            'email' => $request->email,
            'no_telpon' => $request->no_telpon,

        ]);

        return redirect('profil')->with('status', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $profil = DB::table('profil')->where('id',$id)->first();
        return view('admin/profil/edit',compact('profil'));
    }

    public function update(Request $request, $id)
    {
        DB::table('profil')->where('id', $id)->update([
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
            'email' => $request->email,
            'no_telpon' => $request->no_telpon,
        ]);
         return redirect('profil')->with('status', 'Data berhasil di ubah');
    }

    public function delete($id)
    {
        DB::table('profil')->where('id', $id)->delete();
        return redirect('profil')->with('status','Data berhasil di Hapus!');
    }
}
