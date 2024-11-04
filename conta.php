<?php
include('conexao.php');


$sql = "SELECT usuario, cpf, email, numero FROM usuarios";
$result = $MYSQLI->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagem/png" href="img/bora.png">
    <title>Conta</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('img/palhaco.jpg');
            background-size: cover;
            margin: 0;
            font-family: Arial, sans-serif;
            color: #fff;
        }

        .container {
            text-align: center;
            width: 320px;
            background-color: #111;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);

        }

        .info-box {
            background-color: #222;
            padding: 15px;
            margin: 10px 0;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);

        }

        .info-box h2 {
            margin: 0;
            font-size: 16px;
            color: #fff;
        }

        .info-box p {
            font-size: 14px;
            color: #ddd;
            margin: 5px 0 0;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #fff;
            color: #000;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none;
            transition: 0.3s ease;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
        }

        .button:hover {
            background-color: #ddd;
            color: #000;
            box-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff;
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            padding: 10px 20px;
            background-color: #fff;
            color: #000;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 10px;
            text-decoration: none;
            transition: 0.3s ease;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
            cursor: pointer;
        }

        .back-button:hover {
            background-color: #ddd;
            box-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff;
        }
    </style>
</head>

<body>
    <!-- Botão de Voltar fixo no canto superior esquerdo -->
    <a href="javascript:history.back()" class="back-button">Voltar</a>

    <div class="container">
        <?php
        // Verificando se há resultados e exibindo os dados
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='info-box'>";
                echo "<h2>Usuário:</h2>";
                echo "<p>" . $row["usuario"] . "</p>";
                echo "</div>";

                echo "<div class='info-box'>";
                echo "<h2>CPF</h2>";
                echo "<p>" . $row["cpf"] . "</p>";
                echo "</div>";

                echo "<div class='info-box'>";
                echo "<h2>Telefone</h2>";
                echo "<p>" . $row["numero"] . "</p>";
                echo "</div>";

                echo "<div class='info-box'>";
                echo "<h2>E-mail</h2>";
                echo "<p>" . $row["email"] . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>Nenhum resultado encontrado.</p>";
        }

        // Fechando a conexão
        $MYSQLI->close();
        ?>

        <!-- Botão de Sair -->
        <a href="logout.php" class="button">Sair Conta</a>
    </div>
</body>

</html>