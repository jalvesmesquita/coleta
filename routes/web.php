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
    return redirect()->action('HomeController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Rotas para o gerenciamento de motoristas ...
Route::group(['prefix' => 'motoristas'], function(){
    Route::get('/', ['as' => 'motorista.index', 'uses' => 'MotoristasController@index']);
    Route::get('/create', ['as' => 'motorista.create', 'uses' => 'MotoristasController@create']);
    Route::post('/store', ['as' => 'motorista.store', 'uses' => 'MotoristasController@store']);
    Route::get('/edit/{id}', ['as' => 'motorista.edit', 'uses' => 'MotoristasController@edit']);
    Route::post('/update/{id}', ['as' => 'motorista.update', 'uses' => 'MotoristasController@update']);
    Route::post('/destroy/{id}', ['as' => 'motorista.destroy', 'uses' => 'MotoristasController@destroy']);
});

// Rotas para o gerenciamento de veiculos ...
Route::group(['prefix' => 'veiculos'], function(){
    Route::get('/', ['as' => 'veiculo.index', 'uses' => 'VeiculosController@index']);
    Route::get('/create', ['as' => 'veiculo.create', 'uses' => 'VeiculosController@create']);
    Route::post('/store', ['as' => 'veiculo.store', 'uses' => 'VeiculosController@store']);
    Route::get('/edit/{id}', ['as' => 'veiculo.edit', 'uses' => 'VeiculosController@edit']);
    Route::post('/update/{id}', ['as' => 'veiculo.update', 'uses' => 'VeiculosController@update']);
    Route::post('/destroy/{id}', ['as' => 'veiculo.destroy', 'uses' => 'VeiculosController@destroy']);
});

// Rotas para o gerenciamento de ajudantes ...
Route::group(['prefix' => 'ajudantes'], function(){
    Route::get('/', ['as' => 'ajudante.index', 'uses' => 'AjudantesController@index']);
    Route::get('/create', ['as' => 'ajudante.create', 'uses' => 'AjudantesController@create']);
    Route::post('/store', ['as' => 'ajudante.store', 'uses' => 'AjudantesController@store']);
    Route::get('/edit/{id}', ['as' => 'ajudante.edit', 'uses' => 'AjudantesController@edit']);
    Route::post('/update/{id}', ['as' => 'ajudante.update', 'uses' => 'AjudantesController@update']);
    Route::post('/destroy/{id}', ['as' => 'ajudante.destroy', 'uses' => 'AjudantesController@destroy']);
});

// Rotas para o gerenciamento de Usuarios ...
Route::group(['prefix' => 'usuarios'], function(){
    Route::get('/', ['as' => 'usuario.index', 'uses' => 'UsuariosController@index']);
    Route::get('/create', ['as' => 'usuario.create', 'uses' => 'UsuariosController@create']);
    Route::post('/store', ['as' => 'usuario.store', 'uses' => 'UsuariosController@store']);
    Route::get('/edit/{id}', ['as' => 'usuario.edit', 'uses' => 'UsuariosController@edit']);
    Route::post('/update/{id}', ['as' => 'usuario.update', 'uses' => 'UsuariosController@update']);
    Route::post('/destroy/{id}', ['as' => 'usuario.destroy', 'uses' => 'UsuariosController@destroy']);
});

// Rotas para o gerenciamento das Coletas ...
Route::group(['prefix' => 'coletas'], function(){
    Route::get('/', ['as' => 'coleta.index', 'uses' => 'ColetaController@index']);
    Route::get('/create', ['as' => 'coleta.create', 'uses' => 'ColetaController@create']);
    Route::post('/store', ['as' => 'coleta.store', 'uses' => 'ColetaController@store']);
    Route::get('/edit/{id}', ['as' => 'coleta.edit', 'uses' => 'ColetaController@edit']);
    Route::get('/show/{id}', ['as' => 'coleta.show', 'uses' => 'ColetaController@show']);
    Route::post('/update/{id}', ['as' => 'coleta.update', 'uses' => 'ColetaController@update']);
    Route::post('/destroy/{id}', ['as' => 'coleta.destroy', 'uses' => 'ColetaController@destroy']);
});

// Rotas para o datatables.
Route::get('/motoristas-data', 'DatatablesController@anyData')->name('motoristas.data');
Route::get('/veiculos-data', 'DatatablesController@veiculosAnyData')->name('veiculos.data');
Route::get('/ajudantes-data', 'DatatablesController@ajudantesAnyData')->name('ajudantes.data');
Route::get('/usuarios-data', 'DatatablesController@usuariosAnyData')->name('usuarios.data');
Route::get('/coletas-data', 'DatatablesController@coletasAnyData')->name('coletas.data');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/map','HomeController@map');