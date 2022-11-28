<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar uma nova Matéria</title>
</head>
<body>
    <form action="{{ route('registrar_materia') }}" method="POST">
        @csrf 
        <label for="">Nome da Matéria</label> <br />
        <input type="text" name="Nome"> <br />
        <label for="">Descrição Completa</label> <br />
        <input type="text" name="Desc_c"> <br />
        <label for="">Descrição Simplificada</label> <br />
        <input type="text" name="Desc_s"> <br />
        <label for="">Número Mínimo de Alunos</label> <br />
        <input type="text" name="Num_min"> <br />
        <label for="">Número Máximo de Alunos</label> <br />
        <input type="text" name="Num_max"> <br />
        <label for="">Status ("Matrículas Abertas - Mínimo de alunos não atingido!", "Matrículas Abertas - Curso acontecerá!", "Matrículas Encerradas"</label> <br />
        <input type="text" name="Status"> <br />
        <label for="">Professor</label> <br />
        <input type="text" name="Professor"> <br />
        <button> Salvar</button>
    </form>
</body>
</html>