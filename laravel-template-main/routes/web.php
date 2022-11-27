<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
}) -> name("home");



Route::get('/alunos', 'App\Http\Controllers\AlunosController@create');
Route::post('/alunos', 'App\Http\Controllers\AlunosController@store')->name("registrar_aluno");

Route::get('/alunos', 'App\Http\Controllers\AlunosController@create');
Route::post('/alunos', 'App\Http\Controllers\AlunosController@store')->name("registrar_aluno");    




Route::get('/principal', function() {
    return view('principal.create');
}) -> name("principal");




Route::middleware(['secretaria'])->group(function(){
    route::get('professores', function(){

        return view('professores.create');

    });
});

Route::middleware(['secretaria'])->group(function(){
    route::get('alunos', function(){

        return view('alunos.create');

    });
});

Route::middleware(['secretaria'])->group(function(){
    route::get('materias', function(){

        return view('materias.create');

    });
});


Route::post('/materias', 'App\Http\Controllers\MateriasController@store')->name("registrar_materia");


Route::post('/professores', 'App\Http\Controllers\ProfessoresController@store')->name("registrar_professores");
//Auth::routes();



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('lista_alunos','lista_alunos');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

