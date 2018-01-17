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

Route::post('login','LoginController@login')->name('login');

Route::get('admin','ViewsController@admin')->name('admin');

Route::get('/', function () {
    return view('index');
})->name('index');

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
