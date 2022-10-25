<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrando aluno</title>
</head>
<body>
    <from action="{{ route('registrar_alunos') }}" method="POST">
        @csrf
        <label for="">Nome</label> <br />
        <input type="text" name="nome"> <br />
        <label for="">RA</label> <br />
        <input type="text" name="RA"> <br />
        <label for="">Materia</label> <br />
        <input type="text" name="Materias"> <br />
        <label for="">Filme</label> <br />
        <input type="text" name="FF"> <br />
        <button>Salvar</button>
    </form>
</body>
</html>
