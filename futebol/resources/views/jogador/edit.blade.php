<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Jogador</title>
</head>
<body>
    <h1>Edição de Jogador</h1>
    <form action="/jogador/{{$jogador->id}}" method="post">
    @csrf
    @method('put')
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" value="{{$jogador->nome}}">
    <br>
    <br>

    <label for="posicao">Posição do Jogador:</label>
    <input type="text" name="posicao" id="posicao" value="{{$jogador->posicao}}">
    <br>
    <br>

    <label for="idade">Idade:</label>
    <input type="number" name="idade" id="idade" value="{{$jogador->idade}}">

    <select name="time" id="time">
        <option selected value="{{$jogador->time->id}}">{{$jogador->time->nome}}</option>

        @foreach($times as $time)
        @if($time->id !== $jogador->time->id)
            <option value="{{$time->id}}">{{$time->nome}}</option>
        @endif
        @endforeach
    </select>
    <br>
    <br>
    <button type="submit">Editar Jogador</button>
    </form>

    
</body>
</html>