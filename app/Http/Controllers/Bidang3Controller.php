<?php

namespace App\Http\Controllers;

use App\Models\Bidang3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class Bidang3Controller extends Controller
{


    public function show(Request $request)
    {

        $data['bidang3'] = Bidang3::all();

        return view('admin-bidang3', $data);
    }

    public function create()
    {
        $data['bidang3'] = Bidang3::all();
        return view('create-bidang3');
    }
    public function add(Request $request)
    {
        $data['bidang3'] = Bidang3::all();

        $anggota = '';
        if ($request->file('anggota')) {
            $ext = $request->file('anggota')->getClientOriginalExtension();
            $anggota = time() . '_anggota.' . $ext;
            $request->file('anggota')->storeAs('gambar', $anggota);
        }
        $bidang3 = Bidang3::create([
            'anggota' => $anggota,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'quotes' => $request->quotes,
        ]);

        if ($bidang3) {
            Session::flash('pesan', 'Data berhasil disimpan');
        } else {
            Session::flash('pesan', 'Data gagal disimpan');
        }

        return redirect('admin-bidang3');
    }

    public function edit(Request $request)
    {
        $data['bidang3'] = Bidang3::all();
        $data['bidang3'] = Bidang3::find($request->id);
        return view('update-bidang3', $data);
    }


    public function update(Request $request, $id)
    {
        $data['bidang3'] = Bidang3::all();

        $update =Bidang3::where('id', $id)->first();

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
            $update = Bidang3::where('id', $id)->update([
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
        return redirect('/admin-bidang2');
    }

    public function delete(Request $request)
    {
        $hapus = Bidang3::find($request->id);
        Storage::delete('gambar/' . $hapus->gambar);
        $hapus->delete();
        return redirect('admin-bidang3');
    }

    public function search(Request $request)
    {
        $data['bidang2'] = Bidang3::all();

        $data['bidang3'] = Bidang3::where('nama', 'LIKE', '%' . $request->cari . '%')->orwhere('kelas', 'LIKE', '%' . $request->cari . '%')->get();



        return view('admin-bidang3', $data);
    }
}




