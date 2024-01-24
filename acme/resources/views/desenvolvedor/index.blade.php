<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desenvolvedores</title>
</head>
<body>
    <h1>Desenvolvedores - Cadastrados</h1>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Linguagem</th>
            <th>Equipe</th>
        </tr>
        @foreach($desenvolvedores as $desenvolvedor)
            <tr>
                <td>{{$desenvolvedor->nome}}</td>
                <td>{{$desenvolvedor->linguagem}}</td>
                <td>{{$desenvolvedor->equipe->nome}}</td>
            </tr>
        @endforeach
    </table>
        <a href="/">Voltar para a página inicial</a>
   
</body>
</html>