<?php

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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/services1', function () {
    return view('services1');
});

Route::get('/services2', function () {
    return view('services2');
});

Route::get('/services3', function () {
    return view('services3');
});

Route::get('/services3', function () {
    return view('services3');
});

Route::get('/services4', function () {
    return view('services4');
});

Route::get('/services5', function () {
    return view('services5');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/submit_debt', function () {
    return view('submit_debt');
});

Route::post('store','CallbackController@store');

Route::post('/form/store','ContactFormController@store');

Route::get('/send/email', 'HomeController@mail');

Route::get('/emailsend', function () {
    return view('emailsend');
});