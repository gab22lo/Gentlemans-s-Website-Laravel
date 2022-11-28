<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aluno;
use App\Models\User;

class AlunosController extends Controller
{

    public function index()
    {
        $alunos = Aluno::all();
        return view ('alunos.index')->with('alunos', $alunos);
    }

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

        return view('auth.register');
    
    }

    public function show($id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.show', ['aluno' => $aluno]);
    }

    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.edit', ['aluno' => $aluno]);
    }

    public function update(Request $request, $id)
    {

        $aluno = Aluno::findOrFail($id);

        $aluno->update([
                'CPF' => $request->CPF,
                'Nome' => $request->Nome,
                'CEP' => $request->CEP,
                'Rua' => $request->Rua,
                'Bairro' => $request->Bairro,
                'Cidade' => $request->Cidade,
                'Número' => $request->Número,
                'Filme'=> $request->Filme,
        ]);
        return redirect('/indexalunos');
    }

   public function delete($id)
   {
    $aluno = Aluno::findOrFail($id);
    return view('alunos.delete', ['aluno' => $aluno]);
   }

   public function destroy($id)
   {
    $aluno = Aluno::findOrFail($id);
    $aluno->delete();

    return redirect('/indexalunos');
   }
}
