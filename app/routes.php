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
    return View::make('pages.home')
        ->with('title', 'Гостевой дом «Роман»');
});

Route::get('/about', function()
{
    return ('about');
});


Route::get('/rooms', function()
{
    return ('rooms');
});


Route::get('/bron', function()
{
    return ('bron');
});

Route::get('/gallery', function()
{
    return ('gallery');
});

Route::get('/reviews', function()
{
    return ('reviews');
});

Route::get('/contacts', function()
{
    return ('contacts');
});