<?php
//conectar com o banco de dados.
$bdServidor = "localhost";
$bdUsuario = "root";
$bdSenha = "";
$bdBanco = "lista_compra";

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

?>