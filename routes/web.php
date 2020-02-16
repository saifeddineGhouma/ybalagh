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

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create/reclamation','HomeController@create');
Route::get('/edit/reclamation/{id}','HomeController@edit')->name('edit.reclame');

Route::post('/store/reclamation','HomeController@store')->name('reclamtion.store');
Route::post('/update/reclamation/{id}','HomeController@update')->name('reclamtion.update');
Route::get('/','HomeController@index')->name('index');
Route::get('/reclamation','HomeController@liste')->name('reclamation.liste');
Route::group(['prefix'=>'dashbord','name'=>'admin.'],function(){

    Route::get('/','Admin\AdminController@index')->name('index');
    Route::get('/categorie/create','Admin\AdminController@CreateCategorie');
    Route::post('/categorie/store','Admin\AdminController@StoreCategorie')->name('store.categorie');
    Route::get('/reclame','Admin\AdminController@reclame')->name('reclame.liste.admin');
    Route::get('reclame/edit/{id}','Admin\AdminController@editReclamation')->name('reclame.edit');
    Route::post('reclame/update/{id}','Admin\AdminController@updateReclame')->name('reclame.update');



});
