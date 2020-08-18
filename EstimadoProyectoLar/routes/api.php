<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => ['cors']], function () {
	Route::resource('detalles', 'DetallesController');
	Route::resource('detalles', 'DetallesController');
	Route::resource('detalles', 'detallesController');
	Route::resource('detalles', 'detallesController');
	Route::resource('detalles', 'detallesController');
	Route::resource('detalles', 'detallesController');
	Route::resource('detalles', 'detallesController');
	Route::resource('detalles1', 'detalles1Controller');
	Route::resource('detallesimplicados', 'detallesimplicadosController');
	Route::resource('detalleimpli', 'detalleimpliController');
	Route::resource('detalleimpli', 'detalleimpliController');
	Route::resource('detalleimpli', 'detalleimpliController');
	Route::resource('cronograma', 'cronogramaController');
	Route::resource('cronogramaactividades', 'cronogramaactividadesController');
	Route::resource('estimadorinsumos', 'estimadorinsumosController');
	Route::resource('trabajadors', 'trabajadorsController');
	Route::resource('insumos', 'insumosController');
});
