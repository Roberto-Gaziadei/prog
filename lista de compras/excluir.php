<?php

// Conectar ao BD
include("conecta.php");

// receber os dados do formulário
$id_item = $_GET['id_item'];

$sql = "DELETE FROM compra WHERE id_item = $id_item";

// executa o comando no BD
mysqli_query($conexao,$sql);

header("location: listar.php");
?>