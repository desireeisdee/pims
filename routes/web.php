<?php

use App\Http\Controllers\SchoolController;
use App\Http\Controllers\AppointmentsFundingController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::controller('App\Http\Controllers\Auth\LoginController'::class)->group(function(){
    Route::get('/', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/logout', 'logout')->name('logout');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::controller('App\Http\Controllers\Auth\RegisterController'::class)->group(function(){
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
});

Route::resource('schools', SchoolController::class);
Route::get('/schools/export/{school}', [SchoolController::class, 'export'])->name('schools.export');

Route::delete('/appointments_funding', AppointmentsFundingController::class .'@destroy')->name('appointments_fundings.destroy');

// Route::get('/schools', 'App\Http\Controllers\SchoolController@index')->name('schools.index');
// Route::post('/schools', 'App\Http\Controllers\SchoolController@store')->name('schools.store');
// Route::get('/schools', 'App\Http\Controllers\SchoolController@create')->name('schools.create');

// Route::get('schools/{school}', 'show')->name('schools.show');
// Route::get('schools/{school}', 'update')->name('schools.update');
// Route::get('schools/{school}', 'destroy')->name('schools.destroy');
// Route::get('schools/{school}/edit', 'edit')->name('schools.edit');
