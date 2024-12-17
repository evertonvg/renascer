<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo contato - Renascer</title>
</head>
<body>
    <h1>Novo contato recebido</h1>
    
</body>
</html>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo contato - renascer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .header {
            background-color: #f4f4f4;
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        .content {
            padding: 15px;
        }
        .footer {
            font-size: 12px;
            text-align: center;
            margin-top: 15px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Novo Contato Recebido</h2>
        </div>
        <div class="content">
            <p><strong>Nome:</strong> {{ $dados['nome'] }}</p>
            <p><strong>Email:</strong> {{ $dados['email'] }}</p>
            <p><strong>Telefone:</strong> {{ $dados['telefone'] }}</p>
            <p><strong>Assunto:</strong> {{ $dados['assunto'] }}</p>
            <p><strong>mensagem:</strong> {{ $dados['mensagem'] }}</p>
        </div>
        <div class="footer">
            <p>Este email foi enviado através do formulário de contato do site.</p>
        </div>
    </div>
</body>
</html>