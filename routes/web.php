<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LDT_QUAN_TRIController;
use App\Http\Controllers\LDT_LOAI_SAN_PHAMController;
use App\Http\Controllers\LDT_SAN_PHAMController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admins/ldt-login',[LDT_QUAN_TRIController::class,'ldtLogin'])->name('admins.ldtLogin');     
Route::post('/admins/ldt-login',[LDT_QUAN_TRIController::class,'ldtLoginSubmit'])->name('Admins.ldtLoginSubmit');

#admins -route
Route::get('/ldt-admins',function(){
    return view('ldtAdmins.index');
});

Route::get('/ldt-admins/ldt-loai-san-pham',[LDT_LOAI_SAN_PHAMController::class,'ldtList'])->name('ldtAdmins.ldtLoaiSanPham');



Route::get('/ldt-admins/ldt-loai-san-pham/ldt-create',[LDT_LOAI_SAN_PHAMController::class,'ldtCreate'])->name('ldtAdmins.ldtLoaiSanPham.ldtCreate');
Route::post('/ldt-admins/ldt-loai-san-pham/ldt-create',[LDT_LOAI_SAN_PHAMController::class,'ldtCreateSubmit'])->name('ldtAdmins.ldtLoaiSanPham.ldtCreateSubmit');



Route::get('/ldt-admins/ldt-loai-san-pham/ldt-edit/{id}',[LDT_LOAI_SAN_PHAMController::class,'ldtEdit'])->name('ldtAdmins.ldtLoaiSanPham.ldtEdit');
Route::post('/ldt-admins/ldt-loai-san-pham/ldt-edit',[LDT_LOAI_SAN_PHAMController::class,'ldtEditSubmit'])->name('ldtAdmins.ldtLoaiSanPham.ldtEditSubmit');



Route::get('/ldt-admins/ldt-loai-san-pham/ldt-delete/{id}',[LDT_LOAI_SAN_PHAMController::class,'ldtDelete'])->name('ldtAdmins.ldtLoaiSanPham.ldtDelete');



Route::get('/ldt-admins/ldt-loai-san-pham/ldt-insert',
        [LDT_LOAI_SAN_PHAMController::class,'ldtInsert'])->name('ldtAdmins.ldtLoaiSanPham.ldtInsert');
//        
Route::post('/ldt-admins/ldt-loai-san-pham/ldt-insert',
        [LDT_LOAI_SAN_PHAMController::class,'ldtInsertSubmit'])->name('ldtAdmins.ldtLoaiSanPham.ldtInsertSubmit');
//
Route::get('/ldt-admins/ldt-san-pham',[LDT_SAN_PHAMController::class,'ldtList'])->name('ldtAdmins.ldtSanPham');  

#create
Route::get('/ldt-admins/ldt-san-pham/ldt-create',[LDT_SAN_PHAMController::class,'ldtCreate'])->name('ldtAdmins.ldtSanPham.ldtcreate');  
Route::post('/ldt-admins/ldt-san-pham-ldt-create',[LDT_SAN_PHAMController::class,'ldtCreateSubmit'])->name('ldtAdmins.ldtSanPham.ldtcreatesubmit');  

Route::get('/ldt-admins/ldt-san-pham/ldt-detail/{id}',[LDT_SAN_PHAMController::class,'ldtDetail'])->name('ldtadmin.ldtsanpham.ldtdetail');  
Route::get('/ldt-admins/ldt-san-pham/ldt-edit/{id}',[LDT_SAN_PHAMController::class,'ldtEdit'])->name('ldtadmin.ldtsanpham.ldtedit');  
Route::post('/ldt-admins/ldt-san-pham/ldt-edit/{id}',[LDT_SAN_PHAMController::class,'ldtEditSubmit'])->name('ldtadmin.ldtsanpham.ldteditsubmit');  
