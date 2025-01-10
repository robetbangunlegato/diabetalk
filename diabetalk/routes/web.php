<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DiabetalkingController;
use App\Http\Controllers\PengingatObatController;
use App\Http\Controllers\TanyaDiabetalkController;
use App\Http\Controllers\CatatanKesehatanController;
use App\Http\Controllers\DietDanIntakeZatGiziController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function () {
    return view('menu.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('catatankesehatan', CatatanKesehatanController::class);
    Route::resource('dietdanintakezatgizi', DietDanIntakeZatGiziController::class);
    Route::resource('pengingatobat', PengingatObatController::class);
    Route::resource('diabetalking', DiabetalkingController::class);
    Route::resource('tanyadiabetalk', TanyaDiabetalkController::class);
});

require __DIR__.'/auth.php';
