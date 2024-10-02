<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PengumumanController extends Controller
{
    public function show(Request $request){
        $data ['pengumuman'] = Pengumuman::all();
        
        return view('admin-pengumuman',$data);
    }


    public function create(){
        $data['pengumuman'] = Pengumuman::all();
        return view('create-pengumuman');
    }
    public function add(Request $request){
        $data['pengumuman'] = Pengumuman::all();

           $pengumuman = Pengumuman::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
        ]);

        if ($pengumuman) {
            Session::flash('pesan', 'Data berhasil disimpan');
        } else {
            Session::flash('pesan', 'Data gagal disimpan');
        }

        return redirect('admin-pengumuman');
    }

    public function edit(Request $request){
        $data['pengumuman'] = Pengumuman::all();
        $data['pengumuman'] = Pengumuman::find($request->id);
        return view('/update-pengumuman', $data);
    }


    public function update(Request $request, $id){
        $data['pengumuman'] = Pengumuman::all();

        $update = Pengumuman::where('id', $id)->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
        ]);
        return redirect('/admin-pengumuman');

        if($update) {
            Session::flash('pesan','Data berhasil diubah');
        }else{
            Session::flash('pesan','Data gagal diubah');
        }
        return redirect('/admin-pemuman');
    }

    public function delete(Request $request){
        $hapus = Pengumuman::find($request->id);
        $hapus->delete();
        return redirect('admin-pengumuman');
    }

    public function search(Request $request){
        $data['pengumuman'] = Pengumuman::all();

        $data['pengumuman']=Pengumuman::where('judul', 'LIKE', '%'.$request->cari.'%')->get();

        return view('admin-pengumuman', $data);
    }
}


