<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\JadwalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [App\Http\Controllers\FrontendController::class, 'landingpage'])->name('landing-page');
Route::get('/tentang-kami', [App\Http\Controllers\FrontendController::class, 'tentang'])->name('tentang-kami');
Route::get('/kontak-kami', [App\Http\Controllers\FrontendController::class, 'kontak'])->name('kontak-kami');
Route::get('/galeri-vila', [App\Http\Controllers\FrontendController::class, 'galeri'])->name('galerivila');
Route::get('/jadwal-ketersediaan', [App\Http\Controllers\FrontendController::class, 'jadwal'])->name('frontendjadwal');

Auth::routes();


Route::get('/dashboard', [App\Http\Controllers\BackendController::class, 'dashboard'])->name('dashboard')->middleware('auth');;
Route::resource('galeri', GaleriController::class)->middleware('auth');;
Route::resource('jadwal', JadwalController::class)->middleware('auth');;
Route::get('/getJadwal/', [App\Http\Controllers\JadwalController::class, 'getJadwal'])->name('getJadwal');
Route::get('/bakend-jadwal/', [App\Http\Controllers\JadwalController::class, 'backendjadwal'])->name('backendjadwal');


Route::get('/home', [App\Http\Controllers\FrontendController::class, 'index'])->name('home');
