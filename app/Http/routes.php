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


//categoria
Route::resource('categoria','CategoriaController');
Route::get('listacategoria1','CategoriaController@listacategoria1');

//cliente
Route::resource('cliente','ClienteController');


//lote
Route::resource('lote','LoteController');
Route::get('cargar_lote/{punto}','LoteController@cargar_lote');


//seccion
Route::get('seccion1','LoteController@seccion1');

//
Route::get('seccion1_reserva','ReservaController@seccion1_reserva');
Route::resource('reserva','ReservaController');


//manzano
Route::resource('manzano','ManzanoController');
Route::get('cargar_manzano/{id}','ManzanoController@cargar_manzano');

//vendedor
Route::resource('vendedor','VendedorController');


//asiento
Route::get('asiento/{id}','AsientoController@index');
Route::get('lista_asiento','AsientoController@lista_asiento');
Route::resource('asiento','AsientoController');
Route::resource('balance_apertura','AsientoController');
Route::resource('menu_categoria','AsientoController@menu_categoria');


Route::get('libro_mayor','AsientoController@libro_mayor');

Route::resource('libro_diario','AsientoController@libro_diario');
//reportes de los balances
Route::get('reporte_libro_diario/{fecha1}/{fecha2}','AsientoController@reporte_libro_diario');
Route::get('reporte_libro_mayor/{fecha1}/{fecha2}','AsientoController@reporte_libro_mayor');

//moneda
Route::resource('moneda','MonedaController');

//login
Route::resource('/','LoginController');
Route::resource('login','LoginController@store');
Route::get('logout','LoginController@logout');

//cuenta
Route::resource('cuenta','CuentaController');
Route::get('lista_cuenta','CuentaController@lista_cuenta');

//detalle de asiento
Route::resource('detalle','Detallecontroller');

//extrar codigo
Route::get('extraercodigo','CuentaController@extraercodigo');




//usuario
Route::resource('usuario','UsuarioController');
//empresa
Route::resource('empresa','EmpresaController');




