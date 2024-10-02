<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
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

        $fotobidang = '';
        if ($request->file('fotobidang')) {
            # code...
            $ext = $request->file('fotobidang')->getClientOriginalExtension();
            $fotobidang = time() . '.' . $ext;
            $request->file('fotobidang')->storeAs('gambar', $fotobidang);
        }

        $anggota = '';
        if ($request->file('anggota')) {
            # code...
            $ext = $request->file('anggota')->getClientOriginalExtension();
            $anggota = time() . '_anggota.' . $ext;
            $request->file('anggota')->storeAs('gambar', $anggota);
        }
        $bidang = Bidang::create([
            'fotobidang' => $fotobidang,
            'tugas' => $request->tugas,
            'anggota' => $anggota,
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
        $data['bidang'] = Bidang::all();
        // dd($request->file('fotobidang'));
        // dd($request->file('anggota'));
        $update = Bidang::where('id', $id)->first();
        # code...
        
        $fotobidang = '';
        if ($request->file('fotobidang')) {
            Storage::delete('/gambar/' . $update->fotobidang);
            # code...
            $ext = $request->file('fotobidang')->getClientOriginalExtension();
            $fotobidang = time() . '.' . $ext;
            $request->file('fotobidang')->storeAs('gambar', $fotobidang);
        }

        $anggota = '';
        if ($request->file('anggota')) {
            # code...
            Storage::delete('/gambar/' . $update->anggota);
            $ext = $request->file('anggota')->getClientOriginalExtension();
            $anggota = time() . '_anggota.' . $ext;
            $request->file('anggota')->storeAs('gambar', $anggota);
        }
        if ($anggota && $fotobidang) {
            $update->update([
                'fotobidang' => $fotobidang,
                'tugas' => $request->tugas,
            ]);
            // return redirect('/admin-bidang1');
        }else if($anggota){
            $update->update([
                // 'fotobidang' => $fotobidang,
                'tugas' => $request->tugas,
            ]);
        }else if($fotobidang){
            $update->update([
                'fotobidang' => $fotobidang,
                'tugas' => $request->tugas,
                // 'anggota' => $anggota,
            ]);
            
        }
         else {
            # code...
            $update = Bidang::where('id', $id)->update([
                'tugas' => $request->tugas,
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
        $hapus = Bidang::find($request->id);
        Storage::delete('gambar/' . $hapus->gambar);
        $hapus->delete();
        return redirect('admin-bidang');
    }

    public function search(Request $request)
    {
        $data['bidang'] = Bidang::all();

        $data['bidang'] = Bidang::where('judul', 'LIKE', '%' . $request->cari . '%')->get();


        return view('admin-bidang', $data);
    }
}
