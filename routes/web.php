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
    return view('index'); //view('welcome');
});

Route::group(['prefix' => 'vestuario'],function(){

  Route::get('/');
  Route::get('camisas',"ProdutosController@getCamisas");
  Route::get('calcas',"ProdutosController@getCalcas");
  Route::get('calcados',"ProdutosController@getCalcados");

});
Route::group(['prefix' => 'eletroeletronicos'],function(){

  Route::get('/',"ProdutosController@getEletroeletronicos");
  Route::get('cameras',"ProdutosController@getCameras");
  Route::get('desktops',"ProdutosController@getCameras");
  Route::get('computadores-desktop',"ProdutosController@getDesktops");
  Route::get('notebooks',"ProdutosController@getNotebooks");
  Route::get('smartphones',"ProdutosController@getSmartphones");
  Route::get('drones',"ProdutosController@getDrones");
  Route::get('fornos',"ProdutosController@getFornos");
  Route::get('cafeteiras',"ProdutosController@getCafeteiras");
  Route::get('geladeiras',"ProdutosController@getGeladeiras");

});
Route::group(['prefix' => 'ferramentas'],function(){

  Route::get('/');
  Route::get('marcenaria',"ProdutosController@getMarcenaria");
  Route::get('alvenaria',"ProdutosController@getAlvenaria");
  Route::get('jardinagem',"ProdutosController@getJardinagem");

});
Route::group(['prefix' => 'miscelania'],function(){

  Route::get('/');
  Route::get('brinquedos',"ProdutosController@getBrinquedos");
  Route::get('livros',"ProdutosController@getLivros");
  Route::get('decoracao',"ProdutosController@getDecoracoes");

});

Route::get("index","ReqController@index");
Route::get("produtos","ProdutosController@getProdutos");
