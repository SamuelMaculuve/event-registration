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

Route::get('/singleRegistration', function () {
    return view('single-registration');
});

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


Route::get('my_account', [App\Http\Controllers\MyAccountController::class, 'edit_profile'])->name('my_account');
Route::get('my_account_update', [App\Http\Controllers\MyAccountController::class, 'update_profile'])->name('my_account.update');
Route::get('my_account_chage_pass', [App\Http\Controllers\MyAccountController::class, 'change_pass'])->name('my_account.change_pass');

Route::post('/approve/{eventRegistration}', [App\Http\Controllers\EventRegistrationController::class, 'approveCompany'])->name('approve');
Route::post('/approveSingle/{eventRegistration}', [App\Http\Controllers\SingleEventRegistrationController::class, 'approveSingle'])->name('approve.single');

Route::post('/search', [App\Http\Controllers\EventRegistrationController::class, 'searchByNameOrCompany'])->name('searchByNameOrCompany');

Route::resource('/eventRegistration','\App\Http\Controllers\EventRegistrationController');
Route::resource('/single-event-registration','\App\Http\Controllers\SingleEventRegistrationController');

Route::get('generate-pdf', [App\Http\Controllers\EventRegistrationController::class, 'generatePDF'])->name('generate-pdf');
Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('roles', '\App\Http\Controllers\RoleController');
    Route::resource('users', '\App\Http\Controllers\UserController');
});

Route::get('send-mail', function () {

    $details = [
        'title' => 'Cadastro onfirmação de cadastro',
        'body' => 'Confirmação do cadastro do evento Business Picth PMEs-B2B 2022'
    ];

    \Mail::to('samuelmaculuve8@gmail.com')->send(new \App\Mail\MyTestMail($details));

    dd("Email is Sent.");
});
