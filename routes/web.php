<?php
use App\Http\Controllers\CineController;
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

Route::get('/cartelera2', [CineController::class, 'index'])->name('Cine.index');
Route::get('/Cartelera', [CineController::class, 'create'])->name('Cine.create');
Route::post('/store', [CineController::class, 'store'])->name('Cine.store');