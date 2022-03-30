<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SoptifyController;

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



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',  [SoptifyController::class, 'index'])->middleware(['auth'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/tambah', [SoptifyController::class, 'tambah'])->name('tambah');

Route::post('/insert', [SoptifyController::class, 'insert'])->name('insert');

Route::get('/show/{id}', [SoptifyController::class, 'show'])->name('show');
Route::post('/Update/{id}', [SoptifyController::class, 'Update'])->name('Update');

Route::get('/delete/{id}', [SoptifyController::class, 'delete'])->name('delete');

Route::get('/detailData/{id}', [SoptifyController::class, 'detailData'])->name('detailData');

require __DIR__.'/auth.php';
