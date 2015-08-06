<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 		array('as' 		=> 'mostrar_inicio','uses' 	=>  'PaginaController@mostrar_inicio'));

Route::get('/la_empresa', function()
{
	return View::make('la_empresa');
});

Route::get('/servicios', function()
{
	return View::make('servicios');
});

Route::get('/portafolio', function()
{
	return View::make('portafolio');
});

Route::get('/precios', function()
{
	return View::make('precios');
});

Route::get('/contacto', function()
{
	return View::make('contacto');
});

Route::get('/api-obtener-textos-imagenes_diapositivas', array('as' => 'api_obtener_textos_imagenes_diapositivas','uses' =>  'PaginaController@api_obtener_textos_imagenes_diapositivas'));

Route::get('/api-obtener-articulos-imagenes-servicios', array('as' => 'api_obtener_articulos_imagenes_servicios','uses' =>  'PaginaController@api_obtener_articulos_imagenes_servicios'));

