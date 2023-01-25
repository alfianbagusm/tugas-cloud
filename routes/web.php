<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InternalController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\GaleriController;

Auth::routes();
Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

Route::get('/', function () { return view('home'); })->name('welcome');

//Admin
Route::get('admin', [HomeController::class, 'admin'])->name('admin')->middleware('roleuser');

//Internal
Route::get('galeripemain', [InternalController::class, 'galeripemain']);
Route::get('galeriofficial', [InternalController::class, 'galeriofficial']);
Route::get('internal', [InternalController::class, 'index'])->name('internal')->middleware('roleuser');
Route::POST('save/internal', [InternalController::class, 'store'])->middleware('roleuser');
Route::get('edit/internal/{id}', [InternalController::class, 'show'])->middleware('roleuser');
Route::POST('update/internal', [InternalController::class, 'update'])->middleware('roleuser');
Route::get('delete/internal/{id}', [InternalController::class, 'destroy'])->middleware('roleuser');
//Daftar
Route::get('daftar', [DaftarController::class, 'index'])->name('daftar');
Route::POST('save/daftar', [DaftarController::class, 'store']);
Route::POST('save/daftar2', [DaftarController::class, 'store2']);
Route::get('edit/daftar/{id}', [DaftarController::class, 'show']);
Route::POST('update/daftar', [DaftarController::class, 'update']);
Route::get('delete/daftar/{id}', [DaftarController::class, 'destroy']);
//Galeri
Route::get('galerifoto', [GaleriController::class, 'foto']);
Route::get('berita', [GaleriController::class, 'berita_user']);
Route::get('galeri', [GaleriController::class, 'index'])->name('galeri')->middleware('roleuser');
Route::POST('save/galeri', [GaleriController::class, 'store'])->middleware('roleuser');
Route::get('edit/galeri/{id}', [GaleriController::class, 'show'])->middleware('roleuser');
Route::POST('update/galeri', [GaleriController::class, 'update'])->middleware('roleuser');
Route::get('delete/galeri/{id}', [GaleriController::class, 'destroy'])->middleware('roleuser');

//static data 
Route::get('sejarah', function () { return view('sejarah'); });
Route::get('program', function () { return view('program'); });