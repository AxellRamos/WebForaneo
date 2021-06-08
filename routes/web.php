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

Route::get('/login', function () {
    return view('/home');
});

Route::get('user','UserController@index');

Route::get('propietario', function (){ 
    return view('PerfilPropietario');
});

Route::get('cuarto', function (){
    return view('PerfilCuarto');
});

Route::get('userlist', function (){ 
    return view('ListUsuarios');
});

Route::get('Restaurante', function (){
    return view('PerfilRestaurante');
});

Route::get('Comida', function (){
    return view('PerfilComida');
});


Auth::routes();
Route::get('users', 'HomeController@users');
Route::get('/', 'HomeController@index')->name('home');
