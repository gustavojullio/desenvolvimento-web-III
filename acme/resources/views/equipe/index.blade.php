<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipes</title>
</head>
<body>
    <h1>Equipes - Cadastradas</h1>
    <table border="1">
        <tr>
            <th>Equipe</th>
            <th>Setor</th>
            <th>Membros</th>
            <th>Adicionar desenvolvedor</th>
        </tr>
        @foreach($equipes as $equipe)
            <tr>
                <td>{{$equipe->nome}}</td>
                <td>{{$equipe->setor}}</td>
                <td>{{$equipe->qt_membros}}</td>
                <td><a href="/{{$equipe->id}}/desenvolvedor/add">Adicionar desenvolvedor</a></td>
            </tr>
        @endforeach
    </table>
        <a href="/desenvolvedor">Ver todos os desenvolvedores</a>
   
</body>
</html>