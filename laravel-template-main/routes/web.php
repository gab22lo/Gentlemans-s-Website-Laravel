<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
}) -> name("home");

Route::get('/professores', function() {
    return view('professores');
}) -> name("professores");

Route::get('/alunos', 'App\Http\Controllers\AlunosController@create');
Route::post('/alunos', 'App\Http\Controllers\AlunosController@store')->name("registrar_aluno");
