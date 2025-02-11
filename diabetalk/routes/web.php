<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DiabetalkingController;
use App\Http\Controllers\PengingatObatController;
use App\Http\Controllers\TanyaDiabetalkController;
use App\Http\Controllers\CatatanKesehatanController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DietDanIntakeZatGiziController;

Route::get('/', function(){
    return view('landing_page_1');

});
Route::get('/landing_page_2', function () { 
    return view('landing_page_2'); 
})->name('landing_page_2');

Route::get('/menu', function () {
    return view('menu.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/verify-otp', [RegisteredUserController::class, 'verifyOtp'])->name('verifyOtp');

Route::get('/otp-verification', function(){
    return view('otp-verification');
})->name('otp-verification');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('catatankesehatan', CatatanKesehatanController::class);
    Route::resource('dietdanintakezatgizi', DietDanIntakeZatGiziController::class);
    Route::resource('pengingatobat', PengingatObatController::class);
    Route::resource('diabetalking', DiabetalkingController::class);
    Route::resource('tanyadiabetalk', TanyaDiabetalkController::class);
    Route::get('intro_page_1', function () {
        return view('introPage.intro_page_1');
    })->name('intro_page_1');
    Route::get('intro_page_2', function(){
        return view('introPage.intro_page_2');
    });
    Route::get('intro_page_3', function () {
        return view('introPage.intro_page_3');
    });
});

require __DIR__.'/auth.php';
