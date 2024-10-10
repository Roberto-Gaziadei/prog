<?php

// Conectar ao BD
include("conecta.php");

// receber os dados do formulário
$id_item = $_GET['id_item'];
$descricao_produto = $_GET['descricao_produto'];
$quantidade = $_GET['quantidade'];
$categoria_produto = $_GET['categoria_produto'];
$mes = $_GET['mes'];
$ano = $_GET['ano'];


$sql = "UPDATE compra SET 
descricao_produto = '$descricao_produto', quantidade = $quantidade,
categoria_produto = '$categoria_produto', mes= '$mes', ano = '$ano'
WHERE id_item = $id_item";
mysqli_query($conexao,$sql);

if ($conexao->error) {

    die("Falha ao editar usuário no sistema:". $conexao->error);

}else {
    header("location: listar.php");
}
// executa o comando no BD

?>