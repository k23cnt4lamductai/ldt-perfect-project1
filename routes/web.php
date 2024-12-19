<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admins/ldt-login',[LDT_QUAN_TRIController::class,'ldtLogin'])->name('admins.ldtLogin');     
Route::post('/admins/ldt-login',[LDT_QUAN_TRIController::class,'ldtLoginSubmit'])->name('admin.ldtLoginSubmit');
