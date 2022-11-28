<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir um Professor</title>
</head> 
<body>
    <form action="{{ route('excluir_professor', ['id' => $professor->id]) }}" method="POST">
        @csrf
        <label for="">Tem certeza que deseja excluir este professor? </label> <br />
        <input type="text" name="Nome" value="{{ $professor->Nome }}"> <br />
        <button>Sim</button>
    </form>
</body>
</html>