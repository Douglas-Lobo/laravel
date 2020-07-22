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



Route::get('/', 'IndexController@index')->name('index');

Route::get('/formLogin', 'LoginController@formLogin')->name('login.formLogin');
Route::post('/logar', 'LoginController@logar')->name('login.logar');
Route::get('/sair', 'LoginController@sair')->name('login.sair');


Route::group(['middleware' => 'auth'], function () {
    
    Route::get('/list', 'IndexController@list')->name('list');
    Route::get('/add', 'IndexController@add')->name('add');
    Route::post('/salvar', 'IndexController@salvar')->name('salvar');
    Route::get('/edit/{id}', 'IndexController@edit')->name('edit');
    Route::post('/att', 'IndexController@att')->name('att');
    Route::get('/del/{id}', 'IndexController@del')->name('del');
});