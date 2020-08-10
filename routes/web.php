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

Route::get('/', function () {
    return view('faq.home');
})->name('faq.home');

Route::get('/empresa', function () {
    return view('faq.company');
})->name('faq.company');

Route::get('/professor', function () {
    return view('faq.teacher');
})->name('faq.teacher');

Route::get('/aluno', function () {
    return view('faq.student');
})->name('faq.student');

Route::get('/empresa/administrativo/adicionar_usuario', function () {
    return view('faq.empresa.administrativo.adicionar_usuario');
})->name('faq.empresa.administrativo.adicionar_usuario');

Route::get('/empresa/administrativo/adicionar_cargo', function () {
    return view('faq.empresa.administrativo.adicionar_cargo');
})->name('faq.empresa.administrativo.adicionar_cargo');

Route::get('/empresa/administrativo/adicionar_departamento', function () {
    return view('faq.empresa.administrativo.adicionar_departamento');
})->name('faq.empresa.administrativo.adicionar_departamento');

Route::get('/empresa/administrativo', function () {
    return view('faq.empresa.administrativo.administrativo');
})->name('faq.empresa.administrativo.administrativo');

Route::get('/empresa/biblioteca', function () {
    return view('faq.empresa.biblioteca.biblioteca');
})->name('faq.empresa.biblioteca.biblioteca');

Route::get('/empresa/biblioteca/adicionar_arquivo', function () {
    return view('faq.empresa.biblioteca.adicionar_arquivo');
})->name('faq.empresa.biblioteca.adicionar_arquivo');