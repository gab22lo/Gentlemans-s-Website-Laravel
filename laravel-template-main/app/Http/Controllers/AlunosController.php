<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno

class AlunosController extends Controller
{
    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        aluno::create([
            'nome' => $request->nome,
            'Materias'=> $request->materias,
            'RA'=>$request->RA,
            'FF'=>$request->FF,
        ]);
        return "Produto Criado Com Sucesso!";
    }
}
