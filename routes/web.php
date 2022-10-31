<?php

use Illuminate\Support\Facades\Route;

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
    return view('commingSoon.index');
});

Route::get('/registration', function () {
    return view('registration');
});

//Route::get('/welcome', function () {
//    return view('home');
//});

Route::get('/view', function () {
    return view('view');
});

Route::get('/list', function () {
    return view('list');
});

Route::get('/successful', function () {
    return view('registration-successful');
})->name('successful');
Auth::routes();


Route::post('/approve', [App\Http\Controllers\EventRegistrationController::class, 'approveCompany'])->name('approve');
Route::resource('/eventRegistration','\App\Http\Controllers\EventRegistrationController');
Route::get('generate-pdf', [App\Http\Controllers\EventRegistrationController::class, 'generatePDF'])->name('generate-pdf');
Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('roles', '\App\Http\Controllers\RoleController');
    Route::resource('users', '\App\Http\Controllers\UserController');
});
