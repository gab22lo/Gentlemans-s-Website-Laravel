<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
}) -> name("home");

Route::get('/principal', function() {
    return view('principal.create');
}) -> name("principal");

Route::get('/alunos', 'App\Http\Controllers\AlunosController@create');
Route::post('/alunos', 'App\Http\Controllers\AlunosController@store')->name("registrar_aluno");


Route::get('/materias', 'App\Http\Controllers\MateriasController@create');
Route::post('/materias', 'App\Http\Controllers\MateriasController@store')->name("registrar_materia");

Route::get('/professores', 'App\Http\Controllers\ProfessoresController@create');
Route::post('/professores', 'App\Http\Controllers\ProfessoresController@store')->name("registrar_professores");
//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('lista_alunos','lista_alunos');
