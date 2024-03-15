<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AlamatController;
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
//     return view('login');
// });

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/', [DataController::class, 'index'])->name('index');
Route::get('/produk', [DataController::class, 'produk'])->name('produk');
Route::get('/keranjang', [DataController::class, 'keranjang'])->name('keranjang');
Route::get('/favorit', [DataController::class, 'favorit'])->name('favorit');

Route::get('/sale', [DataController::class, 'sale'])->name('sale');
Route::get('/kemeja', [DataController::class, 'kemeja'])->name('kemeja');
Route::get('/outer', [DataController::class, 'outer'])->name('outer');
Route::get('/tunik', [DataController::class, 'tunik'])->name('tunik');
Route::get('/dress', [DataController::class, 'dress'])->name('dress');
Route::get('/blouse', [DataController::class, 'blouse'])->name('blouse');
Route::get('/celana', [DataController::class, 'celana'])->name('celana');
Route::get('/rok', [DataController::class, 'rok'])->name('rok');

Route::get('/{data:id}/detail-barang', [DataController::class, 'detailBarang']);

Route::get('/checkout',[DataController::class, 'checkout'])->name('checkout');

//profile
Route::get('/informasi', [DataController::class, 'informasi'])->name('informasi');
Route::get('/alamat', [AlamatController::class, 'alamat'])->name('alamat');
Route::get('/tambahAlamat', [AlamatController::class, 'tambahAlamat'])->name('tamabahAlamat');
Route::post('/create-alamat', [AlamatController::class, 'createAlamat'])->name('createAlamat');
Route::get('/pesanan', [DataController::class, 'pesanan'])->name('pesanan');
Route::get('/lihatDetail', [DataController::class, 'lihatDetail'])->name('lihatDetail');
Route::get('/penilaian', [DataController::class, 'penilaian'])->name('penilaian');

Route::get('/tambah', [DataController::class, 'Tambahdata']);
Route::post('/tambah-data', [DataController::class, 'createdata']);

