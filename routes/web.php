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
    return view('home');
});



Route::get('/about', function () {
    return view('about');
});


/* deprecado

Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/contact', function () {
    return view('contact');
});



/* para envío de mensajes a la BBDD 

*/



Route::post('/contact/submit', 'MessagesController@submit');


/* para extraer mensajes de la BBDD y visualizarlos

*/


Route::get('/messages', 'MessagesController@getMessages');
