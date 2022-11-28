<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\materia;

class MateriasController extends Controller
{
    public function index()
    {
        $materias = Materia::all();
        return view ('materias.index')->with('materias', $materias);
    }

    public function create()
    {
        return view('materias.create');
    }

    public function store(Request $request)
    {
        materia::create([
            'Nome' => $request->Nome,
            'Desc_c' => $request->Desc_c,
            'Desc_s' => $request->Desc_s,
            'Num_min' => $request->Num_min,
            'Num_max' => $request->Num_max,
            'Status' => $request->Status,
            'Professor' => $request->Professor,
        ]);

    return view('secretaria.home'); 

    }

    public function show($id)
    {
        $materia = Materia::findOrFail($id);
        return view('materias.show', ['materia' => $materia]);
    }

    public function edit($id)
    {
        $materia = Materia::findOrFail($id);
        return view('materias.edit', ['materia' => $materia]);
    }

    public function update(Request $request, $id)
    {

        $materia = Materia::findOrFail($id);

        $materia->update([
            'Nome' => $request->Nome,
            'Desc_c' => $request->Desc_c,
            'Desc_s' => $request->Desc_s,
            'Num_min' => $request->Num_min,
            'Num_max' => $request->Num_max,
            'Status' => $request->Status,
            'Professor' => $request->Professor,
        ]);
        return redirect('/indexmaterias');
    }

   public function delete($id)
   {
    $materia = Materia::findOrFail($id);
    return view('materias.delete', ['materia' => $materia]);
   }

   public function destroy($id)
   {
    $materia = Materia::findOrFail($id);
    $materia->delete();

    return redirect('/indexmaterias');
   }


}
