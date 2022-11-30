<?php
require_once("../php/conexao.php");
$nome = $_POST["nome"];
$email = $_POST["email"];
$RA = $_POST["RA"];
$mensagem = $_POST["mensagem"];

$query = $conexao->prepare("INSERT INTO denuncia(email, nome, RA, mensagem) VALUES (?, ?, ?, ?)");
$query->bindParam(1, $email);
$query->bindParam(2, $nome);
$query->bindParam(3, $RA);
$query->bindParam(4, $mensagem);
$query->execute();

setcookie('SUCCESS', true, time() + (10), "/");

header("location:../denuncias.php");

?>