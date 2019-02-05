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

Route::get('/kanban', [
    'as' => 'page.kanban',
    'uses' => 'KanbanController@index'
]);

Route::post('/kanban/create', [
    'as' => 'page.kanban.create',
    'uses' => 'KanbanController@create'
]);

Route::post('/kanban/mover', [
    'as' => 'page.kanban.mover',
    'uses' => 'KanbanController@mover'
]);

Route::post('/kanban/voltar', [
    'as' => 'page.kanban.voltar',
    'uses' => 'KanbanController@voltar'
]);

Route::post('/kanban/editar', [
    'as' => 'page.kanban.editar',
    'uses' => 'KanbanController@editar'
]);
