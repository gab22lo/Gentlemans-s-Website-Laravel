@extends('alunos.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Alunos</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/alunos') }}" class="btn btn-success btn-sm" title="Cadastrar novo estudante">
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
                                        <th>CPF</th>
                                        <th>CEP</th>
                                        <th>Bairro</th>
                                        <th>Cidade</th>
                                        <th>Número</th>
                                        <th>Filme</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($alunos as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->Nome }}</td>
                                        <td>{{ $item->CPF }}</td>
                                        <td>{{ $item->CEP }}</td>
                                        <td>{{ $item->Bairro }}</td>
                                        <td>{{ $item->Cidade }}</td>
                                        <td>{{ $item->Número }}</td>
                                        <td>{{ $item->Filme }}</td>
  
                                        <td>
                                            <a href="{{ url('/aluno/ver/' . $item->id) }}" title="Ver aluno"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/aluno/editar/' . $item->id) }}" title="Editar aluno"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <a href="{{ url('/aluno/excluir/' . $item->id) }}" title="Excluir aluno"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Delete</button></a>
                                            
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