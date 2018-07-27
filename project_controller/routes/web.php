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
Route::group(['prefix' => 'aluno'], function (){
    Route::get('/list', 'AlunoController@getAlunos')->name('aluno.list');
    Route::get('/form/{id?}', 'AlunoController@form')->name('aluno.form');
    Route::get('/deletar/{id}','AlunoController@deletarAluno')->name('aluno.deletar');
    Route::post('/salvar', 'AlunoController@salvarAluno')->name('aluno.salvarAluno');
    Route::get('/projeto/{projeto}/{aluno}', 'AlunoController@relacionarProjeto');
});


Route::get('/', function () {
    return view('welcome');
});


