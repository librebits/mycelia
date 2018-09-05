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


/* para envío de mensajes a la BBDD ... pasando por PagesController.php

*/


Route::get('/', 'PagesController@getHome');

Route::get('/about', 'PagesController@getAbout');

Route::get('/contact', 'PagesController@getContact');



Route::post('/contact/submit', 'MessagesController@submit');


/* para extraer mensajes de la BBDD y visualizarlos

*/
 

Route::get('/messages', 'MessagesController@getMessages');
