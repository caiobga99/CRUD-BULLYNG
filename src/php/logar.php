<?php
$email=$_POST["nome"];
$senha=$_POST["senha"];

require_once('conexao.php');
$query=$conexao->prepare("SELECT email, senha, isAdmin FROM usuario WHERE email = ? AND senha = ?");
$query->bindParam(1,$email);
$query->bindParam(2,$senha);
$query->execute();
$dados = $query->fetch(PDO::FETCH_OBJ);
$email_banco=$dados->email;
$isAdmin_banco=$dados->isAdmin;
if (!empty($email_banco)){
    if($isAdmin_banco != 1){
        session_start();
        echo $email_banco;
        $_SESSION['email'] = $email_banco;
        $_SESSION['logged'] = true;
        $_SESSION['isAdmin'] = false;
        header('location:/CRUD-BULLYNG/index.php');
    }
    else{
        session_start();
        $_SESSION['email'] = $email_banco;
        $_SESSION['logged'] = true;
        $_SESSION['isAdmin'] = true;
        header('location:/CRUD-BULLYNG/src/painel.php?id=1');
    }
    
}
else{
    setcookie('LOGIN-ERROR', true, time() + (10), "/");
    echo "<script> location.href='../signIn.php'</script>";

}
?>