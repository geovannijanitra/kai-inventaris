<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\DropdownController;

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
})->middleware('auth');

// Route::group(['middleware' => 'auth'],function (){
//     Route::resource('merk', JenisController::class);
//     Route::resource('jenis', MerkController::class);
Route::get('/login',  [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',  [LoginController::class, 'authenticate']);



Route::post('/logout',  [LoginController::class, 'logout']);
// });
Route::group(
    ['middleware' => 'auth'],
    function () {

        Route::resource('/data', DataController::class);
        Route::resource('/merk', MerkController::class);
        Route::resource('/jenis', JenisController::class);

        Route::post('/change_password/{id}', [PasswordController::class, 'update']);

        Route::get('merk/{id}/add', [JenisController::class, 'add']);
        Route::get('merk/{id}/merkbarang', [JenisController::class, 'merkbarang']);
        Route::get('/data/{id}/printData', [DataController::class, 'printData']);



        Route::get('get-jenis', [DropdownController::class, 'getJenis'])->name('getJenis');
        Route::get('get-merk', [DropdownController::class, 'getMerk'])->name('getMerk');
    }
);



// Route::get  ('/getmerk', [DataController::class, 'getmerk']);

// Route::view('/data', 'data.view');
// Route::view('/merk', 'merk.view');
// Route::view('/jenis', 'jenis.create');
