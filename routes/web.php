<?php

use App\Http\Controllers\SchoolController;
use App\Http\Controllers\AppointmentsFundingController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
            return redirect()->route('personnels.show', ['personnel' => $user->personnel]);
        } elseif ($user->role === 'school_head') {
            return redirect()->route('schools.profile', ['school' => $user->personnel->school]);
        } elseif ($user->role === 'admin') {
            return redirect()->route('admin.home');
        } else {
            return redirect()->route('/login');
        }
    });

    // Teacher Routes List
    Route::middleware(['user-access:teacher'])->group(function () {
        Route::controller('App\Http\Controllers\PersonnelController'::class)->group(function(){
            Route::get('personnels', 'index')->name('personnels.index');
            Route::get('profile/{personnel}', 'show')->name('personnels.profile');
            Route::get('personnels/{personnel}', 'update')->name('personnels.update');
        });
    });

    // School Head Routes List
    Route::middleware(['user-access:school_head'])->group(function () {
        Route::controller('App\Http\Controllers\SchoolController'::class)->group(function(){
            Route::get('/schools/export/{school}', 'export')->name('schools.export');
            Route::get('schools/{school}', 'show')->name('schools.show');
            Route::get('school_profile/{school}', 'show')->name('schools.profile');
            Route::get('schools/{school}', 'update')->name('schools.update');
        });
        Route::resource('personnels', 'App\Http\Controllers\PersonnelController'::class);
    });

    // Admin Routes List
    Route::middleware(['user-access:admin'])->group(function () {
        Route::get('/dashboard', [HomeController::class, 'adminHome'])->name('admin.home');

        Route::controller(PersonnelController::class)->group(function(){
            Route::get('personnels/', 'index')->name('personnels.index');
            Route::get('personnel/create', 'create')->name('personnels.create');
            Route::post('personnels/', 'store')->name('personnels.store');
            Route::get('personnels/{personnel}/edit', 'edit')->name('personnels.edit');
            Route::patch('personnels/{personnel}', 'update')->name('personnels.update');
            Route::get('personnels/{personnel}', 'show')->name('personnels.show');
            Route::delete('personnels/', 'destroy')->name('personnels.destroy');
            Route::get('personnels/profile/{personnel}', 'show')->name('personnels.profile');
        });

        Route::resource('schools', 'App\Http\Controllers\SchoolController'::class);

        Route::controller('App\Http\Controllers\SchoolController'::class)->group(function(){
            Route::get('/schools/export/{school}', 'export')->name('schools.export');
        });


    });
});
