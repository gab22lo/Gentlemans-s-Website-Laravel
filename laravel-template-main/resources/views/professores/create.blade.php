<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar um novo Professor</title>
</head>
<body>
    <form action="{{ route('registrar_professores') }}" method="POST">
        @csrf 
        <label for="">CPF</label> <br />
        <input type="text" name="CPF"> <br />
        <label for="">Nome Completo</label> <br />
        <input type="text" name="Nome"> <br />
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
        <label for="">Username</label> <br />
        <input type="text" name="name"> <br />
        <label for="">Email</label> <br />
        <input type="text" name="email"> <br />
        <label for="">Senha (8 dígitos)</label> <br />
        <input type="text" name="password"> <br />
        <button> Salvar</button>
    </form>
</body>
</html>