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
    return view('inicio');
});

Route::get('/personas' , 'personaController@listarTodasLasPersonas');

Route::get('/productos' , function (){
    return view('productos');
});




Route::post('/altaPersona', 'personaController@crearPersona');