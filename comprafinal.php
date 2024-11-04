<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


if (!isset($_SESSION['contadorI'])) {
    $_SESSION['contadorI'] = 0;
}
if (!isset($_SESSION['contadorM'])) {
    $_SESSION['contadorM'] = 0;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['menosI']) && $_SESSION['contadorI'] > 0) {
        $_SESSION['contadorI']--;
    } elseif (isset($_POST['maisI'])) {
        $_SESSION['contadorI']++;
    }

    if (isset($_POST['menosM']) && $_SESSION['contadorM'] > 0) {
        $_SESSION['contadorM']--;
    } elseif (isset($_POST['maisM'])) {
        $_SESSION['contadorM']++;
    }
}

$imagem = isset($_GET['imagem']) ? $_GET['imagem'] : '';
$titulo = isset($_GET['titulo']) ? $_GET['titulo'] : '';
$tags = isset($_GET['tags']) ? $_GET['tags'] : '';
$horarios = isset($_GET['horarios']) ? $_GET['horarios'] : '';


$valorI = 30 * $_SESSION['contadorI'];
$valorM = 15 * $_SESSION['contadorM'];
$valorTotal = $valorI + $valorM;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagem/png" href="img/bora.png">
    <title>Seleção de Ingressos</title>
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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

        #container {
            display: flex;
            justify-content: center;
            gap: 40px;
            padding: 40px 20px; 
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .ticket-selection {
            background-color: #2b2e3a;
            padding: 20px;
            border-radius: 8px;
            width: 445%; 
            min-height: 500px;
        }

        .ticket-selection h3 {
            margin-bottom: 20px;
            font-size: 20px;
            color: #FFFFFF;
        }

        .ticket-type {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #3b3f4e;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 8px;
        }

        .ticket-type label {
            font-size: 16px;
            color: #FFFFFF;
        }

        .price {
            font-size: 14px;
            color: #bdbdbd;
        }

        .counter {
            display: flex;
            align-items: center;
        }

        .counter button {
            background-color: #2f3241;
            border: none;
            color: #fff;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            font-size: 16px;
            cursor: pointer;
        }

        .counter span {
            margin: 0 10px;
            font-size: 16px;
            color: #fff;
        }

        .order-summary {
            background-color: #2b2e3a;
            padding: 20px;
            border-radius: 8px;
            width: 305%; 
            min-height: 740px;
            display: flex;
            flex-direction: column;
        }

        .order-summary .header-section {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .order-summary .header-section img {
            width: 200px;
            height: 300px;
            border-radius: 8px;
            margin-right: 10px;
        }

        .order-summary .movie-details {
            font-size: 14px;
            color: #bdbdbd;
        }

        .order-summary .movie-details .title {
            font-size: 16px;
            font-weight: bold;
            color: #ffffff;
        }

        .order-summary .movie-details .info {
            margin-top: 5px;
        }

        .order-summary .movie-details .info span {
            display: block;
        }

        .order-summary .ticket-info {
            font-size: 14px;
            color: #bdbdbd;
            margin-top: 220px;
            border-top: 1px solid #444;
            padding-top: 10px;
        }

        .order-summary .total {
            font-size: 18px;
            font-weight: bold;
            color: #ffffff;
            margin-top: 15px;
            text-align: right;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .buttons a button {
            background-color: #2f3241;
            border: none;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
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
        <body>
<?php
if(isset($_SESSION["id"])){
?>
        <div id="container">
            <!-- Seção Esquerda para Seleção de Ingressos -->
            <div class="ticket-selection">
                <h3>ESCOLA O TIPO DE INGRESSO</h3>
                <form action="" method="POST">
                    <input type="hidden" name="imagem" value="<?php echo isset($imagem) ? $imagem : ''; ?>">
                    <input type="hidden" name="titulo" value="<?php echo isset($titulo) ? $titulo : ''; ?>">

                    <!-- Tipo de Ingresso Inteira -->
                    <div class="ticket-type">
                        <label>Inteira</label>
                        <div class="price">R$ 30,00</div>
                        <div class="counter">
                            <button type="submit" name="menosI">-</button>
                            <span><?php echo $_SESSION['contadorI']; ?></span>
                            <button type="submit" name="maisI">+</button>
                        </div>
                    </div>

                    <!-- Tipo de Ingresso Meia -->
                    <div class="ticket-type">
                        <label>Meia</label>
                        <div class="price">R$ 15,00</div>
                        <div class="counter">
                            <button type="submit" name="menosM">-</button>
                            <span><?php echo $_SESSION['contadorM']; ?></span>
                            <button type="submit" name="maisM">+</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Seção Direita para Resumo do Pedido -->
            <div class="order-summary">
                <div class="header-section">
                    <img src="<?php echo $imagem; ?>" alt="Imagem do Filme">
                    <div class="movie-details">
                        <div class="title"><?php echo isset($titulo) ? $titulo : 'Título do Filme'; ?></div>
                        <div class="info">
                            <span>Normal | Dublado</span>
                        </div>
                    </div>
                </div>
                <div class="ticket-info">
                    <p>Ingresso</p>
                    <?php 
                        if($_SESSION['contadorI'] > 0) {
                            echo "<p>{$_SESSION['contadorI']}x Inteira - R$ {$valorI}</p>";
                        }
                        if($_SESSION['contadorM'] > 0) {
                            echo "<p>{$_SESSION['contadorM']}x Meia - R$ {$valorM}</p>";
                        }
                    ?>
                </div>
                <div class="total">Total: R$ <?php echo $valorTotal; ?></div>
                <div class="buttons">
                    <a href="catalogo.php"><button>Voltar</button></a>
                    <a href="finalizacao.php?imagem=<?php echo urlencode(isset($imagem) ? $imagem : ''); ?>&titulo=<?php echo urlencode(isset($titulo) ? $titulo : ''); ?>&valorTotal=<?php echo urlencode($valorTotal); ?>&valorM=<?php echo urlencode($valorM); ?>&valorI=<?php echo urlencode($valorI); ?>&contadorM=<?php echo urlencode($_SESSION['contadorM']); ?>&contadorI=<?php echo urlencode($_SESSION['contadorI']); ?>"><button>Finalizar</button></a>
                </div>
            </div>
        </div>
<?php
}else{
    include("protect.php");
}
?>
</body>
</html>