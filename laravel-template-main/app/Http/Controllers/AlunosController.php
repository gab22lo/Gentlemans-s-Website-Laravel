<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aluno;

class AlunosController extends Controller
{
    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
    aluno::create([
        'CPF' => $request->CPF,
        'Nome' => $request->Nome,
        'CEP' => $request->CEP,
        'Rua' => $request->Rua,
        'Bairro' => $request->Bairro,
        'Cidade' => $request->Cidade,
        'Número' => $request->Número,
        'Filme Favorito'=> $request->Filme,
     ]);

    return "Aluno Criado com Sucesso!";

    }
}
