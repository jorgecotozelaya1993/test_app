<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


//Routas Productos
Route::get('/clientes', 'ClientesController@index')->name('clientes.index');
Route::post('/clientes', 'ClientesController@store')->name('clientes.store');
Route::get('/clientes/{cliente}', 'ClientesController@edit')->name('clientes.edit');
Route::put('/clientes/{cliente}', 'ClientesController@update')->name('clientes.update');
Route::delete('/clientes/{cliente}', 'ClientesController@destroy')->name('clientes.destroy');


//Routas Productos
Route::get('/productos', 'ProductosController@index')->name('productos.index');
Route::post('/productos', 'ProductosController@store')->name('productos.store');
Route::get('/productos/{producto}', 'ProductosController@edit')->name('productos.edit');
Route::put('/productos/{producto}', 'ProductosController@update')->name('productos.update');
Route::delete('/productos/{producto}', 'ProductosController@destroy')->name('productos.delete');


//Routas Productos
Route::get('/ventas', 'VentasController@index')->name('ventas.index');
Route::post('/ventas', 'VentasController@store')->name('ventas.store');
Route::get('/ventas/{venta}', 'VentasController@edit')->name('ventas.edit');
Route::put('/ventas/{venta}', 'VentasController@update')->name('ventas.update');
Route::delete('/ventas/{id}', 'VentasController@destroy')->name('ventas.destroy');


//Route Reporte

Route::get('/reporte', 'ReporteController@index')->name('reporte');