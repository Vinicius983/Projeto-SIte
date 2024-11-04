<?php
error_reporting(0);

include('conexao.php');

$mensagemCadastro = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	$usuario = $_POST['usuario'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$numero = $_POST['numero'];
	$senha = $_POST['senha'];
	$senha1 = $_POST['senha1'];

	
	if ($senha !== $senha1) {
        $senhaincorreta = "Senha não é igual!";
    } else {
        //vai entrar no SQL e vai ver se ja existe o mesmo cpf, emil e numero
        $stmt = $MYSQLI->prepare("SELECT * FROM usuarios WHERE cpf = ? OR email = ? OR numero = ?");
        $stmt->bind_param("sss", $cpf, $email, $numero);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {
            //se tiver o mesmo vai mostrar q ja ta cadastrado
            $erroCadastro = "Usuário já cadastrado!";
        } else {
            //se não tiver da pra se cadastrar bunitin
            $stmt = $MYSQLI->prepare("INSERT INTO usuarios (usuario, cpf, email, numero, senha) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $usuario, $cpf, $email, $numero, $senha);

            if ($stmt->execute()) {
                $mensagemCadastro = "Cadastro realizado com sucesso!";
            } else {
                echo "Erro: " . $stmt->error;
            }
        }

        $stmt->close();
    }
}


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="shortcut icon" type="imagex/png" href="img/bora.png">
<head>
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

.top-bar {
    position: absolute;
    top: 10px;
    left: 10px;
}

.top-bar img {
    width: 200px;
}

.login-container {
    background: rgba(0, 0, 0, 0.8);
    padding: 40px;
    border-radius: 8px;
    text-align: center;
    color: #fff;
    width: 400px; 
    position: relative;
}

.login-header {
    text-align: left;
    padding-bottom: 10px;
}

.login-header h2 {
    margin: 0;
    font-size: 24px;
    color: #ffffff;
}

.login-logo {
    position: absolute;
    top: 10px;
    right: 10px;
    width: 100px;
}

.login-description {
    margin-top: -5px;
    font-size: 16px;
    color: #ccc;
    text-align: left;
}

.login-container input[type="text"],
.login-container input[type="email"],
.login-container input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: none;
    border-radius: 15px;
    background: #333;
    color: #fff;
    font-size: 14px;
}

.login-container button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background: linear-gradient(to right, #6a11cb, #2575fc);
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    margin-top: 20px;
}

.login-container button:hover {
    background: linear-gradient(to right, #2575fc, #6a11cb);
}

.login-container a {
    color: #4a90e2;
    text-decoration: none;
    font-size: 14px;
    font-weight: bold;
}

.login-container a:hover {
    text-decoration: underline;
    color: #4a90e2;
}

.center {
    text-align: center;
}

small {
    display: block;
    color: #bdbdbd;
    margin-top: 10px;
    font-size: 12px;
}
</style>
</head>

<body> 
<div class="top-bar">
        <a href="index.php">
            <img src="img/teickett.png" alt="Ticket Zone Logo">
        </a>
    </div>

	<form action="" method="POST">
    <div class="login-container">
    <img src="img/teickett.png" alt="TICKET ZONE" class="login-logo">
    <div class="login-header">
		<center>
			<h2> Cadastre-se </h2>
				<input type="text" name="usuario" maxlength="100" placeholder="Nome completo" required><br />
				<input type="text" name="cpf" maxlength="14" placeholder="CPF" oninput="aplicarMascaraCPF(this)" required><br />
				<input type="email" name="email" placeholder="Email" required><br/>
				<input type="text" name="numero" placeholder="Número de telefone(DD)" oninput="aplicarMascaraTelefone(this)" required><br />
				<input type="password" name="senha" placeholder="Senha" required><br/>
				<input type="password" name="senha1" placeholder="Repita a senha" required>
				<br />
				<br />
				<br />

				<button type="submit">Criar</button>
				<br />
		</center>
        <?php
            if ($senhaincorreta) {
                echo '<p style="color: red;"><br>' . $senhaincorreta . '<br><br></p>';
            }
            if (isset($erroCadastro)) {
                echo '<p style="color: red;"><br>' . $erroCadastro . '<br><br></p>';
            }
            if ($mensagemCadastro) {
                echo '<p style="color: green;"><br>' . $mensagemCadastro . '<br><br></p>';
            }
        ?>
    </div>
	</form>
	<?php
		echo '<center>';
		if($senhaincorreta){
			echo '<br>'.$senhaincorreta.'<br><br>';
		}
		if (isset($erroCadastro)) {
			echo '<br>' . $erroCadastro . '<br><br>';
		}
		echo '</center>';
	?>

	<script>
        function aplicarMascaraCPF(input) {
            let cpf = input.value;
            cpf = cpf.replace(/\D/g, ""); 
            cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2");
            cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2");
            cpf = cpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
            input.value = cpf;
        }

        function aplicarMascaraTelefone(input) {
            let telefone = input.value;
            telefone = telefone.replace(/\D/g, ""); 
            telefone = telefone.replace(/^(\d{2})(\d)/, "($1) $2"); 
            telefone = telefone.replace(/(\d{5})(\d{4})$/, "$1-$2"); 
            input.value = telefone;
        }
    </script>

	<center><b>Já tem uma conta?<a href="login.php">Clique aqui!</a></b></center>

</body>

</html>