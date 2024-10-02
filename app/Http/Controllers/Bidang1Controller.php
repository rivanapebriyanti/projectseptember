<?php

namespace App\Http\Controllers;

use App\Models\Bidang1;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class Bidang1Controller extends Controller
{

    public function show(Request $request)
    {

        $data['bidang1'] = Bidang1::all();

        return view('admin-bidang1', $data);
    }

    public function create()
    {
        $data['bidang1'] = Bidang1::all();
        return view('create-bidang1');
    }
    public function add(Request $request)
    {
        $data['bidang1'] = Bidang1::all();

        // $fotobidang = '';
        // if ($request->file('fotobidang')) {
        //     # code...
        //     $ext = $request->file('fotobidang')->getClientOriginalExtension();
        //     $fotobidang = time() . '.' . $ext;
        //     $request->file('fotobidang')->storeAs('gambar', $fotobidang);
        // }

        $anggota = '';
        if ($request->file('anggota')) {
            # code...
            $ext = $request->file('anggota')->getClientOriginalExtension();
            $anggota = time() . '_anggota.' . $ext;
            $request->file('anggota')->storeAs('gambar', $anggota);
        }
        $bidang1 = Bidang1::create([
            // 'fotobidang' => $fotobidang,
            // 'tugas' => $request->tugas,
            'anggota' => $anggota,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'quotes' => $request->quotes,
        ]);

        if ($bidang1) {
            Session::flash('pesan', 'Data berhasil disimpan');
        } else {
            Session::flash('pesan', 'Data gagal disimpan');
        }

        return redirect('admin-bidang1');
    }

    public function edit(Request $request)
    {
        $data['bidang1'] = Bidang1::all();
        $data['bidang1'] = Bidang1::find($request->id);
        return view('update-bidang1', $data);
    }


    public function update(Request $request, $id)
    {
        $data['bidang1'] = Bidang1::all();
        // dd($request->file('fotobidang'));
        // dd($request->file('anggota'));
        $update = Bidang1::where('id', $id)->first();
        # code...
        
        // $fotobidang = '';
        // if ($request->file('fotobidang')) {
        //     Storage::delete('/gambar/' . $update->fotobidang);
        //     # code...
        //     $ext = $request->file('fotobidang')->getClientOriginalExtension();
        //     $fotobidang = time() . '.' . $ext;
        //     $request->file('fotobidang')->storeAs('gambar', $fotobidang);
        // }

        $anggota = '';
        if ($request->file('anggota')) {
            # code...
            Storage::delete('/gambar/' . $update->anggota);
            $ext = $request->file('anggota')->getClientOriginalExtension();
            $anggota = time() . '_anggota.' . $ext;
            $request->file('anggota')->storeAs('gambar', $anggota);
        }
        // if ($anggota && $fotobidang) {
        if ($anggota) {
            $update->update([
                // 'fotobidang' => $fotobidang,
                // 'tugas' => $request->tugas,
                'anggota' => $anggota,
                'nama' => $request->nama,
                'kelas' => $request->kelas,
                'quotes' => $request->quotes,
            ]);
            // return redirect('/admin-bidang1');
        }else if($anggota){
            $update->update([
                // 'fotobidang' => $fotobidang,
                // 'tugas' => $request->tugas,
                'anggota' => $anggota,
                'nama' => $request->nama,
                'kelas' => $request->kelas,
                'quotes' => $request->quotes,
            ]);
        // }else if($fotobidang){
        //     $update->update([
        //         'fotobidang' => $fotobidang,
        //         'tugas' => $request->tugas,
        //         // 'anggota' => $anggota,
        //         'nama' => $request->nama,
        //         'kelas' => $request->kelas,
        //         'quotes' => $request->quotes,
        //     ]);
            
        }
         else {
            # code...
            $update = Bidang1::where('id', $id)->update([
                // 'tugas' => $request->tugas,
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
        return redirect('/admin-bidang1');
    }

    public function delete(Request $request)
    {
        $hapus = Bidang1::find($request->id);
        Storage::delete('gambar/' . $hapus->gambar);
        $hapus->delete();
        return redirect('admin-bidang1');
    }

    public function search(Request $request)
    {
        $data['bidang1'] = Bidang1::all();

        $data['bidang1'] = Bidang1::where('judul', 'LIKE', '%' . $request->cari . '%')->get();


        return view('admin-bidang1', $data);
    }
}
