<?php
// TODO usar sessão
$nome = $_POST['nome'];
$senha = $_POST['senha'];

require_once "conexao.php";

$sql = "SELECT * FROM usuario WHERE nome='$nome'";
$resultado = mysqli_query($conexao, $sql);

$resultado2 = mysqli_fetch_assoc($resultado);

if (password_verify($senha, $resultado2['senha'])) {
    echo "logado";
} else {
    echo "nao logado";
}
/*if ($senha == $usuario['senha']) {
    header("Location: principal.php");
} else {
    echo "Senha inválida! Tente novamente.";
}*/