<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$imagem = isset($_GET['imagem']) ? $_GET['imagem'] : '';
$titulo = isset($_GET['titulo']) ? $_GET['titulo'] : '';
$valorI = isset($_GET['valorI']) ? $_GET['valorI'] : 0; 
$valorM = isset($_GET['valorM']) ? $_GET['valorM'] : 0;
$contadorM = isset($_GET['contadorM']) ? $_GET['contadorM'] : 0;
$contadorI = isset($_GET['contadorI']) ? $_GET['contadorI'] : 0;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" type="imagem/png" href="img/bora.png">
<title>Escolha de cartão</title>
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

    .payment-section {
        display: flex;
        gap: 20px;
        padding: 20px;
    }

    .payment-option, .order-summary {
        background-color: #222;
        padding: 50px;
        border-radius: 10px;
        flex: 1;
    }

    .payment-option button {
        background-color: #444;
        color: #fff;
        border: none;
        padding: 10px 20px;
        margin: 5px 0;
        cursor: pointer;
        width: 100%;
        border-radius: 5px;
        font-size: 1rem;
    }

    .payment-option button:hover {
        background-color: #555;
    }

    .order-summary img {
        width: 20%;
        height: auto;
        border-radius: 5px;
    }

    
    .modal {
        display: none; 
        position: fixed; 
        z-index: 1; 
        left: 0;
        top: 0;
        width: 100%; 
        height: 100%; 
        overflow: auto; 
        background-color: rgba(0, 0, 0, 0.8); 
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        background-color: #1e1e1e;
        padding: 50px;
        border-radius: 10px;
        width: 90%;
        max-width: 500px;
        position: relative;
    }

    .close {
        color: #aaa;
        position: absolute;
        top: 10px;
        right: 20px;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: #fff;
        text-decoration: none;
        cursor: pointer;
    }

    .modal-content form input[type="text"],
    .modal-content form input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: none;
        border-radius: 5px;
    }

    .modal-content form input[type="submit"] {
        background-color: #444;
        color: #fff;
        cursor: pointer;
    }

    .modal-content form input[type="submit"]:hover {
        background-color: #555;
    }

    h3, h4, p {
        margin: 10px 0;
    }

    hr {
        border: 0;
        height: 1px;
        background: #555;
        margin: 10px 0;
    }
</style>
</head>
<body>
<?php
if(isset($_SESSION["id"])){
?>
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
        <?php
        if(isset($_SESSION["id"])){
            echo '<div class="user-icon">
                <a href="conta.php" style="text-decoration: none;"><img src="img/user-icon.png" alt=""></a> 
            </div>';
        }else{
            echo '<div class="user-icon">
            <a href="login.php" style="text-decoration: none;"><img src="img/user-icon.png" alt=""></a>
            <a href="login.php" style="text-decoration: none;"><span style="color: #FFFFFF;">Entre ou Cadastre-se</span></a>
        </div>';
        }
        ?>
        </header>

        <div class="payment-section">
        <div class="payment-option">
            <form id="paymentForm" action="" method="GET">
                <!-- Preservando valores ao selecionar "Crédito" ou "Débito" -->
                <input type="hidden" name="imagem" value="<?php echo htmlspecialchars($imagem); ?>">
                <input type="hidden" name="titulo" value="<?php echo htmlspecialchars($titulo); ?>">
                <input type="hidden" name="valorI" value="<?php echo htmlspecialchars($valorI); ?>">
                <input type="hidden" name="valorM" value="<?php echo htmlspecialchars($valorM); ?>">
                <input type="hidden" name="contadorI" value="<?php echo htmlspecialchars($contadorI); ?>">
                <input type="hidden" name="contadorM" value="<?php echo htmlspecialchars($contadorM); ?>">
                
                <button type="button" id="creditoBtn">Crédito</button>
                <button type="button" id="debitoBtn">Débito</button>
            </form>
        </div>

        <div class="order-summary">
            <h3>Resumo do pedido</h3>
            <img src="<?php echo htmlspecialchars($imagem); ?>" alt="Imagem do Produto">
            <h4><?php echo htmlspecialchars($titulo); ?></h4>
            <p>NORMAL</p>
            <p>DUBLADO</p>
            <hr>
            <p>Ingresso</p>
            <p><?php echo htmlspecialchars($contadorI); ?>X Inteira R$<?php echo htmlspecialchars(number_format($valorI, 2, ',', '.')); ?></p>
            <p><?php echo htmlspecialchars($contadorM); ?>X Meia R$<?php echo htmlspecialchars(number_format($valorM, 2, ',', '.')); ?></p>
            <hr>
            <p><strong>TOTAL</strong></p>
            <?php
                $valorTotal = ($valorI * $contadorI) + ($valorM * $contadorM);
                if($valorTotal >= 1){
                    echo '<p>R$'.number_format($valorTotal, 2, ',', '.').'</p>';
                }
            ?>
        </div>
        </div>

        <!-- Modal para Crédito/Débito -->
        <div id="paymentModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h3>Pagamento via <span id="tipoPagamento"></span></h3>
            <form action="finalizado.php" method="POST">
                <input type="hidden" name="imagem" value="<?php echo htmlspecialchars($imagem); ?>">
                <input type="hidden" name="titulo" value="<?php echo htmlspecialchars($titulo); ?>">
                <input type="hidden" name="valorI" value="<?php echo htmlspecialchars($valorI); ?>">
                <input type="hidden" name="valorM" value="<?php echo htmlspecialchars($valorM); ?>">
                <input type="hidden" name="contadorI" value="<?php echo htmlspecialchars($contadorI); ?>">
                <input type="hidden" name="contadorM" value="<?php echo htmlspecialchars($contadorM); ?>">
                <input type="hidden" name="tipoPagamento" id="tipoPagamentoInput" value="">
                
                <input type="text" name="cartao" maxlength="19" placeholder="Número do Cartão (XXXX XXXX XXXX XXXX)" oninput="mascaraCartao(this)" required><br>
                <label>(por ser um site para um projeto de faculdade, não use seu verdadeiro cartão)</label><br>
                <input type="text" name="validade" maxlength="5" placeholder="Data de validade (MM/AA)" oninput="mascaraValidade(this)" required><br>
                <input type="text" name="CVV" maxlength="3" placeholder="CVV" required><br>
                <input type="text" name="titular" placeholder="Nome do Titular" required><br>
                <input type="submit" name="finalizar" value="Finalizar">
            </form>
        </div>
        </div>

        <script>
        // Máscaras para o cartão e a vlidade
        function mascaraCartao(input) {
            let valor = input.value.replace(/\D/g, '');
            valor = valor.substring(0,16);
            let partes = [];
            for(let i = 0; i < valor.length; i += 4){
                partes.push(valor.substring(i, i + 4));
            }
            input.value = partes.join(' ');
        }

        function mascaraValidade(input) {
            let valor = input.value.replace(/\D/g, '');
            if (valor.length > 2) {
                valor = valor.substring(0,2) + '/' + valor.substring(2,4);
            }
            input.value = valor;
        }

        const creditoBtn = document.getElementById('creditoBtn');
        const debitoBtn = document.getElementById('debitoBtn');
        const modal = document.getElementById('paymentModal');
        const closeBtn = document.querySelector('.close');
        const tipoPagamentoSpan = document.getElementById('tipoPagamento');
        const tipoPagamentoInput = document.getElementById('tipoPagamentoInput');

        creditoBtn.addEventListener('click', () => {
            tipoPagamentoSpan.textContent = 'Crédito';
            tipoPagamentoInput.value = 'Crédito';
            modal.style.display = 'flex';
        });

        debitoBtn.addEventListener('click', () => {
            tipoPagamentoSpan.textContent = 'Débito';
            tipoPagamentoInput.value = 'Débito';
            modal.style.display = 'flex';
        });

        closeBtn.addEventListener('click', () => {
            modal.style.display = 'none';
        });

        window.addEventListener('click', (event) => {
            if(event.target == modal){
                modal.style.display = 'none';
            }
        });
        </script>
<?php
}else{
    include("protect.php");
}
?>
</body>
</html>

