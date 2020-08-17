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
    return view('welcome');
});

Route::group(['middleware' => ['web']], function () {
	Route::resource('detalles', 'DetallesController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('detalles', 'DetallesController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('detalles', 'detallesController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('detalles', 'detallesController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('detalles', 'detallesController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('detalles', 'detallesController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('detalles', 'detallesController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('detalles1', 'detalles1Controller');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('detallesimplicados', 'detallesimplicadosController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('detalleimpli', 'detalleimpliController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('detalleimpli', 'detalleimpliController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('detalleimpli', 'detalleimpliController');
});