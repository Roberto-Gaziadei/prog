<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
if($usuario == 'Roberto' and $senha == 1111){


// Teste a sessao
session_start();

$_SESSION['usuario'] = $usuario;
header('location:principal.php');
}
?>