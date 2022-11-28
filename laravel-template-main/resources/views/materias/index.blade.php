@extends('materias.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Materias</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/materias') }}" class="btn btn-success btn-sm" title="Cadastrar nova materia">
                           Cadastrar
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Descrição Completa</th>
                                        <th>Descrição Simplificada</th>
                                        <th>Número Mínimo</th>
                                        <th>Número Máximo</th>
                                        <th>Status</th>
                                        <th>Professor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($materias as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->Nome }}</td>
                                        <td>{{ $item->Desc_c }}</td>
                                        <td>{{ $item->Desc_s }}</td>
                                        <td>{{ $item->Num_min }}</td>
                                        <td>{{ $item->Num_max }}</td>
                                        <td>{{ $item->Status }}</td>
                                        <td>{{ $item->Professor }}</td>
  
                                        <td>
                                            <a href="{{ url('/materia/ver/' . $item->id) }}" title="Ver materia"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/materia/editar/' . $item->id) }}" title="Editar materia"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <a href="{{ url('/materia/excluir/' . $item->id) }}" title="Excluir materia"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Delete</button></a>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection