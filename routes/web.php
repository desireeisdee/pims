<?php

use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\SchoolController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::get('/sf7', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::controller('App\Http\Controllers\Auth\LoginController'::class)->group(function(){
    Route::get('/', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/logout', 'logout')->name('logout');
});

Route::controller('App\Http\Controllers\Auth\RegisterController'::class)->group(function(){
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
});

Route::controller('App\Http\Controllers\SchoolController'::class)->group(function(){
    Route::get('/schools', 'index')->name('schools.index');
    Route::get('/schools/export/{id}', 'export')->name('schools.export');
});
Route::resource('schools', SchoolController::class);
Route::get('/schools/export/{school}', [SchoolController::class, 'export'])->name('schools.export');
Route::resource('personnels', PersonnelController::class);
