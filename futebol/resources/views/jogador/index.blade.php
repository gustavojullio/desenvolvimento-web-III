<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogadores - Futebol</title>
</head>
<body>
    <h1>Jogadores</h1>
    <a href="/jogador/new">Cadastrar Jogador</a>
    <br>
    <br>
    @if (Session::has('msg'))
        <script>window.alert("{{Session::get('msg')}}")</script>
    @endif

    @if(count($jogadores) > 0)
        <table border="1">
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Nome Jogador
                </th>
                <th>
                    Posição
                </th>
                <th>
                    Idade
                </th>
                <th>
                    Time
                </th>
                <th>
                    Editar
                </th>
                <th>
                    Excluir
                </th>
            </tr>
            @foreach($jogadores as $jogador)
                <tr>
                    <td>{{$jogador->id}}</td>
                    <td>{{$jogador->nome}}</td>
                    <td>{{$jogador->posicao}}</td>
                    <td>{{$jogador->idade}}</td>
                    <td>{{$jogador->time->nome}}</td>
                    <td>
                        <a href="/jogador/{{$jogador->id}}" title="Editar jogador {{$jogador->nome}}" class="btn" >Editar</a>
                    </td>
                    <td>
                        <form action="/jogador/{{$jogador->id}}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir o jogador?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" title="Excluir jogador {{$jogador->nome}} ">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <h1>Não há jogadores cadastrados</h1>
    @endif
</body>
</html>