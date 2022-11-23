<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\professore;
use App\Models\User;

class ProfessoresController extends Controller
{
    public function create()
    {
        return view('professores.create');
    }

    public function store(Request $request)
    {
        professore::create([
            'CPF' => $request->CPF,
            'Nome' => $request->Nome,
            'CEP' => $request->CEP,
            'Rua' => $request->Rua,
            'Bairro' => $request->Bairro,
            'Cidade' => $request->Cidade,
            'Número' => $request->Número,
        ]);  

        
    return view('auth.register');
    
    //"Professor Criado com Sucesso!";

    }
}
