<?php

include "conexao.php";

$nome = $_POST['nome'];
$senha = $_POST['senha'];

$hash = password_hash($senha, PASSWORD_ARGON2I);
if (password_verify($senha, $hash)) {
    header('location:principal.php');
} else {
    header('location:index.php');
}

$sql = "INSERT INTO usuario (nome, senha) VALUES 
        ('$nome', '$hash')";
$resultado = mysqli_query($conexao, $sql);
if ($resultado === false) {
    if (mysqli_errno($conexao) == 1062) {
        echo "Email já cadastrado no sistema! 
              Tente fazer o login ou faça a recuperação de senha.";
        die();
    } else {
        echo "Erro ao inserir o novo usuário! " .
            mysqli_errno($conexao) . ": " . mysqli_error($conexao);
        die();
    }
}
header("Location: index.php");
