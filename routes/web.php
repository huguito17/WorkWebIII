<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');
Route::view('/acerca', 'acerca')->name('acerca');

//Route::get('/portafolio', 'portafolioController')->name('portafolio');
//Route::get('/portafolio/crear', 'portafolioController@create')->name('portafolio.create');
//Route::post('/portafolio', 'portafolioController@store')->name('portafolio.store');
//Route::get('/portafolio/{project}', 'portafolioController@show')->name('portafolio.show');
Route::view('contacto','contacto')->name('contacto');
Route::post('contacto',('messController@store'))->name('contacto');


