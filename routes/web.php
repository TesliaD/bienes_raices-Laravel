<?php

use Illuminate\Support\Facades\Route;

//Vista del Index
Route::get('/', function () {
    return view('index');
})->name('index');

//Vista de Nosotros
Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

//Vista de Anuncios
Route::get('/anuncios', function () {
    return view('anuncios');
})->name('anuncios');

//Vista de Blog
Route::get('/blog', function () {
    return view('blog');
})->name('blog');

//Vista de Contacto
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');