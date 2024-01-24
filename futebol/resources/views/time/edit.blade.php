<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Time</title>
</head>
<body>
    <h1>Edição de Time</h1>
    <form action="/time/{{$time->id}}" method="post">
    @csrf
    @method('put')
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" value="{{$time->nome}}">
    <br>
    <br>

    <label for="ano_fundacao">Ano de Fundação:</label>
    <input type="number" name="ano_fundacao" id="ano_fundacao" value="{{$time->ano_fundacao}}">
    <br>
    <br>

    <label for="tecnico">Técnico:</label>
    <input type="text" name="tecnico" id="tecnico" value="{{$time->tecnico}}">


    <br>
    <br>
    
    <button type="submit">Salvar alterações</button>
    </form>

    
</body>
</html>