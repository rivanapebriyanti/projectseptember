<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    public function show(Request $request){

        $data['kegiatan'] = Kegiatan::all();

        $data['total'] = $data['kegiatan']->count();
        return view('admin-kegiatan', $data);
    }

    public function create(){
        $data['kegiatan'] = Kegiatan::all();
        return view('create-kegiatan');
    }
    public function add(Request $request){
        $data['kegiatan'] = Kegiatan::all();

        $filename='';
        if ($request->file('gambar')) {
            # code...
            $ext = $request->file('gambar')->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $request->file('gambar')->storeAs('gambar',$filename);
        }
           $kegiatan = Kegiatan::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'foto' => $filename,
            'gdrive' => $request->gdrive,
        ]);

        if ($kegiatan) {
            Session::flash('pesan', 'Data berhasil disimpan');
        } else {
            Session::flash('pesan', 'Data gagal disimpan');
        }

        return redirect('admin-kegiatan');
    }

    public function edit(Request $request){
        $data['kegiatan'] = Kegiatan::all();
        $data['kegiatan'] = Kegiatan::find($request->id);
        return view('/update-kegiatan', $data);
    }


    public function update(Request $request, $id){
        $data['kegiatan'] = Kegiatan::all();

        $update = Kegiatan::where('id', $id)->first();
        if ($request->gambar) {
            # code...
        Storage::delete('/gambar'.$update->gambar);

        $filename='';
        if ($request->file('gambar')) {
            # code...
            $ext = $request->file('gambar')->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $request->file('gambar')->storeAs('gambar',$filename);
        }
        $update = Kegiatan::where('id', $id)->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'foto' => $filename,
            'gdrive' => $request->gdrive,
        ]);
        return redirect('/admin-kegiatan');

        }else {
            # code...
            $update = Kegiatan::where('id', $id)->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'gdrive' => $request->gdrive,
            ]);
        }

        if($update) {
            Session::flash('pesan','Data berhasil diubah');
        }else{
            Session::flash('pesan','Data gagal diubah');
        }
        return redirect('/admin-kegiatan');
    }

    public function delete(Request $request){
        $hapus = Kegiatan::find($request->id);
        Storage::delete('gambar/'.$hapus->gambar);
        $hapus->delete();
        return redirect('admin-kegiatan');
    }

    public function search(Request $request){
        $data['kegiatan'] = Kegiatan::all();

        $data['kegiatan']=Kegiatan::where('judul', 'LIKE', '%'.$request->cari.'%')->get();

        $data['total']=$data['kegiatan']->count();

        return view('admin-kegiatan', $data);
    }
}


