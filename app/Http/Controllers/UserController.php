<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function login(){
        return view('login');
    }
    public function auth(Request $request){
        $validasi = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if (Auth::attempt($validasi)) {
            return redirect('dashboard')->with('pesan', 'Login berhasil!');
        }
        return redirect()->back()->with('pesan', 'login gagal!');
    } 

    public function dashboard(){
        return view('/dashboard');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
