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

Route::get('/', function()
{
	return View::make('inicio');
});

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
