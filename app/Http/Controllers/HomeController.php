<?php

namespace App\Http\Controllers;

use App\Models\Bidang1;
use App\Models\Kegiatan;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['pengumuman']=Pengumuman::all();
        $data['kegiatan'] = Kegiatan::all();
        $data['bidang1'] = Bidang1::all();

        return view('home',$data);
    }

    public function about(){
        return view('/about');
    }
    
    public function kontak(){
        return view('/kontak');
    }

    public function kegiatan(){
        $data['kegiatan'] = Kegiatan::all();
        return view('/kegiatan',$data);
    }

    public function bidang1(){
        $data['bidang1'] = Bidang1::all();

        return view('/bidang1',$data);
    }

    public function pengumuman(){
        $data['pengumuman'] = Pengumuman::all();
        return view('pengumuman',$data);
    }
}
