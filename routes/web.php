<?php

use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        $user = Auth::user();
        if ($user->role === 'teacher') {
            return redirect()->route('teacher.home');
        } elseif ($user->role === 'school_head') {
            return redirect()->route('school_head.home');
        } elseif ($user->role === 'admin') {
            return redirect()->route('admin.home');
        } else {
            return redirect()->route('/login');
        }
    });

    // Teacher Routes List
    Route::middleware(['user-access:teacher'])->group(function () {
        Route::get('/teacher/profile',  [HomeController::class, 'teacherHome'])->name('teacher.home');
    });

    // School Head Routes List
    Route::middleware(['user-access:school_head'])->group(function () {
        Route::get('/profile',  [HomeController::class, 'schoolHeadHome'])->name('school_head.home');
    });

    // Admin Routes List
    Route::middleware(['user-access:admin'])->group(function () {
        Route::get('/dashboard', [HomeController::class, 'adminHome'])->name('dashboard');
    });
});

    // Route::get('/schools/export/{school}', [SchoolController::class, 'export'])->name('schools.export');
    // Route::controller('App\Http\Controllers\SchoolController'::class)->group(function(){
    //     Route::get('/schools', 'index')->name('schools.index');
    //     Route::get('/schools/export/{id}', 'export')->name('schools.export');
    // });
    // Route::resource('schools', SchoolController::class);
    // Route::resource('personnels', PersonnelController::class);

// Route::resource('schools', SchoolController::class);
//
// Route::resource('personnels', PersonnelController::class);
