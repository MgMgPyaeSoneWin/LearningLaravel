<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
   return view('tasks');
});

/**
 * Add a new Task
 */
Route::post('/task',function (Request $request) {

});

/*
 * Delete An Existing Task
 */
Route::delete('/task/{id}', function ($id) {

});