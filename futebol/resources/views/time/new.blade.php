<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Time</title>
</head>
<body>
    <h1>Cadastro de Time</h1>
    <form action="/time/store" method="post">
    @csrf
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome">
    <br>
    <br>

    <label for="ano_fundacao">Ano de Fundação:</label>
    <input type="number" name="ano_fundacao" id="ano_fundacao">
    <br>
    <br>

    <label for="tecnico">Técnico:</label>
    <input type="text" name="tecnico" id="tecnico">


    <br>
    <br>
    
    <button type="submit">Cadastrar</button>
    </form>

    
</body>
</html>