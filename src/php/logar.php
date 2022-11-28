<?php
$email=$_POST["nome"];
$senha=$_POST["senha"];

require_once('conexao.php');
$query=$conexao->prepare("SELECT email, senha FROM usuario WHERE email = ? AND senha = ?");
$query->bindParam(1,$email);
$query->bindParam(2,$senha);
$query->execute();
$row_count = $query->fetchColumn();

echo $row_count;
if ($row_count != ''){
    session_start();
    $_SESSION['logged'] = true;
    $_SESSION['email'] = $email;
    header('location:/CRUD-BULLYNG/index.php');
}
else{
    setcookie('LOGIN-ERROR', true, time() + (10), "/");
    echo "<script> location.href='../signIn.php'</script>";

}
?>