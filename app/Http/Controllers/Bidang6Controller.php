<?php

namespace App\Http\Controllers;

use App\Models\Bidang6;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class Bidang6Controller extends Controller
{

    public function show(Request $request)
    {

        $data['bidang6'] = Bidang6::all();

        return view('admin-bidang6', $data);
    }

    public function create()
    {
        $data['bidang6'] = Bidang6::all();
        return view('create-bidang6');
    }
    public function add(Request $request)
    {
        $data['bidang6'] = Bidang6::all();

        $anggota = '';
        if ($request->file('anggota')) {
            $ext = $request->file('anggota')->getClientOriginalExtension();
            $anggota = time() . '_anggota.' . $ext;
            $request->file('anggota')->storeAs('gambar', $anggota);
        }
        $bidang6 = Bidang6::create([
            'anggota' => $anggota,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'quotes' => $request->quotes,
        ]);

        if ($bidang6) {
            Session::flash('pesan', 'Data berhasil disimpan');
        } else {
            Session::flash('pesan', 'Data gagal disimpan');
        }

        return redirect('admin-bidang6');
    }

    public function edit(Request $request)
    {
        $data['bidang6'] = Bidang6::all();
        $data['bidang6'] = Bidang6::find($request->id);
        return view('update-bidang6', $data);
    }


    public function update(Request $request, $id)
    {
        $data['bidang6'] = Bidang6::all();

        $update =Bidang6::where('id', $id)->first();

        $anggota = '';
        if ($request->file('anggota')) {
            Storage::delete('/gambar/' . $update->anggota);
            $ext = $request->file('anggota')->getClientOriginalExtension();
            $anggota = time() . '_anggota.' . $ext;
            $request->file('anggota')->storeAs('gambar', $anggota);
        }
        if ($anggota) {
            $update->update([
                'anggota' => $anggota,
                'nama' => $request->nama,
                'kelas' => $request->kelas,
                'quotes' => $request->quotes,
            ]);
        }else if($anggota){
            $update->update([
                'anggota' => $anggota,
                'nama' => $request->nama,
                'kelas' => $request->kelas,
                'quotes' => $request->quotes,
            ]);
            
        }
         else {
            $update = Bidang6::where('id', $id)->update([
                'nama' => $request->nama,
                'kelas' => $request->kelas,
                'quotes' => $request->quotes,
            ]);
        }

        if ($update) {
            Session::flash('pesan', 'Data berhasil diubah');
        } else {
            Session::flash('pesan', 'Data gagal diubah');
        }
        return redirect('/admin-bidang6');
    }

    public function delete(Request $request)
    {
        $hapus = Bidang6::find($request->id);
        Storage::delete('gambar/' . $hapus->gambar);
        $hapus->delete();
        return redirect('admin-bidang6');
    }

    public function search(Request $request)
    {
        $data['bidang6'] = Bidang6::all();

        $data['bidang6'] = Bidang6::where('judul', 'LIKE', '%' . $request->cari . '%')->get();


        return view('admin-bidang6', $data);
    }
}


