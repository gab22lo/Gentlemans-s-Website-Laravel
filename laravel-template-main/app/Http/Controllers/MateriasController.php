<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\materia;

class MateriasController extends Controller
{
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

    return view('/');
    

    }
}
