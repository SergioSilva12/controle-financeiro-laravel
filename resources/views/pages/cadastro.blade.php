<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="post" action="#">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o seu nome">

        <label for="email">E-mail:</label>
        <input type="text" name="email" id="email" name="email" placeholder="Digite o seu email">

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" name="email" placeholder="(DD) 0000-0000">

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" placeholder="Digite a sua senha">

        <label for="">Aceita os termos?</label>
        <input type="radio">
    </form>
</body>

</html>