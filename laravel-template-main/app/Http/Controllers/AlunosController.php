<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aluno;
use App\Models\User;

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
            'Filme'=> $request->Filme,
        ]);                     
      
    
        User::create([
        
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> $request->password,
        ]);
        //$user = User::first();
        //$user->assignRole('aluno');

    return "Aluno Criado com Sucesso!";
    
    }
}
