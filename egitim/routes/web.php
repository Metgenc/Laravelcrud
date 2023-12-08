<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrunController;

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

Route::get('/urun', [UrunController::class, 'index'])->name('urun.index');
Route::get('/urun/create', [UrunController::class, 'create'])->name('urun.create');
Route::post('/urun', [UrunController::class, 'store'])->name('urun.store');
Route::get('/urun/{urun}/edit', [UrunController::class, 'edit'])->name('urun.edit');
Route::put('/urun/{urun}/update', [UrunController::class, 'update'])->name('urun.update');
Route::delete('/urun/{urun}/delete', [UrunController::class, 'delete'])->name('urun.delete');