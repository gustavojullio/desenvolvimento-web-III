<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Times - Futebol</title>
</head>
<body>
    <h1>Times</h1>
    <a href="/time/new">Cadastrar Time</a>
    <br>
    <br>
    @if (Session::has('msg'))
        <script>window.alert("{{Session::get('msg')}}")</script>
    @endif

    @if(count($times) > 0)
        <table border="1">
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Nome Time
                </th>
                <th>
                    Ano Fundação
                </th>
                <th>
                    Técnico
                </th>
                <th>
                    Jogadores
                </th>
                <th>
                    Editar
                </th>
                <th>
                    Excluir
                </th>
            </tr>
            @foreach($times as $time)
                <tr>
                    <td>{{$time->id}}</td>
                    <td>{{$time->nome}}</td>
                    <td>{{$time->ano_fundacao}}</td>
                    <td>{{$time->tecnico}}</td>
                    <td>{{count($time->jogadores)}}</td>
                    <td>
                        <a href="/time/{{$time->id}}" title="Editar time {{$time->nome}}" class="btn" >Editar</a>
                    </td>
                    <td>
                        <form action="/time/{{$time->id}}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir o time?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" title="Excluir time {{$time->nome}} ">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <h1>Não há times cadastrados</h1>
    @endif
</body>
</html>