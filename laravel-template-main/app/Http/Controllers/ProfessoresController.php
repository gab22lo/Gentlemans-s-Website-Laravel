<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\professor;

class ProfessoresController extends Controller
{
    public function create()
    {
        return view('professores.create');
    }

    public function store(Request $request)
    {
        professorescontroller::create([
            'CPF' => $request->CPF,
            'Nome' => $request->Nome,
            'CEP' => $request->CEP,
            'Rua' => $request->Rua,
            'Bairro' => $request->Bairro,
            'Cidade' => $request->Cidade,
            'Número' => $request->Número,
        ]);


    return view('auth.registerprofessor');

    }
}
