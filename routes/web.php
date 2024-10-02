<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Bidang1Controller;
use App\Http\Controllers\Bidang2Controller;
use App\Http\Controllers\Bidang3Controller;
use App\Http\Controllers\Bidang4Controller;
use App\Http\Controllers\Bidang5Controller;
use App\Http\Controllers\Bidang6Controller;
use App\Http\Controllers\Bidang7Controller;
use App\Http\Controllers\Bidang8Controller;
use App\Http\Controllers\Bidang9Controller;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KotaksaranController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/',[HomeController::class,'index']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/kontak',[HomeController::class,'kontak']);
Route::get('/kegiatan',[HomeController::class,'kegiatan']);
Route::get('/bidang1',[HomeController::class,'bidang1']);
Route::get('/pengumuman',[HomeController::class,'pengumuman']);

Route::get('/auth',[UserController::class,'login']);
Route::post('/auth',[UserController::class,'auth']);

Route::middleware('StatusLogin')->group(function(){

    Route::get('/dashboard',[UserController::class,'dashboard']);
    Route::get('/logout',[UserController::class,'logout']);
    
    Route::get('/admin-kotaksaran', [KotaksaranController::class, 'show']);
    Route::get('/create-kotaksaran', [KotaksaranController::class, 'create']);
    Route::post('/create-kotaksaran', [KotaksaranController::class, 'add']);
    Route::get('/delete-kotaksaran/{id}', [KotaksaranController::class, 'delete']);
    
    
    Route::get('/admin-pengumuman', [PengumumanController::class, 'show']);
    Route::get('/create-pengumuman', [PengumumanController::class, 'create']);
    Route::post('/create-pengumuman', [PengumumanController::class, 'add']);
    Route::get('/update-pengumuman/{id}', [PengumumanController::class, 'edit']);
    Route::post('/update-pengumuman/{id}', [PengumumanController::class, 'update']);
    Route::get('/delete-pengumuman/{id}', [PengumumanController::class, 'delete']);
    Route::post('/admin-pengumuman', [PengumumanController::class, 'search']);
    
    Route::get('/admin-kegiatan', [KegiatanController::class, 'show']);
    Route::get('/create-kegiatan', [KegiatanController::class, 'create']);
    Route::post('/create-kegiatan', [KegiatanController::class, 'add']);
    Route::get('/update-kegiatan/{id}', [KegiatanController::class, 'edit']);
    Route::post('/update-kegiatan/{id}', [KegiatanController::class, 'update']);
    Route::get('/delete-kegiatan/{id}', [KegiatanController::class, 'delete']);
    Route::post('/admin-kegiatan', [KegiatanController::class, 'search']);
    
    Route::get('/admin-bidang', [BidangController::class, 'show']);
    Route::get('/create-bidang', [BidangController::class, 'create']);
    Route::post('/create-bidang', [BidangController::class, 'add']);
    Route::get('/update-bidang/{id}', [BidangController::class, 'edit']);
    Route::post('/update-bidang/{id}', [BidangController::class, 'update']);
    Route::get('/delete-bidang/{id}', [BidangController::class, 'delete']);
    Route::post('/admin-bidang', [BidangController::class, 'search']);

    Route::get('/admin-bidang1', [Bidang1Controller::class, 'show']);
    Route::get('/create-bidang1', [Bidang1Controller::class, 'create']);
    Route::post('/create-bidang1', [Bidang1Controller::class, 'add']);
    Route::get('/update-bidang1/{id}', [Bidang1Controller::class, 'edit']);
    Route::post('/update-bidang1/{id}', [Bidang1Controller::class, 'update']);
    Route::get('/delete-bidang1/{id}', [Bidang1Controller::class, 'delete']);
    Route::post('/admin-bidang1', [Bidang1Controller::class, 'search']);

    Route::get('/admin-bidang2', [Bidang2Controller::class, 'show']);
    Route::get('/create-bidang2', [Bidang2Controller::class, 'create']);
    Route::post('/create-bidang2', [Bidang2Controller::class, 'add']);
    Route::get('/update-bidang2/{id}', [Bidang2Controller::class, 'edit']);
    Route::post('/update-bidang2/{id}', [Bidang2Controller::class, 'update']);
    Route::get('/delete-bidang2/{id}', [Bidang2Controller::class, 'delete']);
    Route::post('/admin-bidang2', [Bidang2Controller::class, 'search']);

    Route::get('/admin-bidang3', [Bidang3Controller::class, 'show']);
    Route::get('/create-bidang3', [Bidang3Controller::class, 'create']);
    Route::post('/create-bidang3', [Bidang3Controller::class, 'add']);
    Route::get('/update-bidang3/{id}', [Bidang3Controller::class, 'edit']);
    Route::post('/update-bidang3/{id}', [Bidang3Controller::class, 'update']);
    Route::get('/delete-bidang3/{id}', [Bidang3Controller::class, 'delete']);
    Route::post('/admin-bidang3', [Bidang3Controller::class, 'search']);

    Route::get('/admin-bidang4', [Bidang4Controller::class, 'show']);
    Route::get('/create-bidang4', [Bidang4Controller::class, 'create']);
    Route::post('/create-bidang4', [Bidang4Controller::class, 'add']);
    Route::get('/update-bidang4/{id}', [Bidang4Controller::class, 'edit']);
    Route::post('/update-bidang4/{id}', [Bidang4Controller::class, 'update']);
    Route::get('/delete-bidang4/{id}', [Bidang4Controller::class, 'delete']);
    Route::post('/admin-bidang4', [Bidang4Controller::class, 'search']);

    Route::get('/admin-bidang5', [Bidang5Controller::class, 'show']);
    Route::get('/create-bidang5', [Bidang5Controller::class, 'create']);
    Route::post('/create-bidang5', [Bidang5Controller::class, 'add']);
    Route::get('/update-bidang5/{id}', [Bidang5Controller::class, 'edit']);
    Route::post('/update-bidang5/{id}', [Bidang5Controller::class, 'update']);
    Route::get('/delete-bidang5/{id}', [Bidang5Controller::class, 'delete']);
    Route::post('/admin-bidang5', [Bidang5Controller::class, 'search']);

    
    Route::get('/admin-bidang6', [Bidang6Controller::class, 'show']);
    Route::get('/create-bidang6', [Bidang6Controller::class, 'create']);
    Route::post('/create-bidang6', [Bidang6Controller::class, 'add']);
    Route::get('/update-bidang6/{id}', [Bidang6Controller::class, 'edit']);
    Route::post('/update-bidang6/{id}', [Bidang6Controller::class, 'update']);
    Route::get('/delete-bidang6/{id}', [Bidang6Controller::class, 'delete']);
    Route::post('/admin-bidang6', [Bidang6Controller::class, 'search']);

    Route::get('/admin-bidang7', [Bidang7Controller::class, 'show']);
    Route::get('/create-bidang7', [Bidang7Controller::class, 'create']);
    Route::post('/create-bidang7', [Bidang7Controller::class, 'add']);
    Route::get('/update-bidang7/{id}', [Bidang7Controller::class, 'edit']);
    Route::post('/update-bidang7/{id}', [Bidang7Controller::class, 'update']);
    Route::get('/delete-bidang7/{id}', [Bidang7Controller::class, 'delete']);
    Route::post('/admin-bidang7', [Bidang7Controller::class, 'search']);

    Route::get('/admin-bidang8', [Bidang8Controller::class, 'show']);
    Route::get('/create-bidang8', [Bidang8Controller::class, 'create']);
    Route::post('/create-bidang8', [Bidang8Controller::class, 'add']);
    Route::get('/update-bidang8/{id}', [Bidang8Controller::class, 'edit']);
    Route::post('/update-bidang8/{id}', [Bidang8Controller::class, 'update']);
    Route::get('/delete-bidang8/{id}', [Bidang8Controller::class, 'delete']);
    Route::post('/admin-bidang8', [Bidang8Controller::class, 'search']);

    Route::get('/admin-bidang9', [Bidang9Controller::class, 'show']);
    Route::get('/create-bidang9', [Bidang9Controller::class, 'create']);
    Route::post('/create-bidang9', [Bidang9Controller::class, 'add']);
    Route::get('/update-bidang9/{id}', [Bidang9Controller::class, 'edit']);
    Route::post('/update-bidang9/{id}', [Bidang9Controller::class, 'update']);
    Route::get('/delete-bidang9/{id}', [Bidang9Controller::class, 'delete']);
    Route::post('/admin-bidang9', [Bidang9Controller::class, 'search']);

});