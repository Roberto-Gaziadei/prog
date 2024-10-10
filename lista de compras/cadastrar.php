<?php

//conectar ao banco de dados.
include("conecta.php");

//receber os dados do formulário.
$descricao_produto = $_GET['descricao_produto'];
$quantidade = $_GET['quantidade'];
$categoria_produto = $_GET['categoria_produto'];
$mes = $_GET['mes'];
$ano = $_GET['ano'];


//comando sql.
$sql = "INSERT INTO compra (descricao_produto, quantidade, categoria_produto, mes, ano) 
VALUES ('$descricao_produto', $quantidade, '$categoria_produto' , '$mes', $ano)";

header("location: listar.php");
 
//executar o comando sql.
mysqli_query($conexao, $sql);

?>