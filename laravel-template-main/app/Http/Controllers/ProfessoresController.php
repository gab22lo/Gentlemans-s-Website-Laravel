<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\professore;
use App\Models\User;

class ProfessoresController extends Controller
{

    public function index()
    {
        $professores = Professore::all();
        return view ('professores.index')->with('professores', $professores);
    }

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

    public function show($id)
    {
        $professor = Professore::findOrFail($id);
        return view('professores.show', ['professor' => $professor]);
    }

    public function edit($id)
    {
        $professor = Professore::findOrFail($id);
        return view('professores.edit', ['professor' => $professor]);
    }

    public function update(Request $request, $id)
    {

        $professor = Professore::findOrFail($id);

        $professor->update([
            'CPF' => $request->CPF,
            'Nome' => $request->Nome,
            'CEP' => $request->CEP,
            'Rua' => $request->Rua,
            'Bairro' => $request->Bairro,
            'Cidade' => $request->Cidade,
            'Número' => $request->Número,
        ]);
        return redirect('/indexprofessores');
    }

   public function delete($id)
   {
    $professor = Professore::findOrFail($id);
    return view('professores.delete', ['professor' => $professor]);
   }

   public function destroy($id)
   {
    $professor = Professore::findOrFail($id);
    $professor->delete();

    return redirect('/indexprofessores');
   }
}
