<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagem/png" href="img/bora.png">
    <title>Logar</title>
    <style>
                /* Estilos para o corpo da página */
        body {
            background-color: #333; /* Cinza escuro de fundo */
            color: #f5f5f5; /* Texto branco claro para contraste */
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        /* Contêiner para centralizar o conteúdo */
        .container {
            background-color: #444; /* Fundo levemente mais claro que o fundo da página */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            text-align: center;
        }

        /* Estilo para o botão "Entrar" */
        .container a {
            text-decoration: none;
            color: #ffffff;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
            display: inline-block;
        }

        .container a:hover {
            background-color: #888; /* Alteração de cor ao passar o mouse */
        }

    </style>
</head>
<body>
    <div class="container">
    <?php
    if (!isset($_SESSION)) {
        session_start();
    }

    if (!isset($_SESSION['id'])) {
        die("Você não pode acessar essa página porque não está logado.<p><a href=\"login.php\">Entrar</a></p>");
    }
    ?>
</div>
</body>
</html>

