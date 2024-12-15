<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
</head>
<body>
    <h1>Novo contato recebido</h1>
    <p><strong>Nome:</strong> {{ $dados['nome'] }}</p>
    <p><strong>Email:</strong> {{ $dados['email'] }}</p>
    <p><strong>Telefone:</strong> {{ $dados['telefone'] }}</p>
    <p><strong>Assunto:</strong> {{ $dados['assunto'] }}</p>
</body>
</html>