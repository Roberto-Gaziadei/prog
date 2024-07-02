<?php
if ($_POST) {
    session_start();

    if (!isset($_SESSION['usuario'])) {
        echo "Você não esta logado!" . '<a href="index.php">Logar-se</a>';
    }
}
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$_SESSION['usuario'] = $nome;


require_once "conexao.php";

$sql = "SELECT * FROM usuario WHERE nome='$nome'";
$resultado = mysqli_query($conexao, $sql);

$usuario = $resultado->fetch_assoc();

$_SESSION['nivel'] = $usuario['nivel'];

if ($usuario == null) {
    die("Este usuario nao existe");
}

if (password_verify($senha, $usuario['senha'])) {
    if ($_SESSION['nivel'] == 2) {
        header('location: principal.php');
    }
    if ($_SESSION['nivel'] == 1) {
        header('location: principal-adm.php');
    }
} else {
    echo "senha errada";
}
