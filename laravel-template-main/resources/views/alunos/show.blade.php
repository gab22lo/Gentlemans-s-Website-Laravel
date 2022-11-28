<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver um Aluno</title>
</head>
<body>
        <label for="">CPF</label> <br />
        <input type="text" name="CPF" value="{{ $aluno->CPF }}"> <br />
        <label for="">Nome Completo</label> <br />
        <input type="text" name="Nome" value="{{ $aluno->Nome }}"> <br />
        <label for="">CEP</label> <br />
        <input type="text" name="CEP" value="{{ $aluno->CEP }}"> <br />
        <label for="">Rua</label> <br />
        <input type="text" name="Rua" value="{{ $aluno->Rua }}"> <br />
        <label for="">Bairro</label> <br />
        <input type="text" name="Bairro" value="{{ $aluno->Bairro }}"> <br />
        <label for="">Cidade</label> <br />
        <input type="text" name="Cidade" value="{{ $aluno->Cidade }}"> <br />
        <label for="">Número</label> <br />
        <input type="text" name="Número" value="{{ $aluno->Número }}"> <br />
        <label for="">Filme Favorito</label> <br />
        <input type="text" name="Filme" value="{{ $aluno->Filme }}"> <br />
    </form>
</body>
</html>