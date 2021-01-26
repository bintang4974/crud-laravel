<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

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

Route::get('/', [PegawaiController::class, 'index'])->name('pegawai');
Route::get('/add', [PegawaiController::class, 'add']);
Route::post('/insert', [PegawaiController::class, 'insert']);
Route::get('/edit/{id_pegawai}', [PegawaiController::class, 'edit']);
Route::post('/update/{id_pegawai}', [PegawaiController::class, 'update']);
Route::get('/delete/{id_pegawai}', [PegawaiController::class, 'delete']);
