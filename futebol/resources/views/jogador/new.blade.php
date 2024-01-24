<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar JOgador</title>
</head>
<body>
    <h1>Cadastro de Jogador</h1>
    <form action="/jogador/store" method="post">
    @csrf
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome">
    <br>
    <br>

    <label for="posicao">Posição do Jogador:</label>
    <input type="text" name="posicao" id="posicao">
    <br>
    <br>

    <label for="idade">Idade:</label>
    <input type="number" name="idade" id="idade">

    <select name="time" id="time">
        @foreach($times as $time)
            <option value="{{$time->id}}">{{$time->nome}}</option>
        @endforeach
    </select>
        
    <br>
    <br>

    <button type="submit">Cadastrar</button>
    </form>

    
</body>
</html>