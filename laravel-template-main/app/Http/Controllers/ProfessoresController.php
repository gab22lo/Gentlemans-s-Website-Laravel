<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\professor;
use App\Models\User;

class ProfessoresController extends Controller
{
    public function create()
    {
        return view('professores.create');
    }

    public function store(Request $request)
    {
        professor::create([
            'CPF' => $request->CPF,
            'Nome' => $request->Nome,
            'CEP' => $request->CEP,
            'Rua' => $request->Rua,
            'Bairro' => $request->Bairro,
            'Cidade' => $request->Cidade,
            'Número' => $request->Número,
        ]);

        User::create([
        
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> $request->password,
        ]);

    


    return "Professor Criado com Sucesso!";

    }
}