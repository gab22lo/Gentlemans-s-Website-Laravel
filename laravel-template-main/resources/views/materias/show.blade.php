<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver uma Materia</title>
</head>
<body>
        <label for="">Nome</label> <br />
        <input type="text" name="CPF" value="{{ $materia->Nome }}"> <br />
        <label for="">Descrição Completa</label> <br />
        <input type="text" name="Nome" value="{{ $materia->Desc_c }}"> <br />
        <label for="">Descrição Simplificada</label> <br />
        <input type="text" name="CEP" value="{{ $materia->Desc_s }}"> <br />
        <label for="">Número Mínimo de Alunos</label> <br />
        <input type="text" name="Rua" value="{{ $materia->Num_min }}"> <br />
        <label for="">Número Máximo de Alunos</label> <br />
        <input type="text" name="Bairro" value="{{ $materia->Num_max }}"> <br />
        <label for="">Status</label> <br />
        <input type="text" name="Cidade" value="{{ $materia->Status }}"> <br />
        <label for="">Professor</label> <br />
        <input type="text" name="Número" value="{{ $materia->Professor }}"> <br />
    </form>
</body>
</html>