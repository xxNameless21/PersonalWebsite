<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Profil;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::all(); // or whatever your model is
return view('your-view-name', compact('services'));
;
    }

    public function create()
    {
        return view('admin/services/create');
    }

    public function edit($id)
    {
        $services = DB::table('services')->where('id',$id)->first();
        return view('admin/services/edit',compact('services'));
    }
}
