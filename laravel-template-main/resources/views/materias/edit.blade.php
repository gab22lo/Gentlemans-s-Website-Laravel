<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar um Aluno</title>
</head> 
<body>
    <form action="{{ route('alterar_materia', ['id' => $materia->id]) }}" method="POST">
        @csrf
        <label for="">Nome</label> <br />
        <input type="text" name="Nome" value="{{ $materia->Nome }}"> <br />
        <label for="">Descrição Completa</label> <br />
        <input type="text" name="Desc_c" value="{{ $materia->Desc_c }}"> <br />
        <label for="">Descrição Simplificada</label> <br />
        <input type="text" name="Desc_s" value="{{ $materia->Desc_s }}"> <br />
        <label for="">Número Mínimo de Alunos</label> <br />
        <input type="text" name="Num_min" value="{{ $materia->Num_min }}"> <br />
        <label for="">Número Máximo de Alunos</label> <br />
        <input type="text" name="Num_max" value="{{ $materia->Num_max }}"> <br />
        <label for="">Status</label> <br />
        <input type="text" name="Status" value="{{ $materia->Status }}"> <br />
        <label for="">Professor</label> <br />
        <input type="text" name="Professor" value="{{ $materia->Professor }}"> <br />
        <button> Salvar</button>
    </form>
    </form>
</body>
</html>