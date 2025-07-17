<?php

use App\Http\Controllers\BelajarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}); 

// Resource route untuk CRUD mahasiswa
Route::resource('mhs', BelajarController::class);

// Tambahan route untuk tampilan khusus
Route::get('/mhs-baru', [BelajarController::class, 'index'])->name('mhs-baru');

// Form input data mahasiswa (jika tidak mau pakai resource create)
Route::get('/mhs-create', function () {
    return view('create');
})->name('mhs-create');

// Simpan data mahasiswa (gunakan POST!)
Route::post('/mhs-insert', [BelajarController::class, 'saveData'])->name('mhs-insert');

