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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//$this::resource('tipo_projetos','TipoProjetosController');  # Verificar a possibilidade de usar padrao resource depois.

//$this::get('/tipo_projeto', 'TipoProjetosController@index')->name('index');

$this::group(['prefix' => 'tipo_projeto'], function () {
    $this::get('/index',        ['uses' => 'TipoProjetosController@index',   'as' => 'tipo_projeto.index']);
    $this::get('/form',         ['uses' => 'TipoProjetosController@create',  'as' => 'create']);
    $this::post('/store',       ['uses' => 'TipoProjetosController@store',   'as' => 'tipo_projeto.store']);
    $this::get('/edit/{id}',    ['uses' => 'TipoProjetosController@edit',    'as' => 'tipo_projeto.edit']);
    $this::get('/destroy/{id}', ['uses' => 'TipoProjetosController@destroy', 'as' => 'destroy']);
});

$this::group(['prefix' => 'demandantes'], function () {
    $this::get('/index',        ['uses' => 'DemandantesController@index',   'as' => 'demandantes.index']);
    $this::get('/form',         ['uses' => 'DemandantesController@create',  'as' => 'demandantes.create']);
    $this::post('/store',       ['uses' => 'DemandantesController@store',   'as' => 'demandantes.store']);
    $this::get('/edit/{id}',    ['uses' => 'DemandantesController@edit',    'as' => 'demandantes.edit']);
    $this::get('/destroy/{id}', ['uses' => 'DemandantesController@destroy', 'as' => 'demandantes.destroy']);
});