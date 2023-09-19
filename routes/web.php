<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SekolahController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/default', function () {
    return view('default');
})->middleware(['auth', 'verified'])->name('default');

Route::get('/sekolahs', [SekolahController::class, 'index']) -> name('sekolahs.index');

Route::get('/sekolahs/tambah', [SekolahController::class, 'tambah'])-> name('sekolahs.tambah');

Route::post('/sekolahs', [SekolahController::class, 'Simpan']) -> name('sekolahs.Simpan');

Route::get('/sekolahs/{id}/edit', [SekolahController::class, 'edit']) ->name('sekolahs.edit');

Route::put('/sekolahs/{id}', [SekolahController::class, 'update']) ->name('sekolahs.update');

Route::delete('/sekolahs/{id}' , [SekolahController::class, 'hapus']) ->name('sekolahs.hapus');

//Route::resource('sekolahs', SekolahController::class);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
