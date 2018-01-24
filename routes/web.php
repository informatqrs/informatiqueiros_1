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

Route::group(['prefix' => 'admin'],function(){

  Route::get('home','AdminController@home')->middleware('checkAdmin')->name('admin.home');
  Route::post('pesquisar','AdminController@pesquisar')->middleware('checkAdmin')->name("admin.pesquisar");
  Route::get('editar/{entidade}/{id}','AdminController@editar')->middleware('checkAdmin')->name("admin.editar");
  Route::get('cadastrar/{entidade}','AdminController@cadastrar')->middleware('checkAdmin')->name("admin.cadastrar");
  Route::get('deletar/{entidade}/{id}','AdminController@deletar')->middleware('checkAdmin')->name("admin.deletar");
  Route::post('confirmarCadastro','AdminCOntroller@confirmarCadastro')->middleware('checkAdmin')->name("admin.confirmarCadastro");
  Route::post('confirmarEdicao','AdminController@confirmarEdicao')->middleware('checkAdmin')->name("admin.confirmarEdicao");
  Route::post('confirmarDelecao','AdminController@confirmarDelecao')->middleware('checkAdmin')->name("admin.confirmarDelecao");
  Route::get('logout','Auth\LoginController@logout')->middleware('checkAdmin')->name("admin.logout");
});


Route::get('cadastro','ViewsController@cadastrar')->middleware('auth')->name('cadastro');
Route::post('register','Auth\RegisterController@register')->middleware('auth')->name('register');
Route::post('login','Auth\LoginController@login')->middleware('auth')->name('login');
Route::get('login','ViewsController@login')->name('login.form');
Route::get('admin','AdminController@login')->middleware('auth')->name('admin');
Route::get('/','ViewsController@home')->name('index');
Route::get('l/{categoria}','ViewsController@getProdutos')->name('produtos');
Route::get('i/{id}','ViewsController@getProduto')->name('produto');

Route::group(['prefix' => 'vestuario'],function(){

  Route::get('/');
  Route::get('camisas',"ViewsController@getCamisas")->name('camisas');
  Route::get('calcas',"ViewsController@getCalcas")->name('calcas');
  Route::get('calcados',"ViewsController@getCalcados")->name('calcados');

});
Route::group(['prefix' => 'eletrodomesticos'],function(){

  Route::get('fornos',"ViewsController@getFornos")->name('fornos');
  Route::get('cafeteiras',"ViewsController@getCafeteiras")->name('cafeteiras');
  Route::get('geladeiras',"ViewsController@getGeladeiras")->name('geladeiras');

});

Route::group(['prefix' => 'informatica'],function(){

  Route::get('cameras',"ViewsController@getCameras")->name('cameras');
  Route::get('desktops',"ViewsController@getDesktops")->name('desktops');
  Route::get('notebooks',"ViewsController@getNotebooks")->name('notebooks');
  Route::get('smartphones',"ViewsController@getSmartphones")->name('smartphones');

});
Route::group(['prefix' => 'ferramentas'],function(){

  Route::get('marcenaria',"ViewsController@getMarcenaria")->name('marcenaria');
  Route::get('alvenaria',"ViewsController@getAlvenaria")->name('alvenaria');
  Route::get('jardinagem',"ViewsController@getJardinagem")->name('jardinagem');

});
Route::group(['prefix' => 'miscelania'],function(){

  Route::get('brinquedos',"ViewsController@getBrinquedos")->name('brinquedos');
  Route::get('livros',"ViewsController@getLivros")->name('livros');
  Route::get('decoracoes',"ViewsController@getDecoracoes")->name('decoracoes');

});
