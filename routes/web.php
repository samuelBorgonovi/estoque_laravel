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

Route::get('/', function()
{
    return '<h1>Primeira lógica com Laravel</h1';
});

Route::get('/outra', function()
{
    return '<h1>Outra lógica com Laravel</h1';
});


/*Note que o padrão é o nome do controller, seguido de um @ e o nome
do método, exemplo abaixo.
*/
Route::get('/produtos', 'ProdutoController@lista');
