<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Portofolio;

use DB;

class PortofolioController extends Controller
{
    public function index()
    {
        $portofolio = DB::table('portofolio')->get();
        return view('portofolio',['portofolio'=>$portofolio]);
    }

    public function create()
    {
        return view('admin/portofolio/create');
    }

    public function store(Request $request)
    {
        DB::table('portofolio')->insert([
            'jenis_aplikasi' => $request->jenis_aplikasi,
            'tahun_pembuatan' => $request->tahun_pembuatan,
            'link' => $request->link,

        ]);

        return redirect('portofolio')->with('status', 'Data berhasil di tambah');
    }

    public function edit($id)
    {
        $portofolio = DB::table('portofolio')->where('id',$id)->first();
        return view('admin/portofolio/edit',compact('portofolio'));
    }

    public function update(Request $request, $id)
    {
        DB::table('portofolio')->where('id', $id)->update([
            'jenis_aplikasi' => $request->jenis_aplikasi,
            'tahun_pembuatan' => $request->tahun_pembuatan,
            'link' => $request->link,
        ]);
         return redirect('portofolio')->with('status', 'Data berhasil di ubah');
    }

    public function delete($id)
    {
        DB::table('portofolio')->where('id', $id)->delete();
        return redirect('portofolio')->with('status','Data berhasil di Hapus!');
    }
}
