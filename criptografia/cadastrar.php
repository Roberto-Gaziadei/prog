<?php

include "conexao.php";

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$nivel = $_POST['nivel'];

$hash = password_hash($senha, PASSWORD_ARGON2I);
password_verify($senha, $hash);

$sql = "INSERT INTO usuario (nome, senha, nivel) VALUES 
        ('$nome', '$hash', 2)";
$resultado = mysqli_query($conexao, $sql);

header("Location: index.php");
