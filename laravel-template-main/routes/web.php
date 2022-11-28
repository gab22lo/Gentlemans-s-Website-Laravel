<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController; 


Route::get('/', function () {
    return view('welcome');
}) -> name("home");

Route::get('/perfil', function() {
    return view('principal.create');
}) -> name("aluno");

Route::get('/alunos', 'App\Http\Controllers\AlunosController@create');
Route::post('/alunos', 'App\Http\Controllers\AlunosController@store')->name("registrar_aluno");



Route::middleware(['secretaria'])->group(function(){
    route::get('home_s', function(){

        return view('secretaria.home');

    });
});

Route::middleware(['aluno'])->group(function(){
    route::get('home_a', function(){

        return view('principal.home');

    });
});

Route::middleware(['professor'])->group(function(){
    route::get('home_p', function(){

        return view('professores.home_p');

    });
});

//CRUD ALUNOS
Route::get('/alunos', 'App\Http\Controllers\AlunosController@create'); //Create Aluno
Route::post('/alunos', 'App\Http\Controllers\AlunosController@store')->name("registrar_aluno");
Route::get('/aluno/ver/{id}', 'App\Http\Controllers\AlunosController@show'); //Read Aluno
Route::get('/aluno/editar/{id}', 'App\Http\Controllers\AlunosController@edit'); //Update Aluno
Route::post('/aluno/editar/{id}', 'App\Http\Controllers\AlunosController@update')->name('alterar_aluno');
Route::get('/aluno/excluir/{id}', 'App\Http\Controllers\AlunosController@delete'); //Delete Aluno
Route::post('/aluno/excluir/{id}', 'App\Http\Controllers\AlunosController@destroy')->name("excluir_aluno");

//CRUD PROFESSORES
Route::get('/professores', 'App\Http\Controllers\ProfessoresController@create'); //Create Professores
Route::post('/professores', 'App\Http\Controllers\ProfessoresController@store')->name("registrar_professores");
Route::get('/professor/ver/{id}', 'App\Http\Controllers\ProfessoresController@show'); //Read Professor
Route::get('/professor/editar/{id}', 'App\Http\Controllers\ProfessoresController@edit'); //Update Professor
Route::post('/professor/editar/{id}', 'App\Http\Controllers\ProfessoresController@update')->name('alterar_professor');
Route::get('/professor/excluir/{id}', 'App\Http\Controllers\ProfessoresController@delete'); //Delete Aluno
Route::post('/professor/excluir/{id}', 'App\Http\Controllers\ProfessoresController@destroy')->name("excluir_professor");

//CRUD MATERIAS
Route::get('/materias', 'App\Http\Controllers\MateriasController@create'); //Create Materias
Route::post('/materias', 'App\Http\Controllers\MateriasController@store')->name("registrar_materia");
Route::get('/materia/ver/{id}', 'App\Http\Controllers\MateriasController@show'); //Read Materia
Route::get('/materia/editar/{id}', 'App\Http\Controllers\MateriasController@edit'); //Update Materia
Route::post('/materia/editar/{id}', 'App\Http\Controllers\MateriasController@update')->name('alterar_materia');
Route::get('/materia/excluir/{id}', 'App\Http\Controllers\MateriasController@delete'); //Delete Materia
Route::post('/materia/excluir/{id}', 'App\Http\Controllers\MateriasController@destroy')->name("excluir_materia");

Route::get('/indexalunos', 'App\Http\Controllers\AlunosController@index'); //View para visualização de todos alunos
Route::get('/indexprofessores', 'App\Http\Controllers\ProfessoresController@index'); //View para visualização de todos professores
Route::get('/indexmaterias', 'App\Http\Controllers\MateriasController@index'); //View para visualização de todos materias



Route::get('/User','App\Http\Controllers\Auth\RegisterController@validator')->name("Registrar_user");
Route::post('/User','App\Http\Controllers\Auth\RegisterController@make');

Route::get('/materias', 'App\Http\Controllers\MateriasController@create');
Route::post('/materias', 'App\Http\Controllers\MateriasController@store')->name("registrar_materia");

Route::get('/professores', 'App\Http\Controllers\ProfessoresController@create');
Route::post('/professores', 'App\Http\Controllers\ProfessoresController@store')->name("registrar_professores");

Route::view('lista_alunos','lista_alunos');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/User','App\Http\Controllers\Auth\RegisterController@validator')->name("Registrar_user");
Route::post('/User','App\Http\Controllers\Auth\RegisterController@make');

Route::get('/info', function() {
    return view('principal.perfil');
}) -> name("info");





Route::get('/info_p', function() {
    return view('principal.perfil_prof');
}) -> name("info_p");


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
