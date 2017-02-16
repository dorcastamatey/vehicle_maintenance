<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('driver', function () {
    return view('forms.driver');
});

Route::get('/', function () {
    return view('home');
});

Route::get('headers', function () {
    return view('headers');
});
Route::get('maintenance', function () {
    return view('forms.maintenance');
});
Route::get('trek', function () {
    return view('forms.trek');
});
Route::get('vehicle', function () {
    return view('forms.vehicle');
});
Route::get('years', function () {
    return view('forms.years');
});
Route::get('vehicle_name', function () {
    return view('forms.vehicle_name');
});
Route::get('login', function () {
    return view('forms.login');
});
Route::get('signup', function () {
    return view('forms.signup');
});