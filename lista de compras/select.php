<?php
include("conecta.php");

$descricao_produto = $_GET['descricao_produto'];
$quantidade = $_GET['quantidade'];
$categoria_produto = $_GET['categoria_produto'];
$mes = $_GET['mes'];
$ano = $_GET['ano'];

$sql = 'SELECT ano FROM compra WHERE ano = $ano';

mysqli_query($conexao, $sql);

?>