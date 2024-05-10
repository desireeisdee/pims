<?php

use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\SchoolController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/sf7', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::controller('App\Http\Controllers\Auth\LoginController'::class)->group(function(){
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::controller('App\Http\Controllers\Auth\RegisterController'::class)->group(function(){
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
});

//Teacher Routes List
Route::middleware(['auth', 'user-access:teacher'])->group(function () {
    // Route::get('/profile', [PersonnelController::class, 'create'])->name('personnels.create');
    Route::resource('personnels', PersonnelController::class);
});

//School Head Routes List
Route::middleware(['auth', 'user-access:school_head'])->group(function () {
    Route::get('/school_profile', function () {
        return view('school.profile');
    })->name('school.profile');
});

//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/schools/export/{school}', [SchoolController::class, 'export'])->name('schools.export');
    // Route::controller('App\Http\Controllers\SchoolController'::class)->group(function(){
    //     Route::get('/schools', 'index')->name('schools.index');
    //     Route::get('/schools/export/{id}', 'export')->name('schools.export');
    // });
    Route::resource('schools', SchoolController::class);
    Route::resource('personnels', PersonnelController::class);
});
// Route::resource('schools', SchoolController::class);
//
// Route::resource('personnels', PersonnelController::class);
