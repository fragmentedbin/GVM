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
    return view('index');
})->name('home');

Route::get('/test', function () {
    return view('test');
});

Route::get('/profileGvm', function () {
    return view('profileGvm');
})->name('profileGvm');

//SUBMIT FORM LINK
    Route::get('/form/sonyForm', function () {
    return view('/form/sonyForm');
})->name('sonyForm');

Route::get('/form/warnerForm', function () {
return view('/form/warnerForm');
})->name('warnerForm');
//

Route::get('/privacy', function () {
return view('/privacy');
})->name('privacyPolicy');
