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
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::post('/autenticar',['uses' => 'Controller@fazerlogin']);
Route::get('/home', function () {
    return view('dashboard.menu');
});
Route::get('/tabela',['uses' => 'form_promo@show']);
Route::resource('categories', 'form_promo');
Route::post('/deleta',['uses' => 'form_promo@destroy']);
