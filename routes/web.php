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
    return view('welcome');
});


// Route::get('/testing', function () {
//     return view('test');
// });

Route::get('/test','Frontend@test');
Route::post('/addto','Frontend@save');
Route::get('/update/{id}','Frontend@updateform');
Route::get('/delete/{id}','Frontend@deleteform');