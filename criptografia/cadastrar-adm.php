<?php

include "conexao.php";

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$nivel = $_POST['nivel'];

$hash = password_hash($senha, PASSWORD_ARGON2I);
password_verify($senha, $hash);

$sql = "INSERT INTO usuario (nome, senha, nivel) VALUES 
        ('$nome', '$hash', $nivel)";
$resultado = mysqli_query($conexao, $sql);
/* $usuarios = $resultado->fetch_assoc();


if($usuario['nivel'] == 1){

} */

header("Location: principal-adm.php");
