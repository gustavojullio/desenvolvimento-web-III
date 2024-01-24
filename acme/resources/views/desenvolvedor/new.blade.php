<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de desenvolvedores</title>
</head>
<body>
    <h2>Cadastro de desenvolvedores</h2>
    <form action="/desenvolvedor/{id}" method="post">
        @csrf
        
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        
        <br>
        <br>

        <label for="linguagem">Linguagem</label>
        <input type="text" name="linguagem" id="linguagem">
        
        <br>
        <br>
        
        <input type="hidden" name="equipe" value="{{$equipe->id}}">


        <button type="submit" >Adicionar</button>
    </form>
    
</body>
</html>