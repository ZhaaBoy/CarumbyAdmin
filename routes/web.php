<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\{PreOrderController, AddProductController, OrderController,OtherController};

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

Route::get('/liveproduct', [AddProductController::class, 'live'])->name('preorder');
Route::get('/addproduct', [AddProductController::class, 'index'])->name('addproduct');
Route::get('/daftarproduct', [PreOrderController::class, 'index'])->name('daftarproduk');
Route::get('/waktuproduk', [PreOrderController::class, 'waktu'])->name('waktuproduk');
Route::get('/uploadproduk', [PreOrderController::class, 'upload'])->name('uploadproduk');
Route::get('/pesanan', [OrderController::class, 'index'])->name('orderproduct');
Route::get('/broadcast', [OrderController::class, 'broadcast'])->name('broadcast');
Route::get('/pelanggan', [OtherController::class, 'index'])->name('pelanggan');
Route::post('/upsize', [AddProductController::class, 'store'])->name('size.store');
Route::post('/upcolor', [AddProductController::class, 'color'])->name('color.store');

