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
//登录页面
Route::get('/', 'Everan\LoginController@index')->name('login');

//系统页面
Route::group(['namespace'=> 'Everan'], function () {
    Route::get('index', 'AccountController@index')->name('index');
    Route::get('job', 'JobController@index')->name('job');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace'=>'Wechat'], function () {
    Route::any('wechat', 'WechatController@serve');
});