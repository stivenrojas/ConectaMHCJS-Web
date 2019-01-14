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

Route::get('/', 'PagesController@getHome');
Route::get('/acerca', 'PagesController@getAcerca');
Route::get('/contactenos', 'PagesController@getContactenos');
Route::get('/galeria', 'PagesController@getGaleria');
Route::get('/noticias', 'PagesController@getNoticias');
Route::get('/exhibicionespermanentes', 'PagesController@getExhibicionesPermanentes');
Route::get('/exhibicionestemporales', 'PagesController@getExhibicionesTemporales');
Route::get('/eventos', 'PagesController@getEventos');
Route::get('/servicios', 'PagesController@getServicios');
Route::get('/recursos', 'PagesController@getRecursos');
Route::get('/visitaguiada', 'PagesController@getVisitaGuiada');
Route::get('/servicioseducativos', 'PagesController@getServiciosEducativos');
Route::get('/campananacional', 'PagesController@getCampanaNacional');
Route::get('/centroinformacion', 'PagesController@getCentroInfo');
Route::get('/arquitecturamuseo', 'PagesController@getArquitecturaMuseo');
Route::get('/guinos', 'PagesController@getGuinos');
Route::get('/catalogo', 'PagesController@getCatalogo');
Route::get('/transparencia', 'PagesController@getTransparencia');
Route::get('/tramites', 'PagesController@getTramites');
Route::get('/preguntasfrecuentes', 'PagesController@getPregunasFrecuentes');
Route::get('/denunciasquejas', 'PagesController@getDenunciasQuejas');
Route::get('/enlacesamigos', 'PagesController@getEnlacesAmigos');
Route::get('/logintienda', 'PagesController@getLogin');
Route::get('/registrarsetienda', 'PagesController@getRegistrarse');
Route::get('/catalogotienda', 'PagesController@getCatalogoTienda');
Route::get('/reservavisitaguiada', 'PagesController@getReservaVisitaGuiada');


Route::get('/messages', 'MessagesController@getMessages');
Route::post('/contact/submit', 'MessagesController@submit');

Route::get('/messages', 'FormularioReservaVisitaGuiada@getMessages');
Route::post('/reservavisitaguiada/Enviar', 'FormularioReservaVisitaGuiadaController@Enviar');
Route::post('/tramites/EnviarUsoEspacios', 'FormularioUsoEspaciosController@EnviarUsoEspacios');
Route::post('/tramites/EnviarVoluntariado', 'FormularioVoluntariadoController@EnviarVoluntariado');
