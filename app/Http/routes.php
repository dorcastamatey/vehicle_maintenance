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

Route::get('/', function () {
    return view('home');
});
Route::get('/forms/input_forms', function () {
    return view('forms.input_forms');
});
Route::get('/login', function () {
    return view('forms.login');
});
Route::get('/sign_up', function () {
    return view('forms.sign_up');
});

//Route::get('/viewDriver', function () {
//    return view('forms.viewDriver');
//});
//Route::get('/edit', function () {
//    return view('forms.edit');
//});
Route::get('/viewVehicleDetails', function () {
    return view('forms.viewVehicleDetails');
});
//Route::get('/viewMaintenance', function () {
//    return view('forms.viewMaintenance');
//});
//Route::get('vehicle_name', function () {
//    return view('forms.vehicle_name');
//});

//Route::post('/forms/sign_up','AddUserController@addUser');
Route::post('/forms/input_forms1','driversController@addDriver');
Route::post('/forms/input_forms2','maintenanceController@addMaintenance');
Route::post('/forms/input_forms3','trekController@addTrek');
//Route::post('/forms/viewDriverEdit','driversController@editDriver');
Route::post('/forms/input_forms','vehicleDetailsController@addVehicleDetails');
//Route::post('/forms/view','vehicleNameController@viewVehicle');

Route::post('/forms/input_forms4','vehicleNameController@addVehicleName');
Route::post('/forms/input_forms6','yearController@addYear');

Route::get('/forms/viewDriver','driversController@displayDriver');
//Route::get('/forms/{driver}','driversController@editDriver');
//Route::put('/forms/{driver}','driversController@updateDriver');
Route::get('/forms/viewMaintenance','maintenanceController@viewMaintenance');
Route::get('/forms/input_forms','vehicleNameController@viewVehicleName');
//Route::get('/forms/input_forms','yearController@viewYear');
Route::get('/forms/viewTrek','trekController@viewTrek');
Route::get('/forms/viewVehicleDetails','vehicleDetailsController@viewVehicleDetails');

//
//Route::get('headers', function () {
//    return view('headers');
//});
//Route::get('maintenance', function () {
//    return view('forms.maintenance');
//});
//Route::get('input_forms', function () {
//    return view('forms.input_forms');
//});
//Route::get('trek', function () {
//    return view('forms.trek');
//});
//Route::get('vehicle', function () {
//    return view('forms.vehicle');
//});
//Route::get('years', function () {
//    return view('forms.years');
//});

