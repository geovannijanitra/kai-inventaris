<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\JenisController;

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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/', function () {
    return view('home');
});

// Route::group(['middleware' => 'auth'],function (){
//     Route::resource('merk', JenisController::class);
//     Route::resource('jenis', MerkController::class);

// });
Route::resource('/data', DataController::class);
Route::resource('/merk', MerkController::class);
Route::resource('/jenis', JenisController::class);

// Route::view('/data', 'data.view');
// Route::view('/merk', 'merk.view');
// Route::view('/jenis', 'jenis.view');
