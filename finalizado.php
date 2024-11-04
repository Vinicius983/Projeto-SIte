<?php
    /*esse função ira verificar se a sessão ja foi iniciada
    O PHP_SESSION_NONE Irá ver se ha uma sessão ativa, caso não tenha ele ira iniciar uma*/
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagem/png" href="img/bora.png">
    <title>Finalizado</title>
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        header {
            background-color: #000;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #fff;
            width: 100%;
            position: fixed;
            top: 0;
        }

        .logo img {
            height: 60px;
            width: auto;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        nav ul li a {
            color: #FFFFFF;
            text-decoration: none;
            font-size: 1rem;
        }

        nav ul li a:hover {
            color: #f0f0f0;
        }

        .user-icon {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .user-icon img {
            width: 50px;
            height: 50px;
            object-fit: cover;
        }

        .container {
            width: 300px;
            padding: 70px;
            background-image: url('img/estrelas.png');
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .container h2 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #fff;
        }

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
            background-color: #0056b3;
        }

    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/teicket.png" alt="Logo Ticket Zone">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="catalogo.php">Catálogo</a></li>
                <li><a href="Institucional.php">Institucional</a></li>
            </ul>
        </nav>
        <div class="user-icon">
            <?php
            if(isset($_SESSION["id"])) {
                echo '<a href="conta.php" style="text-decoration: none;"><img src="img/user-icon.png" alt=""></a>';
            } else {
                echo '<a href="login.php" style="text-decoration: none;"><img src="img/user-icon.png" alt=""></a>
                      <a href="login.php" style="text-decoration: none; color: #bdbdbd;">Entre ou Cadastre-se</a>';
            }
            ?>
        </div>
    </header>
    
    <div class="container">
        <?php
        echo '<h2>Compra Finalizada</h2>';
        echo '<a href="catalogo.php">Voltar</a>';
        ?>
    </div>
</body>
</html>
