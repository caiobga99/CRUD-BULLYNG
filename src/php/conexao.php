<?php

$porta = "localhost";
$nomeDoBanco = "database reportbullying";
$usuarioBanco = "root";
$senhaBanco = "";

$conexao = new PDO("mysql:host=$porta;
dbname=$nomeDoBanco", $usuarioBanco,
$senhaBanco);

?>