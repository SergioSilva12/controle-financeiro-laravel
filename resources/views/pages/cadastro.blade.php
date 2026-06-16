<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar</title>
</head>

<body>
    <form method="post" action="{{ route('cadastro.cadastrar') }}">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o seu nome" value="{{ old('nome') }}">
        @error('nome')
            {{ $message }}
        @enderror

        <label for="email">E-mail:</label>
        <input type="text" name="email" id="email" placeholder="Digite o seu email" value="{{ old('email') }}">
        @error('email')
            {{ $message }}
        @enderror

        <label for=" telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" name="telefone" placeholder="(DD) 0000-0000" value="{{ old('telefone') }}">
        @error('telefone')
            {{ $message }}
        @enderror

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" placeholder="Digite a sua senha" value="{{ old('senha') }}">
        @error('senha')
            {{ $message }}
        @enderror

        <label for="aceite_termos">Aceita os termos?</label>
        <input type="radio" name="aceite_termos" id="aceite_termos" value="1">
        @error('aceite_termos')
            {{ $message }}
        @enderror

        <button type="submit">Cadastrar</button>
    </form>
</body>

</html>