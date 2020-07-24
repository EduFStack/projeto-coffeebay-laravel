<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',['as' =>'home', 'uses'=>'userController@home']);

Route::group(['middleware' => 'CheckAuth'], function(){
    Route::get('/produtos', ['as' => 'produtos', 'uses' => 'produtosController@ListarProdutos']);
    Route::get('/produto/{nome}/{produto_id}', ['uses' => 'produtosController@ListarProduto']);
    Route::get('/sacola', ['as' => 'sacola','uses' => 'sacolaController@listarSacola']);
    Route::get('/listar', ['as' => 'listar.produto', 'uses' => 'sacolaController@listarProduto']);
    Route::post('/adicionar', ['as' => 'sacola.add', 'uses' => 'sacolaController@adicionarProduto']);
    Route::post('/editar', ['as' => 'editar.produto', 'uses' => 'sacolaController@editarProduto']);
    Route::get('/remover', ['as' => 'sacola.delete', 'uses' => 'sacolaController@removerProduto']);
    Route::post('/adicionarPedido', ['as' => 'adicionar.pedido', 'uses' => 'pedidosController@adicionarPedido']);
    Route::get('/Pedidos', ['as' => 'pedidos', 'uses' => 'pedidosController@listarPedidos']);
    Route::get('/Pedido/{id}', ['as' => 'pedido', 'uses' => 'pedidosController@listarPedido']);
});

Route::group(['middleware' => 'CheckAdm'], function(){
    Route::get('/PedidosAdm', ['as' => 'pedidosAdm', 'uses' => 'pedidosController@listarPedidosAdm']);
    Route::get('/PedidoAdm/{id}', ['as' => 'pedidoAdm', 'uses' => 'pedidosController@listarPedidoAdm']);
    Route::post('/AvancarStatusAdm', ['as' => 'avancarStatusAdm', 'uses' => 'pedidosController@avancarStatusAdm']);
    Route::post('/VoltarStatusAdm', ['as' => 'voltarStatusAdm', 'uses' => 'pedidosController@voltarStatusAdm']);
    Route::post('/CancelarPedidoAdm', ['as' => 'cancelarPedidoAdm', 'uses' => 'pedidosController@cancelarPedidoAdm']);
});

Route::post('/register',['as' => 'user.register', 'uses' => 'userController@register']);
Route::post('/login',['as' => 'user.login', 'uses' => 'userController@login']);
Route::post('/reset',['as' => 'user.reset', 'uses' => 'userController@reset']);
Route::get('/logout',['as' => 'logout', 'uses' => 'userController@logout']);


// route::get('/membros', ['uses' => ''])   