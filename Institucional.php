<?php

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

$institucional = [
    [
        'nome' => 'João Victor Fernandes Pereira',
        'FUNÇÃO' => "CSS",
        'imagem' => 'img/freddyicon.jpg',
        'RGM' => '37055119'
    ],
    [
        'nome' => 'Rodrigo Santos Araujo',
        'FUNÇÃO' => 'BANCO DE DADOS',
        'imagem' => 'img/jasonicon.jpg',
        'RGM' => '38212307'
    ],
    [
        'nome' => 'Eduardo Caserta Filho',
        'FUNÇÃO' => 'BANCO DE DADOS',
        'imagem' => 'img/coringaicon.jpg',
        'RGM' => '38162067'
    ],
    [
        'nome' => 'Vinícius Gabriel dos Santos Ferreira',
        'FUNÇÃO' => 'DESIGN',
        'imagem' => 'img/ghosticon.jpg',
        'RGM' => '38346761'
    ],
    [
        'nome' => 'Vinicius Alves Belitz',
        'FUNÇÃO' => 'BACK-END',
        'imagem' => 'img/bonecoicon.jpg',
        'RGM' => '36995754'
    ],
    [
        'nome' => 'Vinícius Balbino',
        'FUNÇÃO' => 'BACK-END',
        'imagem' => 'img/pennyicon.jpg',
        'RGM' => '34053000'
    ]
];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagem/png" href="img/bora.png">
    <title>Institucional</title>
    <style>
        body {
            background: url('img/fundoterry.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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

        .user-icon span {
            color: #FFFFFF; 
            font-size: 1rem; 
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .login-button {
            border: 1px solid #FFFFFF;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .participantes-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .linha {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-bottom: 20px;
        }

        .institucional {
            text-align: center;
            width: 150px;
            color: white;
        }

        .institucional img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 3px solid white;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.5);
        }

        .institucional h3 {
            font-size: 1rem;
            margin: 10px 0 5px;
        }

        .institucional p {
            font-size: 0.9rem;
            margin: 0;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #000000; 
            padding: 10px 80px;
        }

        .footer {
            display: flex;
            align-items: center;          
            justify-content: space-between;
            padding: 10px 20px;          
            width: 100%;
            box-sizing: border-box;
        }

        footer {
            background-color: #000;
            color: #FFFFFF;
            text-align: center;
            padding: 10px 0;
            margin: 0; 
            width: 100%; 
        }

        .footer-links a {
            color: #FFFFFF;
            text-decoration: none;
            margin: 0 15px;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }
        .button {
            background-color: #007BFF; 
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .button:hover {
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
    <h1 style="text-align: center;">Institucional</h1>
    <div class="participantes-container">
        
        <div class="linha">
            <?php foreach (array_slice($institucional, 0, 3) as $participante): ?>
                <div class="institucional">
                    <img src="<?php echo $participante['imagem']; ?>" alt="Imagem de <?php echo $participante['nome']; ?>">
                    <h3><?php echo $participante['nome']; ?></h3>
                    <p>FUNÇÃO: <?php echo $participante['FUNÇÃO'];?></p>
                    <strong>RGM:</strong> <?php echo $participante['RGM'];?>
                </div>
            <?php endforeach; ?>
        </div>
        
        <div class="linha">
            <?php foreach (array_slice($institucional, 3) as $participante): ?>
                <div class="institucional">
                    <img src="<?php echo $participante['imagem']; ?>" alt="Imagem de <?php echo $participante['nome']; ?>">
                    <h3><?php echo $participante['nome']; ?></h3>
                    <p>FUNÇÃO: <?php echo $participante['FUNÇÃO'];?></p>
                    <strong>RGM:</strong> <?php echo $participante['RGM'];?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>    
    <center><a href="funcionamento.php" class="button">Como funciona as estruturas</a>
            <a href="referencia.php" class="button">Referências</a></center>
</body>
</html>

