<?php

namespace App\Http\Controllers;

use App\Models\Bidang4;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class Bidang4Controller extends Controller
{


    public function show(Request $request)
    {

        $data['bidang4'] = Bidang4::all();

        return view('admin-bidang4', $data);
    }

    public function create()
    {
        $data['bidang4'] = Bidang4::all();
        return view('create-bidang4');
    }
    public function add(Request $request)
    {
        $data['bidang4'] = Bidang4::all();

        $anggota = '';
        if ($request->file('anggota')) {
            $ext = $request->file('anggota')->getClientOriginalExtension();
            $anggota = time() . '_anggota.' . $ext;
            $request->file('anggota')->storeAs('gambar', $anggota);
        }
        $bidang4 = Bidang4::create([
            'anggota' => $anggota,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'quotes' => $request->quotes,
        ]);

        if ($bidang4) {
            Session::flash('pesan', 'Data berhasil disimpan');
        } else {
            Session::flash('pesan', 'Data gagal disimpan');
        }

        return redirect('admin-bidang4');
    }

    public function edit(Request $request)
    {
        $data['bidang4'] = Bidang4::all();
        $data['bidang4'] = Bidang4::find($request->id);
        return view('update-bidang4', $data);
    }


    public function update(Request $request, $id)
    {
        $data['bidang4'] = Bidang4::all();

        $update =Bidang4::where('id', $id)->first();

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
            $update = Bidang4::where('id', $id)->update([
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
        return redirect('/admin-bidang4');
    }

    public function delete(Request $request)
    {
        $hapus = Bidang4::find($request->id);
        Storage::delete('gambar/' . $hapus->gambar);
        $hapus->delete();
        return redirect('admin-bidang4');
    }

    public function search(Request $request)
    {
        $data['bidang4'] = Bidang4::all();

        $data['bidang4'] = Bidang4::where('judul', 'LIKE', '%' . $request->cari . '%')->get();


        return view('admin-bidang4', $data);
    }
}

