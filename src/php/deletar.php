<?php
require_once("conexao.php");
$id = $_GET["id"];
$delete = $conexao->prepare("DELETE FROM denuncia WHERE id='$id'");
$delete->execute();


    header("location:../painel.php");
?>
