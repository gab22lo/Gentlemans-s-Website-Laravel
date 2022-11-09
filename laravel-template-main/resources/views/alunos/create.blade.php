<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar um novo Aluno</title>
</head>
<body>
    <form action="{{ route('registrar_aluno') }}" method="POST">
        @csrf 
        <label for="">CPF</label> <br />
        <input type="text" name="CPF"> <br />
        <label for="">Nome Completo</label> <br />
        <input type="text" name="Nome Completo"> <br />
        <label for="">CEP</label> <br />
        <input type="text" name="CEP"> <br />
        <label for="">Rua</label> <br />
        <input type="text" name="Rua"> <br />
        <label for="">Bairro</label> <br />
        <input type="text" name="Bairro"> <br />
        <label for="">Cidade</label> <br />
        <input type="text" name="Cidade"> <br />
        <label for="">Número</label> <br />
        <input type="text" name="Número"> <br />
        <label for="">Filme Favorito</label> <br />
        <input type="text" name="filme favorito"> <br />
        <button> Salvar</button>
    </form>
</body>
</html>
