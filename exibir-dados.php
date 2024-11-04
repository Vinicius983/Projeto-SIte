<?php

include('conexao.php');

$sql = "SELECT id, usuario, email FROM usuarios";
$result = $MYSQLI->query($sql);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo " - Nome: " . $row["usuario"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "Nenhum resultado encontrado.";
}

$MYSQLI->close();