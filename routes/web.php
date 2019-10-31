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

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProdutosController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/usuarios', 'UsuariosController@index')->name('indexUsuario');
Route::get('/dashboard/groups', 'GroupsController@index')->name('groups');

Route::get('/login','LoginsController@show')->name('login');
Route::post('/login', 'LoginsController@auth')->name('auth');
Route::get('/logout', 'LoginsController@logout')->name('logout');

Route::get('config' , 'ConfigController@show')->name('config');
Route::post('config' , 'ConfigController@create')->name('configPost');

Route::get('Clientes', 'ClientesController@index')->name('cliente_index');
Route::get('Clientes/cpf/{cpf}', 'ClientesController@seacher')->name('cliente_seacher');
Route::post('Clientes', 'ClientesController@create')->name('cliente_create');
Route::put('Clientes{/id}', 'ClientesController@update')->name('cliente_update');
// Route::delete('Clientes{}', 'ClientesController@delete')->name('Cliente_delete');

Route::get('Produtos', 'ProdutosController@index')->name("Produto_index");
Route::post('Produtos', 'ProdutosController@create')->name('Produto_create');
Route::put('Produtos', 'ProdutosController@update')->name('Produto_update');
Route::delete('Produtos', 'ProdutosController@delete')->name('Produto_delete');

Route::get('Usuarios', 'UsuariosController@index')->name("Usuario_index");
Route::post("Usuarios", "UsuariosController@create")->name("Usuario_create");
Route::put("Usuarios", "UsuariosController@update")->name("Usuario_update");
Route::delete("Usuarios", "UsuariosController@delete")->name("Usuario_delete");
