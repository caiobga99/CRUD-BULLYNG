<?php
$usuario=$_POST["nome"];
$senha=$_POST["senha"];
require_once('conexao.php');
$sql =$conexao->query("SELECT id FROM usuario WHERE email='$usuario'");
$check = $sql->rowCount();
if ($check > 0) {
    setcookie('USER-EXISTS', true, time() + (10), "/");
    header('location:/CRUD-BULLYNG/src/signUp.php');
} else {
    session_start();
    $_SESSION['logged'] = true;
    $query=$conexao->prepare("INSERT INTO usuario(email, senha) VALUES(?,?)");
    $query->bindParam(1,$usuario);
    $query->bindParam(2,$senha);
    $query->execute();
    header('location:/CRUD-BULLYNG/index.php');
}
?>