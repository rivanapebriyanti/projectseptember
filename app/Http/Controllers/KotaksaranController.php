<?php

namespace App\Http\Controllers;

use App\Models\Kotaksaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KotaksaranController extends Controller
{
    public function show(Request $request){
        $data['kotaksaran'] = Kotaksaran::all();
        return view('admin-kotaksaran', $data);
    }

    public function create(){
        $data['kotaksaran'] = Kotaksaran::all();
        return view('create-kotaksaran');
    }
    public function add(Request $request){
        $data['kotaksaran'] = Kotaksaran::all();

           $kotaksaran = Kotaksaran::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);

        if ($kotaksaran) {
            Session::flash('pesan', 'Data berhasil disimpan');
        } else {
            Session::flash('pesan', 'Data gagal disimpan');
        }

        return redirect('/');
    }

    public function delete(Request $request){
        $hapus = Kotaksaran::find($request->id);
        $hapus->delete();
        return redirect('admin-kotaksaran');
    }
}
