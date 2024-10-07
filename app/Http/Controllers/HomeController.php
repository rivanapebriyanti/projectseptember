<?php

namespace App\Http\Controllers;

use App\Models\Bidang1;
use App\Models\bidang2;
use App\Models\Bidang3;
use App\Models\Bidang4;
use App\Models\Bidang5;
use App\Models\Bidang6;
use App\Models\Bidang7;
use App\Models\Bidang8;
use App\Models\Bidang9;
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
    
    
    public function pengumuman(){
        $data['pengumuman'] = Pengumuman::all();
        return view('pengumuman',$data);
    }


    public function bidang1(){
        $data['bidang1'] = Bidang1::all();
    
        return view('/bidang1',$data);
    }
    public function bidang2(){
        $data['bidang2'] = bidang2::all();

        return view('/bidang2',$data);
    }
    public function bidang3(){
        $data['bidang3'] = Bidang3::all();

        return view('/bidang3',$data);
    } 
    public function bidang4(){
        $data['bidang4'] = Bidang4::all();

        return view('/bidang4',$data);
    } 
    public function bidang5(){
        $data['bidang5'] = Bidang5::all();

        return view('/bidang5',$data);
    } 
    public function bidang6(){
        $data['bidang6'] = Bidang6::all();

        return view('/bidang6',$data);
    } 
    public function bidang7(){
        $data['bidang7'] = Bidang7::all();

        return view('/bidang7',$data);
    }
    public function bidang8(){
        $data['bidang8'] = Bidang8::all();

        return view('/bidang8',$data);
    } 
    public function bidang9(){
        $data['bidang9'] = Bidang9::all();

        return view('/bidang9',$data);
    }

    public function detail(Request $request){
        $data['pengumuman']=Pengumuman::all();
        $data['pengumuman'] = Pengumuman::where("id", $request->id)->first();
        return view('detail-pengumuman', $data);
    }
}
