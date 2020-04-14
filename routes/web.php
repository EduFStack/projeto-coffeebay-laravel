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
    Route::get('/produtos', ['as' =>'produtos', 'uses' => 'produtosController@ListarProdutos']);
    Route::get('/produto/{nome}/{produto_id}', ['uses' => 'produtosController@ListarProduto']);
});

Route::post('/register',['as' =>'user.register', 'uses' => 'userController@register']);
Route::post('/login',['as' =>'user.login', 'uses' => 'userController@login']);
Route::post('/reset',['as' => 'user.reset', 'uses' => 'userController@reset']);
route::get('/logout',['as' =>'logout', 'uses' => 'userController@logout']);


// route::get('/membros', ['uses' => ''])   