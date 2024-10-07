<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\Bidang9;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class BidangController extends Controller
{


    public function show(Request $request)
    {

        $data['bidang'] = Bidang::all();

        return view('admin-bidang', $data);
    }

    public function create()
    {
        $data['bidang'] = Bidang::all();
        return view('create-bidang');
    }
    public function add(Request $request)
    {
        $data['bidang'] = Bidang::all();

        $anggota = '';
        if ($request->file('anggota')) {
            $ext = $request->file('anggota')->getClientOriginalExtension();
            $anggota = time() . '_anggota.' . $ext;
            $request->file('anggota')->storeAs('gambar', $anggota);
        }
        $bidang = Bidang::create([
            'anggota' => $anggota,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'quotes' => $request->quotes,
        ]);

        if ($bidang) {
            Session::flash('pesan', 'Data berhasil disimpan');
        } else {
            Session::flash('pesan', 'Data gagal disimpan');
        }

        return redirect('admin-bidang');
    }

    public function edit(Request $request)
    {
        $data['bidang'] = Bidang::all();
        $data['bidang'] = Bidang::find($request->id);
        return view('update-bidang', $data);
    }


    public function update(Request $request, $id)
    {
        $data['bidang'] =Bidang::all();

        $update =Bidang::where('id', $id)->first();

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
            $update = Bidang::where('id', $id)->update([
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
        return redirect('/admin-bidang');
    }

    public function delete(Request $request)
    {
        $hapus =Bidang::find($request->id);
        Storage::delete('gambar/' . $hapus->gambar);
        $hapus->delete();
        return redirect('admin-bidang');
    }

    public function search(Request $request)
    {
        $data['bidang'] =Bidang::all();

        $data['bidang'] = Bidang::where('nama', 'LIKE', '%' . $request->cari . '%')->orwhere('kelas', 'LIKE', '%' . $request->cari . '%')->get();



        return view('admin-bidang', $data);
    }
}

