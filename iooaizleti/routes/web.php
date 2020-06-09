<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');


//ADMIN RUTE
Route::group(['middleware' => ['web','admin']], function()
{
    Route::get('/cms/index', 'HomeController@index')->name('admin');
    Route::resource('/cms/brod', 'BrodController');
    Route::resource('/cms/ruta', 'RutaController');
    Route::resource('/cms/zaposlenik', 'ZaposlenikController');
    Route::resource('/cms/kategorija', 'kategorijaGostController');
});

//AUTH RUTE
Route::group(['middleware' => ['web','auth']], function()
{
    Route::get('/index', function () {return view('index');});   
});
