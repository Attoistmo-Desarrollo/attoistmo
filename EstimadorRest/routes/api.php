<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');
// estas rutas requiren de un token válido para poder accederse.
Route::group(['middleware' => 'auth.jwt'], function () {
    Route::post('/logout', 'AuthController@logout');
});
Route::resource('insumos', 'InsumoController');
Route::resource('trabajadors', 'TrabajadorController');
Route::resource('estimadorinsumos', 'EstimadorinsumoController');
Route::resource('personals', 'PersonalController');
Route::resource('detalles', 'detallesController');
Route::resource('detalles1', 'detalles1Controller');
Route::resource('detalleimpli', 'detalleimpliController');
Route::resource('cronograma', 'cronogramaController');
Route::resource('cronogramaactividades', 'cronogramaactividadesController');