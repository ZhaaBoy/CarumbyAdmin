<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\{PreOrderController, AddProductController};

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

Route::get('/liveproduct', [PreOrderController::class, 'index'])->name('preorder');
Route::get('/addproduct', [AddProductController::class, 'index'])->name('addproduct');
