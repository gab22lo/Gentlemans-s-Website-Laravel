<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver um Professor</title>
</head>
<body>
        <label for="">CPF</label> <br />
        <input type="text" name="CPF" value="{{ $professor->CPF }}"> <br />
        <label for="">Nome Completo</label> <br />
        <input type="text" name="Nome" value="{{ $professor->Nome }}"> <br />
        <label for="">CEP</label> <br />
        <input type="text" name="CEP" value="{{ $professor->CEP }}"> <br />
        <label for="">Rua</label> <br />
        <input type="text" name="Rua" value="{{ $professor->Rua }}"> <br />
        <label for="">Bairro</label> <br />
        <input type="text" name="Bairro" value="{{ $professor->Bairro }}"> <br />
        <label for="">Cidade</label> <br />
        <input type="text" name="Cidade" value="{{ $professor->Cidade }}"> <br />
        <label for="">Número</label> <br />
        <input type="text" name="Número" value="{{ $professor->Número }}"> <br />
    </form>
</body>
</html>