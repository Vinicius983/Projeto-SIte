<?php

$USUARIO = "root";
$SENHA = "1044";
$DATABASE = "login";
$HOST = "localhost";


$MYSQLI = new mysqli($HOST, $USUARIO, $SENHA, $DATABASE);
if ($MYSQLI->connect_errno) {
    echo "falha ao conectar:(" . $MYSQLI->connect_errno . $MYSQLI->connect_error;
} else
    echo "";
